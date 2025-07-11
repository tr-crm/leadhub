import { useState, useEffect, useRef } from 'react';
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
import { toast } from 'react-toastify';
import type { removePayload } from '@/services/userservice';
import { submitRemoveAssignUser } from '@/services/userservice';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';

const Page: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  const user = isAuthenticated() ? getUserInfo() : null;

  useEffect(() => {
    if (!user) {
      setShowLogoutLoader(true);
    }
  }, [user]);

  const typeVal = user?.type;
  const userIdVal = user?.id;
  const tokenVal = user?.access_token;
  const regionVal = user?.region;

  const [autoAssign, setAutoAssign] = useState<number>(0);
  const [assign, setAssign] = useState<{ id: string; order: number }[]>([]);
  const [telecallers, setTelecallers] = useState<Telecaller[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [showModal, setShowModal] = useState<boolean>(false);
  const [showConfirmModal, setShowConfirmModal] = useState<boolean>(false);
  const [saving, setSaving] = useState<boolean>(false);
  const [error, setError] = useState<string>('');
  const [successMsg, setSuccessMsg] = useState<string>('');
  const [removingUserId, setRemovingUserId] = useState<number | null>(null);

  const hasFetched = useRef(false); // Prevent duplicate fetch

  // Modified loadTelecallers with force reload
  const loadTelecallers = async (force = false) => {
    if (!user || loading || (hasFetched.current && !force)) return;
    setLoading(true);
    hasFetched.current = true;

    try {
      const response = await fetchTelecallers({
        typeVal,
        userIdVal,
        tokenVal,
        regionVal,
      });

      if (response.response === 'login_error') {
         toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
        setTelecallers([]);

        setTelecallers(response.data);

        const active = response.data
          .filter((tc: Telecaller) => tc.is_available_for_assignment === '1')
          .sort((a: Telecaller, b: Telecaller) =>
            Number(a.assignment_order) - Number(b.assignment_order)
          )
          .map((tc: Telecaller, index: number) => ({
            id: tc.id,
            order: index + 1,
          }));

        if (active.length > 0) {
          setAutoAssign(1);
          setAssign(active);
        } else {
          setAutoAssign(0);
          setAssign([]);
        }
      }
    } catch (error: any) {
      setError(error.message);
      // console.log()
      if (error?.response?.data?.response === 'login_error') {
         toast.dismiss();
        toast.error(error?.response?.data?.message || 'Login failed. Redirecting...');
        setShowLogoutLoader(true);
        return;
      } else {
        setError('Failed to fetch leads. Please try again.');
         toast.dismiss();
        toast.error('Failed to fetch leads. Please try again.');
      }
    } finally {
      setLoading(false);
    }
  };

  // Initial fetch
  useEffect(() => {
    loadTelecallers();
  }, [user, loading, typeVal, userIdVal, tokenVal, regionVal]);

  // Auto-clear success and error messages
  useEffect(() => {
    if (successMsg) {
      const timer = setTimeout(() => setSuccessMsg(''), 4000);
      return () => clearTimeout(timer);
    }
  }, [successMsg]);

  useEffect(() => {
    if (error) {
      const timer = setTimeout(() => setError(''), 4000);
      return () => clearTimeout(timer);
    }
  }, [error]);

  const handlesubmitRemove = async (item: any) => {
    const payload: removePayload = {
      idVal: item.id,
      userIdVal: user.id,
      tokenVal: user.access_token,
      autoAssignTelecallersVal: 0,
      assignmentOrderVal: 0,
    };

    setRemovingUserId(item.id);

    try {
      const response=await submitRemoveAssignUser(payload);
      if (response.response === 'login_error') {
         toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
         toast.dismiss();
      toast.success(response.message);
      loadTelecallers(true); // ✅ force reload
      }
    } catch (error) {
       toast.dismiss();
      toast.error('Failed to remove user. Please try again.');
    } finally {
      setRemovingUserId(null);
    }
  };

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
     const response= await saveAutoAssignSettings({
        typeVal,
        userIdVal,
        tokenVal,
        regionVal,
        autoAssignTelecallersVal: '1',
        assignmentsVal: assignments,
      });
       if (response.response === 'login_error') {
         toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
         toast.dismiss();
      toast.success(response.message);
       setAutoAssign(1);
      setSuccessMsg('Settings saved successfully!');
      setShowModal(false);
      setError('');
      }
     
    } catch (err: any) {
      setError(err.message);
      setSuccessMsg('');
        toast.error(err.message);
    } finally {
      setSaving(false);
    }
  };

  const confirmDisable = async () => {
    try {
      setSaving(true);
     const response= await saveAutoAssignSettings({
        typeVal,
        userIdVal,
        tokenVal,
        regionVal,
        autoAssignTelecallersVal: '0',
        assignmentsVal: [],
      });
      if (response.response === 'login_error') {
         toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
         toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
         toast.dismiss();
      toast.success(response.message);
      setAssign([]);
      setAutoAssign(0);
      setSuccessMsg('Auto Assign disabled successfully.');
      setShowConfirmModal(false);
      setError('');
      }
      
    } catch (err: any) {
      setError(err.message);
       toast.dismiss();
      toast.error(err.message);
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
    .filter(
      (item): item is { id: string; order: number; name: string } => item !== null
    )
    .sort((a, b) => a.order - b.order);

  if (loading)
    return (
      <Container className="py-4 text-center">
        <Spinner animation="border" />
      </Container>
    );

  return (
    <Container fluid>
      <PageBreadcrumb title="Settings" />
      {showLogoutLoader && <LogoutOverlay duration={5} onComplete={() => logout()} />}
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
                    <button
                      className="btn btn-danger btn-sm rounded-pill"
                      disabled={removingUserId === Number(item.id)}
                      onClick={() => handlesubmitRemove(item)}
                    >
                      {removingUserId === Number(item.id) ? 'Saving...' : 'Remove'}
                    </button>
                  </ListGroup.Item>
                ))}
              </ListGroup>
            </div>
          )}
        </Col>
      </Row>

      {/* Modal: Confirm Disable */}
      <Modal show={showConfirmModal} onHide={() => setShowConfirmModal(false)}>
        <Modal.Header closeButton>
          <Modal.Title>Confirm Disable</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          Are you sure you want to disable lead auto assignment?
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setShowConfirmModal(false)}>
            Cancel
          </Button>
          <Button variant="danger" onClick={confirmDisable} disabled={saving}>
            {saving ? 'Saving...' : 'Disable'}
          </Button>
        </Modal.Footer>
      </Modal>

      {/* Modal: Select Telecallers */}
      <Modal show={showModal} onHide={() => setShowModal(false)}>
        <Modal.Header closeButton>
          <Modal.Title>Select Telecallers</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <ListGroup variant="flush">
            {telecallers.map((tc) => (
              <ListGroup.Item key={tc.id}>
                <Form.Check
                  type="checkbox"
                  label={tc.full_name}
                  checked={assign.some((a) => a.id === tc.id)}
                  onChange={() => handleAssign(tc.id)}
                />
              </ListGroup.Item>
            ))}
          </ListGroup>
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setShowModal(false)}>
            Close
          </Button>
          <Button variant="primary" onClick={handleSave} disabled={saving}>
            {saving ? 'Saving...' : 'Save Changes'}
          </Button>
        </Modal.Footer>
      </Modal>
    </Container>
  );
};

export default Page;
