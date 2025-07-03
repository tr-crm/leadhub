import React, { useEffect, useState } from 'react';
import DataTable from 'react-data-table-component';
import { Container, Button, Row, Col } from 'react-bootstrap';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import { getWebhookLeadsList } from '@/services/leadservice';
import type { WebhookLeadayload } from '@/services/leadservice';
import type { Lead } from '@/types/lead.types';
import { getUserInfo } from '@/utils/auth';
import RegionSelect from '@/components/regionselect';

interface OptionType {
  value: string;
  label: string;
}

const LeadsDataTable: React.FC = () => {
  const [data, setData] = useState<Lead[]>([]);
  const [loading, setLoading] = useState<boolean>(true);

  const user = getUserInfo();
  const type=user.type;

  // Get initial region value as string for consistency
  const getInitialRegionValue = (): string => {
    if (type === '1' || type === '2') {
      return '1';
    } else if (user.region) {
      return String(user.region);
    }
    return '0'; // default "All Regions"
  };

  const [regionVal, setRegionVal] = useState<string>(getInitialRegionValue());

  const handleRegionChange = (option: OptionType | null) => {
    setRegionVal(option?.value ?? '0');
  };

  const fetchLeads = async () => {
    setLoading(true);

    const payload: WebhookLeadayload = {
      start: '',
      sourceVal: 'All',
      userIdVal: user.id,
      tokenVal: user.access_token,
      regionVal: regionVal,
    };

    try {
      const response = await getWebhookLeadsList(payload);
      setData(response.data);
    } catch (error) {
      console.error('Failed to fetch leads:', error);
      alert('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  // Fetch leads on region change with debounce
  useEffect(() => {
    const timer = setTimeout(() => {
      fetchLeads();
    }, 300);

    return () => clearTimeout(timer);
  }, [regionVal]);

  const handleButtonClick = (row: Lead) => {
    alert(`Clicked on lead with ID: ${row.id}`);
  };

  const columns = [
    {
      name: 'ID',
      cell: (_row: Lead, index: number) => index + 1,
      width: '70px',
    },
    {
      name: 'Date',
      selector: (row: Lead) => String(row.lead_date || ''),
      sortable: true,
      width: '100px',
    },
    {
      name: 'Name',
      selector: (row: Lead) => String(row.full_name || ''),
      sortable: true,
      width: '130px',
    },
    {
      name: 'Phone',
      selector: (row: Lead) => String(row.phone_number || ''),
      sortable: true,
      width: '110px',
    },
   
    {
      name: 'Source',
      selector: (row: Lead) => String(row.source_name || ''),
      sortable: true,
      width: '100px',
    },
     {
      name: 'Region',
      selector: (row: Lead) => String(row.region_name || ''),
      sortable: true,
      width: '100px',
    },
    {
      name: 'Created At',
      selector: (row: Lead) => new Date(row.created_at).getTime() || 0,
      format: (row: Lead) => new Date(row.created_at).toLocaleString(),
      sortable: true,
      width: '170px',
    },
    {
      name: 'Action',
      cell: (row: Lead) => (
        <button onClick={() => handleButtonClick(row)} className="btn btn-primary btn-sm">
          Transfer
        </button>
      ),
      ignoreRowClick: true,
      allowOverflow: true,
      button: true,
      width: '100px',
    },
  ];

  const ExpandedComponent: React.FC<{ data: Lead }> = ({ data }) => {
    const details = data.json_response_data;
    return (
      <div
        style={{
          backgroundColor: '#F9F9F9',
          padding: '15px',
          borderRadius: '5px',
          border: '1px solid #ddd',
          marginTop: '10px',
        }}
      >
        <strong>Full Details:</strong>
        {details && typeof details === 'object' ? (
          <table className="table table-sm mt-2">
            <tbody>
              {Object.entries(details).map(([key, value], index) => (
                <tr key={`${key}-${index}`}>
                  <th style={{ width: '150px', textTransform: 'capitalize' }}>
                    {key.replace(/_/g, ' ')}
                  </th>
                  <td>{String(value)}</td>
                </tr>
              ))}
            </tbody>
          </table>
        ) : (
          <div className="text-muted mt-2">No additional data available.</div>
        )}
      </div>
    );
  };

  return (
    <Container fluid>
      <PageBreadcrumb title="Fresh Leads List" />
     <Row className="mb-2">
  {(user.type === '1' || user.type === '2') && (
    <Col md={3}>
      <RegionSelect
        value={regionVal}
        onChange={handleRegionChange}
        label="Region"
        placeholder="All Regions"
      />
    </Col>
  )}
   {(user.type =='3') && (
    <Col md={3}>
      <RegionSelect
        value={regionVal}
        onChange={handleRegionChange}
        label="Region"
        placeholder="All Regions"
      />
    </Col>
  )}
  
  <Col md={1} className="text-end">
    <Button variant="primary" onClick={fetchLeads}>
      Go
    </Button>
  </Col>
</Row>

    <div className="table-responsive">
      <DataTable
        title="Fresh Leads List"
        columns={columns}
        data={data}
        progressPending={loading}
        expandableRows
        expandableRowsComponent={ExpandedComponent}
        pagination
        selectableRows
        highlightOnHover
        pointerOnHover
        responsive
      />
    </div>
    </Container>
  );
};

export default LeadsDataTable;
