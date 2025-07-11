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
import PageBreadcrumb from "@/components/PageBreadcrumb";
import "../dailyreport/LeadReportTable.css";
import { getMonthlySourceWiseReportLeadsList } from "@/services/reportsservice";
import type { MonthlyLead } from "@/services/reportsservice";
import type { MonthlySourceWiseReportPayload } from "@/services/reportsservice";
import { getUserInfo } from "@/utils/auth";
import { useSortableData } from "@/hooks/useSortableData";
import YearSelect from '@/components/yearselect';

const MonthlySourceWiseReportTable: React.FC = () => {
  const now = new Date();
  const [selectedYear, setSelectedYear] = useState<string>(
    now.getFullYear().toString()
  );

  const [data, setData] = useState<MonthlyLead[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [error, setError] = useState<string>("");

  const user = getUserInfo();

  const fetchData = async () => {
    setLoading(true);
    setError("");

    const payload: MonthlySourceWiseReportPayload = {
      yearVal: selectedYear,
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };

    try {
      const res = await getMonthlySourceWiseReportLeadsList(payload);
      if (res.response === "success") {
        setData(res.data);
      } else {
        setError(res.message || "Failed to fetch data");
      }
    } catch (err) {
      setError(err instanceof Error ? err.message : "Something went wrong");
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchData();
  }, [selectedYear]);

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
          

  return (
    <Container fluid>
      <PageBreadcrumb title="Monthly Lead Report" />
      <div className="mt-4 bg-white p-4 shadow-sm rounded">
        <Form className="mb-3">
          <Row>
            <Col md={3}>

              <YearSelect value={selectedYear} onChange={(e) => setSelectedYear(e.target.value)} required />
            </Col>
          
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
                  <th onClick={() => requestSort("month")}>
                    Date <SortArrow columnKey="month" />
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
                {sortedData.map(({ month, statuses, total }) => {
                    const monthIndex = parseInt(month.slice(-2), 10) - 1;

                    return (
                    <tr key={month} >
            
                        <td>{new Date(0, monthIndex).toLocaleString('default', { month: 'long' })}</td>
                            {allStatuses.map((statusName) => {
                            const status = statuses.find((s) => s.name === statusName);
                            return <td key={statusName}>{status ? status.count : 0}</td>;
                            })}
                        <td>{total}</td>
                    </tr>
                    );
                })}
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

export default MonthlySourceWiseReportTable;
