import React, { useEffect, useState } from 'react';
import DataTable from 'react-data-table-component';
import { Container,Form, Button,Modal } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
// import { getUserList, User, UserListRequestPayload } from '@/services/userservice';

import type { jobsListPayload , jobsCreatePayload, jobsExecutionPayload, jobsScoresPayload} from '@/services/userservice';
import { getJobsList, submitJobCreate , submitJobExecution, submitJobScore } from '@/services/userservice';
import type { User } from '@/types/user.types';
import { getUserInfo } from '@/utils/auth';

    const UsersDataTable: React.FC = () => {
    const [data, setData] = useState<User[]>([]);
    const [loading, setLoading] = useState(true);
    const user = getUserInfo();

    const [jobPlanVal, setJobPlanVal] = useState('');
    const [jobDateVal, setJobDateVal] = useState('');
    const [showCreateModal, setShowCreateModal] = useState(false);
    const [submittingCreate, setSubmittingCreate] = useState(false);
    const [fromDate, setFromDate] = useState('');
    const [toDate, setToDate] = useState('');
    const [showExecutionModal, setShowExecutionModal] = useState(false);
    const [showScoreModal, setShowScoreModal] = useState(false);
    const [selectedJob, setSelectedJob] = useState<User | null>(null); // store clicked job
    const [jobExecutionVal, setJobExecutionVal] = useState('');
    const [jobScoreVal, setJobScoreVal] = useState('');
    
    useEffect(() => {
      const today = new Date();
      const formatted = today.toISOString().split('T')[0];
      setFromDate(formatted);
      setToDate(formatted);
    }, []);

    useEffect(() => {
      if (fromDate && toDate) {
        handleGoClick();
      }
    }, [fromDate, toDate]);

   const handleGoClick = async () => {
    if (!fromDate || !toDate) {
        alert('Please select both From and To dates.');
        return;
    }

    const payload: jobsListPayload = {
        fromDateVal: fromDate,
        toDateVal: toDate,
        userIdVal: user.id,
        tokenVal: user.access_token,
    };

    setLoading(true);
    try {
        const res = await getJobsList(payload);
        setData(res.data);
    } catch (err) {
        console.error('Failed to fetch jobs:', err);
    } finally {
        setLoading(false);
    }
    };
  


const handleSubmitCreate = async () => {
  if (!jobPlanVal || !jobDateVal) {
    alert('Please enter both Job Plan and Job Date');
    return;
  }

  const payload: jobsCreatePayload = {
    jobPlanVal,
    jobDateVal,
    userIdVal: user.id,
    tokenVal: user.access_token,
    createdByVal: user.id,
    jobStatusVal: 'Pending',
  };

  setSubmittingCreate(true);
  try {
    await submitJobCreate(payload);
    alert('Job submitted successfully!');
    setShowCreateModal(false);  // optionally close modal
    setJobPlanVal('');
    setJobDateVal('');
    handleGoClick();
  } catch (error) {
    console.error('Job creation failed:', error);
    alert('Failed to create job. Please try again.');
  } finally {
    setSubmittingCreate(false);
  }
};


const handleUpdateSubmit = async () => {
  if (!selectedJob) return;

  const payload : jobsExecutionPayload= {
    idVal: selectedJob.id,
    jobExecutionVal,
    jobStatusVal: 'Completed',
    updatedByVal: user.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
  };

  try {
    await submitJobExecution(payload);
    alert('Job updated successfully!');
    setShowExecutionModal(false);
    handleGoClick();
  } catch (err) {
    console.error('Failed to update job:', err);
    alert('Failed to update. Please try again.');
  }
};

const handleUpdateScore = async () => {
  if (!selectedJob) return;

  const payload: jobsScoresPayload = {
    idVal: selectedJob.id,
    jobScoreVal: jobScoreVal,
    scoreUpdatedByVal: user.id,
    userIdVal: user.id,
    tokenVal: user.access_token,
  };

  try {
    await submitJobScore(payload); // Call your API
    alert('Job updated successfully!');
    setShowScoreModal(false);
    handleGoClick(); 
  } catch (err) {
    console.error('Failed to update job:', err);
    alert('Update failed. Please try again.');
  }
};

// console.log(user.type)

 const columns = [
    { name: 'S.No', cell: (_: any, i: any) => i + 1, width: '70px' },
    { name: 'Job Plan', selector: (row: User) => row.job_plan, sortable: true },
    { name: 'Job Date', selector: (row: User) => row.job_date, sortable: true },
    { name: 'Execution', selector: (row: User) => row.job_execution || '-', sortable: true },
    { name: 'Score', selector: (row: User) => row.job_score ?? '-', sortable: true },
    { name: 'Status', selector: (row: User) => row.job_status || '-', sortable: true },

      {
        name: 'Action',
        cell: (row: User) => {

          if (row.job_status === 'Completed' && ((row.job_score == null)||(row.job_score == 0))) {
            if (user.type == 1 || user.type == 2) {
              return (
                <button
                  className="btn btn-primary btn-sm"
                  style={{ cursor: 'pointer' }}
                  onClick={() => {
                    setSelectedJob(row);
                    setJobExecutionVal(row.job_execution || '');
                    setJobScoreVal(row.job_score?.toString() || '');
                    setShowScoreModal(true);
                  }}
                >
                  Score
                </button>
              );
            }
          } else if(row.job_status === 'Pending'){
              return (
                <button
                  className="btn btn-danger btn-sm"
                  onClick={() => {
                    setSelectedJob(row);
                    setJobExecutionVal(row.job_execution || '');
                    setJobScoreVal(row.job_score?.toString() || '');
                    setShowExecutionModal(true);
                  }}
                >
                  Update
                </button>
              );
          }
          else {
            return null;
          }
        },
        button: true,
        ignoreRowClick: true,
        allowOverflow: true,
        width: '140px',
      }




];


  return (
    <Container fluid>
      <PageBreadcrumb title="Job List" />
      <Form className="mb-4">
        <div className="d-flex flex-wrap align-items-end gap-2">
            <Form.Group>
            <Form.Label>From Date</Form.Label>
            <Form.Control
                type="date"
                value={fromDate}
                onChange={(e) => setFromDate(e.target.value)}
            />
            </Form.Group>

            <Form.Group>
            <Form.Label>To Date</Form.Label>
            <Form.Control
                type="date"
                value={toDate}
                onChange={(e) => setToDate(e.target.value)}
            />
            </Form.Group>

            <div className="d-flex flex-column">
            <Form.Label>&nbsp;</Form.Label>
            <Button variant="primary" onClick={handleGoClick}>
                Go
            </Button>
            </div>

            <div className="ms-auto d-flex flex-column">
            <Form.Label>&nbsp;</Form.Label>
            <Button variant="success" onClick={() => setShowCreateModal(true)}>
                + Create Job
            </Button>
            </div>
        </div>
      </Form>

      <DataTable
        title="Job List"
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        highlightOnHover
        pointerOnHover
        responsive
      />
        <Modal show={showCreateModal} onHide={() => setShowCreateModal(false)} centered>
            <Modal.Header closeButton>
                <Modal.Title>Create Job Plan</Modal.Title>
            </Modal.Header>
            <Modal.Body>
                <Form>
                <Form.Group className="mb-3">
                    <Form.Label>Job Date</Form.Label>
                    <Form.Control
                    type="date"
                    value={jobDateVal}
                    onChange={(e) => setJobDateVal(e.target.value)}
                    />
                </Form.Group>
                <Form.Group className="mb-3">
                    <Form.Label>Job Plan</Form.Label>
                    <Form.Control
                        as="textarea"
                        rows={4}
                        value={jobPlanVal}
                        onChange={(e) => setJobPlanVal(e.target.value)}
                        placeholder="Enter job plan details..."
                    />
                  </Form.Group>

                <Button variant="success" onClick={handleSubmitCreate} disabled={submittingCreate}>
                    {submittingCreate ? 'Creating...' : 'Create Job'}
                </Button>
                </Form>
            </Modal.Body>
        </Modal>
        <Modal show={showExecutionModal} onHide={() => setShowExecutionModal(false)} centered>
            <Modal.Header closeButton>
                <Modal.Title>Update Job Execution</Modal.Title>
            </Modal.Header>
            <Modal.Body>
                {selectedJob ? (
                <Form>
                    <Form.Group className="mb-3">
                    <Form.Label>Job Plan</Form.Label>
                    <Form.Control type="text" value={selectedJob.job_plan} readOnly />
                    </Form.Group>

                    <Form.Group className="mb-3">
                    <Form.Label>Job Date</Form.Label>
                    <Form.Control type="text" value={selectedJob.job_date} readOnly />
                    </Form.Group>

                    <Form.Group className="mb-3">
                    <Form.Label>Job Execution</Form.Label>
                    <Form.Control
                        as="textarea"
                        rows={4}
                        value={jobExecutionVal}
                        onChange={(e) => setJobExecutionVal(e.target.value)}
                        placeholder="Enter job execution details..."
                    />
                    </Form.Group>

                    <Button
                    variant="success"
                    onClick={handleUpdateSubmit}
                    >
                    Submit Update
                    </Button>
                </Form>
                ) : (
                <p>Loading...</p>
                )}
            </Modal.Body>
        </Modal>

        <Modal show={showScoreModal} onHide={() => setShowScoreModal(false)} centered>
            <Modal.Header closeButton>
                <Modal.Title>Update Job</Modal.Title>
            </Modal.Header>
            <Modal.Body>
                {selectedJob ? (
                <Form>
                    <Form.Group className="mb-3">
                        <Form.Label>Job Plan</Form.Label>
                        <Form.Control  as="textarea"
                        rows={4} value={selectedJob.job_plan} readOnly />
                    </Form.Group>

                    <Form.Group className="mb-3">
                        <Form.Label>Job Execution</Form.Label>
                        <Form.Control  as="textarea"
                        rows={4} value={selectedJob.job_plan} readOnly />
                    </Form.Group>

                    <Form.Group className="mb-3">
                    <Form.Label>Job Score</Form.Label>
                     <Form.Select
                        value={jobScoreVal}
                        onChange={(e) => setJobScoreVal(e.target.value)}
                      >
                        <option value="" disabled>Select score</option>
                        {[...Array(19)].map((_, i) => {
                          const val = (i + 2) / 2;
                          return (
                            <option key={val} value={val}>
                              {val}
                            </option>
                          );
                        })}
                      </Form.Select>
                    </Form.Group>

                    <Button variant="success" onClick={handleUpdateScore}>
                    Submit Update
                    </Button>
                </Form>
                ) : (
                <p>Loading...</p>
                )}
            </Modal.Body>
        </Modal>


    </Container>
  );
};

export default UsersDataTable;
