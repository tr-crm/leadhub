import React, { useEffect, useState, useMemo } from "react";
import {
  Table,
  Spinner,
  Alert,
  Container,
  Form,
  Row,
  Col,
} from "react-bootstrap";
import { useNavigate } from 'react-router-dom';
import PageBreadcrumb from "@/components/PageBreadcrumb";
import "../dailyreport/LeadReportTable.css";
import { getDailyDMLeadReportList } from "@/services/reportsservice";
import type { DailyLead } from "@/services/reportsservice";
import type { RegionLeadReportRequest } from "@/services/reportsservice";
import { getUserInfo } from "@/utils/auth";
import { useSortableData } from "@/hooks/useSortableData";
import YearSelect from '@/components/yearselect';
import MonthSelect from '@/components/monthselect';
import RegionSelect from '@/components/regionselect';
import {toast } from 'react-toastify';
const padMonth = (month: number) => String(month).padStart(2, "0");

const DailyLeadReportTable: React.FC = () => {
  const now = new Date();
  const [selectedYear, setSelectedYear] = useState<string>(
    now.getFullYear().toString()
  );
  const [selectedMonth, setSelectedMonth] = useState<string>(
    padMonth(now.getMonth() + 1)
  );
   const user = getUserInfo();
  const type=user.type
const navigate = useNavigate();
  const [data, setData] = useState<DailyLead[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [error, setError] = useState<string>("");
  const getInitialRegionValue = (): string => {
    if (type === '1' || type === '2') {
      return '1';
    } else if (user.region) {
      return String(user.region);
    }
    return '0';
  };
  const [region, setRegion] = useState<string>(getInitialRegionValue());

 

  const fetchData = async () => {
    setLoading(true);
    setError("");

    const requestBody: RegionLeadReportRequest = {
      yearVal: selectedYear,
      monthVal: selectedMonth,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      regionVal:region
    };

   
     try {
     const response = await getDailyDMLeadReportList(requestBody);
        
       console.log(response);
    
       if (response.data.response === 'login_error') {
         setData([]);
               toast.error(response.data.message , {
                 position: "top-right",
                 autoClose: 4000,
                 hideProgressBar: false,
                 closeOnClick: true,
                 pauseOnHover: true,
                 draggable: false,
                 progress: undefined,
                 theme: "colored",
       
               });

                navigate('/login');
       
               // Optionally redirect to login page here
             } else if (response.data.response === 'error') {
                 setData([]);
               toast.error(response.data.message, {
                 position: "top-right",
                 autoClose: 5000,
                 hideProgressBar: false,
                 closeOnClick: true,
                 pauseOnHover: true,
                 draggable: false,
                 progress: undefined,
                 theme: "colored",
       
               });
               // setError(response.message || 'Failed to import data.');
             } else if (response.data.response === 'success') {
                setData(response.data.data);
               toast.success(response.message, {
                 position: "top-right",
                 autoClose: 5000,
                 hideProgressBar: false,
                 closeOnClick: true,
                 pauseOnHover: true,
                 draggable: false,
                 progress: undefined,
                 theme: "colored",
       
               });
             }
        
      } catch (err:any) {
       toast.error('Something went wrong.', {
               position: "top-right",
               autoClose: 4000,
               hideProgressBar: false,
               closeOnClick: true,
               pauseOnHover: true,
               draggable: false,
               progress: undefined,
               theme: "colored",
       
             });
            //  navigate('/login');
        setData([]); // safe fallback
      } finally {
        setLoading(false);
      }
  };

  useEffect(() => {
    fetchData();
  }, [selectedYear, selectedMonth]);

  const allStatuses = useMemo(() => {
    const set = new Set<string>();
    data.forEach(({ statuses }) =>
      statuses.forEach(({ name }) => set.add(name))
    );
    return Array.from(set);
  }, [data]);

  const { sortedItems: sortedData, requestSort, sortConfig } = useSortableData(data);

  const footerTotals = useMemo(() => {
    return allStatuses.map((statusName) =>
      data.reduce((sum, row) => {
        const status = row.statuses.find((s) => s.name === statusName);
        return sum + (status ? status.count : 0);
      }, 0)
    );
  }, [data, allStatuses]);

  const grandTotal = useMemo(() => {
    return data.reduce((sum, row) => sum + row.total, 0);
  }, [data]);

  const SortArrow = ({ columnKey }: { columnKey: string }) => {
    if (sortConfig.key !== columnKey) return null;
    return sortConfig.direction === "asc" ? <> ↑</> : <> ↓</>;
  };
const handleRegionChange = (selectedRegion:any) => {
   
    setRegion(selectedRegion);
  };
 

  return (
    <Container fluid>
      <PageBreadcrumb title="Region Wise Lead Report" />
      <div className="mt-4 bg-white p-4 shadow-sm rounded">
        <Form className="mb-3">
          <Row>
            <Col md={3}>

              <YearSelect value={selectedYear} onChange={(e) => setSelectedYear(e.target.value)} required />
            </Col>
            <Col md={3}>
              <MonthSelect
                value={selectedMonth}
                onChange={(e) => setSelectedMonth(e.target.value)}
                required
              />


            </Col>
              {(user.type === '1' || user.type === '2') && (
             <Col md={3}>
            <RegionSelect
              value={region}
            //   onChange={handleRegionChange}
              onChange={(val) => {
                  handleRegionChange(val?.value);
                 
                }}
              label="Region"
              placeholder="All Regions"
            />

            
          </Col>
           )}
           {(user.type === '3' ) && (
             <Col md={3}>
            <RegionSelect
              value={region}
            //   onChange={handleRegionChange}
              onChange={(val) => {
                  handleRegionChange(val?.value);
                 
                }}
              label="Region"
              placeholder="All Regions"
              disabled
            />

            
          </Col>
           )}
            <Col md="auto">
              <button
                type="button"
                className="btn btn-primary"
                onClick={fetchData}
              >
                Go
              </button>
            </Col>
          </Row>
        </Form>

        {error && <Alert variant="danger">{error}</Alert>}

        {loading ? (
          <div className="text-center mt-4">
            <Spinner animation="border" />
          </div>
        ) : data.length === 0 ? (
          <div className="text-center text-muted mt-4">No data available.</div>
        ) : (
          <div className="table-wrapper">
            <Table className="styled-table mb-0" bordered hover>
              <thead>
                <tr>
                  <th onClick={() => requestSort("date")}>
                    Date <SortArrow columnKey="date" />
                  </th>
                  {allStatuses.map((status) => (
                    <th key={status} onClick={() => requestSort(status)}>
                      {status}
                      <SortArrow columnKey={status} />
                    </th>
                  ))}
                  <th onClick={() => requestSort("total")}>
                    Total <SortArrow columnKey="total" />
                  </th>
                </tr>
              </thead>
              <tbody>
                {sortedData.map(({ date, statuses, total }) => (
                  <tr key={date}>
                    <td>{date}</td>
                    {allStatuses.map((statusName) => {
                      const status = statuses.find((s) => s.name === statusName);
                      return <td key={statusName}>{status ? status.count : 0}</td>;
                    })}
                    <td>{total}</td>
                  </tr>
                ))}
              </tbody>
              <tfoot>
                <tr>
                  <td>Total</td>
                  {footerTotals.map((sum, idx) => (
                    <td key={idx}>{sum}</td>
                  ))}
                  <td>{grandTotal}</td>
                </tr>
              </tfoot>
            </Table>
          </div>
        )}
      </div>
    </Container>
  );
};

export default DailyLeadReportTable;
