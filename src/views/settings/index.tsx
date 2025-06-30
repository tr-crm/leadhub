import React, { useState, useEffect } from 'react';
import {
  Container,
  Form,
  Modal,
  Button,
  ListGroup,
  Row,
  Col,
  Spinner,
  Alert,
} from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import {
  fetchTelecallers,
  saveAutoAssignSettings,
} from '@/services/settingsservice';

import type {
  Telecaller,
  AssignmentPayload,
} from '@/services/settingsservice';
import { getUserInfo } from '@/utils/auth';
// import { json } from 'stream/consumers';

const Page: React.FC = () => {
  const user = getUserInfo();

  const typeVal = user.type;
  const userIdVal = user.id;
  const tokenVal = user.access_token;
   const regionVal = user.region;

  const [autoAssign, setAutoAssign] = useState<number>(0);
  const [assign, setAssign] = useState<{ id: string; order: number }[]>([]);
  const [telecallers, setTelecallers] = useState<Telecaller[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [showModal, setShowModal] = useState<boolean>(false);
  const [showConfirmModal, setShowConfirmModal] = useState<boolean>(false);
  const [saving, setSaving] = useState<boolean>(false);
  const [error, setError] = useState<string>('');
  const [successMsg, setSuccessMsg] = useState<string>('');

  // Auto-clear success message
  useEffect(() => {
    if (successMsg) {
      const timer = setTimeout(() => setSuccessMsg(''), 4000);
      return () => clearTimeout(timer);
    }
  }, [successMsg]);

  // Auto-clear error message
  useEffect(() => {
    if (error) {
      const timer = setTimeout(() => setError(''), 4000);
      return () => clearTimeout(timer);
    }
  }, [error]);

  useEffect(() => {
    const loadTelecallers = async () => {
      setLoading(true);
      try {
        const data = await fetchTelecallers({ typeVal, userIdVal, tokenVal,regionVal});
        setTelecallers(data);
// const autoassignstatus = data[0].autoAssignTelecallersVal
    
        const active = data
          .filter((tc) => tc.is_available_for_assignment === '1')
          .sort((a, b) => Number(a.assignment_order) - Number(b.assignment_order))
          .map((tc, index) => ({
            id: tc.id,
            order: index + 1,
          }));

        if (active.length > 0) {
          setAutoAssign(1);
          setAssign(active);
        }
      } catch (err: any) {
        setError(err.message);
      } finally {
        setLoading(false);
      }
    };

    loadTelecallers();
  }, []);

  const handleToggle = (e: React.ChangeEvent<HTMLInputElement>) => {
    const checked = e.target.checked;
    if (checked) {
      setShowModal(true);
    } else {
      setShowConfirmModal(true);
    }
  };

  const handleAssign = (id: string) => {
    setAssign((prev) => {
      const exists = prev.find((a) => a.id === id);
      if (exists) {
        const updated = prev.filter((a) => a.id !== id);
        return updated.map((a, i) => ({ ...a, order: i + 1 }));
      } else {
        return [...prev, { id, order: prev.length + 1 }];
      }
    });
  };

  const handleSave = async () => {
    if (assign.length === 0) {
      setError('Please assign at least one telecaller.');
      return;
    }

    const assignments: AssignmentPayload[] = assign.map((a) => ({
      userIdVal: parseInt(a.id),
      assignmentOrderVal: a.order,
    }));

    try {
      setSaving(true);
      await saveAutoAssignSettings({
        typeVal,
        userIdVal,
        tokenVal,
        regionVal,
        autoAssignTelecallersVal: '1',
        assignmentsVal: assignments,
      });
      setAutoAssign(1);
      setSuccessMsg('Settings saved successfully!');
      setShowModal(false);
      setError('');
    } catch (err: any) {
      setError(err.message);
      setSuccessMsg('');
    } finally {
      setSaving(false);
    }
  };

  const confirmDisable = async () => {
    try {
      setSaving(true);
      await saveAutoAssignSettings({
        typeVal,
        userIdVal,
        tokenVal,
        regionVal,
        autoAssignTelecallersVal: '0',
        assignmentsVal: [],
      });
      setAssign([]);
      setAutoAssign(0);
      setSuccessMsg('Auto Assign disabled successfully.');
      setShowConfirmModal(false);
      setError('');
    } catch (err: any) {
      setError(err.message);
      setSuccessMsg('');
    } finally {
      setSaving(false);
    }
  };

  const assignedWithNames = assign
    .map((item) => {
      const user = telecallers.find((tc) => tc.id === item.id);
      return user ? { ...item, name: user.full_name } : null;
    })
    .filter((item): item is { id: string; order: number; name: string } => item !== null)
    .sort((a, b) => a.order - b.order);

  if (loading)
    return (
      <Container className="py-4 text-center">
        <Spinner animation="border" />
      </Container>
    );

  return (
    <Container fluid className="py-4">
      <PageBreadcrumb title="Settings" />

      <Row className="justify-content-center">
        <Col xs={12} md={6} className="text-center">
          <h3 className="mb-4">Lead Auto Assign Settings</h3>

          <Form>
            <Form.Check
              type="switch"
              id="autoAssignToggle"
              label={autoAssign ? 'Disable Lead Auto Assign' : 'Enable Lead Auto Assign'}
              checked={autoAssign === 1}
              onChange={handleToggle}
              className="fs-5"
            />
          </Form>

          {successMsg && <Alert variant="success" className="mt-3">{successMsg}</Alert>}
          {error && <Alert variant="danger" className="mt-3">{error}</Alert>}

        {autoAssign === 1 && assignedWithNames.length > 0 && (
            <div className="mt-4 text-start border rounded p-3 shadow-sm bg-light">
              <h5>Assigned Telecallers ({assignedWithNames.length}):</h5>
              <ListGroup variant="flush">
                {assignedWithNames.map((item, index) => (
                  <ListGroup.Item
                    key={item.id}
                    className="d-flex justify-content-between align-items-center"
                  >
                    <span>{index + 1}</span>
                    <span>{item.name}</span>
                    <span className="badge bg-primary rounded-pill">Order: {item.order}</span>
                  </ListGroup.Item>
                ))}
              </ListGroup>
            </div>
          )}
        </Col>
      </Row>

      {/* Assignment Modal */}
      <Modal show={showModal} onHide={() => setShowModal(false)} centered>
        <Modal.Header closeButton>
          <Modal.Title>Select Telecallers</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <ListGroup>
            {telecallers  .filter((tc) => tc.id !== String(userIdVal)).map((tc,index) => {
              const isAssigned = assign.some((a) => a.id === tc.id);
              return (
                <ListGroup.Item
                  key={tc.id}
                  action
                  active={isAssigned}
                  onClick={() => handleAssign(tc.id)}
                  style={{
                    cursor: 'pointer',
                    textTransform: 'capitalize',
                    display: 'flex',
                    justifyContent: 'space-between',
                    alignItems: 'center',
                    borderLeft: isAssigned ? '5px solid #0d6efd' : '5px solid transparent',
                    backgroundColor: isAssigned ? '#e7f1ff' : undefined,
                  }}
                >
                   <span>{index+1}</span>
                  <span>{tc.full_name}</span>
                  {isAssigned && <span className="badge bg-success">Selected</span>}
                </ListGroup.Item>
              );
            })}
          </ListGroup>
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setShowModal(false)} disabled={saving}>
            Cancel
          </Button>
          <Button variant="primary" onClick={handleSave} disabled={saving}>
            {saving ? 'Saving...' : 'Save'}
          </Button>
        </Modal.Footer>
      </Modal>

      {/* Confirm Disable Modal */}
      <Modal show={showConfirmModal} onHide={() => setShowConfirmModal(false)} centered>
        <Modal.Header closeButton>
          <Modal.Title>Disable Auto Assign</Modal.Title>
        </Modal.Header>
        <Modal.Body>Are you sure you want to disable Auto Assign?</Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setShowConfirmModal(false)} disabled={saving}>
            Cancel
          </Button>
          <Button variant="danger" onClick={confirmDisable} disabled={saving}>
            {saving ? 'Disabling...' : 'Disable'}
          </Button>
        </Modal.Footer>
      </Modal>
    </Container>
  );
};

export default Page;
