import React, { useEffect, useMemo, useState } from "react";
import {
  Container,
  Table,
  Spinner,
  Alert,
  Row,
  Col,
  Form,
} from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
import { toast } from "react-toastify";
import LogoutOverlay from "@/components/LogoutOverlay";
import { isAuthenticated, getUserInfo, logout } from "@/utils/auth";
import RegionSelect from "@/components/regionselect";
// import Select from "react-select";
import { getDailyWebhookReportLeadsList } from "@/services/reportsservice";
import "../dailyreport/LeadReportTable.css";

/* ================= TYPES ================= */

type SourceRow = {
  id: string;
  name: string;
  lead_count: number;
  webhook_count: number;
};

type SortKey = "index" | "name" | "lead_count" | "webhook_count";

type SortConfig = {
  key: SortKey;
  direction: "asc" | "desc";
} | null;

/* ================= COMPONENT ================= */

const DailyWebhookSourceReport: React.FC = () => {
  const today = new Date();

  const [fromDate, setFromDate] = useState<Date | null>(today);
  const [toDate, setToDate] = useState<Date | null>(today);
  const [selectedFilter, setSelectedFilter] = useState<string>("custom");

  const [data, setData] = useState<SourceRow[]>([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string>("");
  const [showLogoutLoader, setShowLogoutLoader] = useState(false);

  const [sortConfig, setSortConfig] = useState<SortConfig>(null);

  const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);
  const type = user?.type;

  const getInitialRegionValue = (): string => {
    if (type === "1" || type === "2") return "1";
    if (user?.region) return String(user.region);
    return "0";
  };

  const [region, setRegion] = useState<string>(getInitialRegionValue());

  // const options = [
  //   { value: "0", label: "All Products" },
  //   { value: "1", label: "Test Prep" },
  //   { value: "2", label: "ACS" },
  //   { value: "3", label: "Immigration" },
  // ];

  // const [category, setCategory] = useState<string[]>(["1", "2"]);

  // const handleCategoryChange = (selected: any) => {
  //   if (!selected || selected.length === 0) {
  //     setCategory([]);
  //     return;
  //   }
  //   if (selected.some((opt: any) => opt.value === "0")) {
  //     setCategory(["0"]);
  //   } else {
  //     setCategory(selected.map((opt: any) => opt.value));
  //   }
  // };

  const formatDate = (date: Date | null) => {
    if (!date) return "";
    const y = date.getFullYear();
    const m = String(date.getMonth() + 1).padStart(2, "0");
    const d = String(date.getDate()).padStart(2, "0");
    return `${y}-${m}-${d}`;
  };

  const handleFilterChange = (val: string) => {
    setSelectedFilter(val);
    const today = new Date();
    let startDate: Date | null = null;
    let endDate: Date | null = null;

    if (val === "today") {
      startDate = endDate = today;
    } else if (val === "yesterday") {
      const yesterday = new Date(today);
      yesterday.setDate(today.getDate() - 1);
      startDate = endDate = yesterday;
    } else if (val === "last_10_days") {
      const past = new Date(today);
      past.setDate(today.getDate() - 9);
      startDate = past;
      endDate = today;
    } else if (val === "this_month") {
      startDate = new Date(today.getFullYear(), today.getMonth(), 1);
      endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);
    } else if (val === "all") {
      startDate = new Date("2025-09-01");
      endDate = today;
    } else {
      startDate = fromDate;
      endDate = toDate;
    }

    setFromDate(startDate);
    setToDate(endDate);
  };

  useEffect(() => {
    if (!user) setShowLogoutLoader(true);
  }, [user]);

  const fetchData = async () => {
    if (!user) return;
    setLoading(true);
    setError("");

    const payload: any = {
      fromDateVal: formatDate(fromDate),
      toDateVal: formatDate(toDate),
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
      regionVal: region,
      // catgoryIdVal: category,
    };

    try {
      const response = await getDailyWebhookReportLeadsList(payload);

      if (response.response === "login_error") {
        setData([]);
        toast.error(response.message);
        setShowLogoutLoader(true);
      } else if (response.response === "error") {
        setData([]);
        toast.error(response.message);
      } else if (response.response === "success") {
        setData(response.data);
      }
    } catch (err) {
      setError(err instanceof Error ? err.message : "Something went wrong");
      toast.error("Something went wrong");
      setData([]);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    if (!user || !fromDate || !toDate) return;
    fetchData();
  }, [fromDate, toDate, region]);

  /* ================= SORTING ================= */

  const handleSort = (key: SortKey) => {
    setSortConfig((prev) =>
      prev?.key === key
        ? { key, direction: prev.direction === "asc" ? "desc" : "asc" }
        : { key, direction: "asc" }
    );
  };

  const sortedData = useMemo(() => {
    if (!sortConfig) return data;

    return [...data].sort((a, b) => {
      let aVal: any;
      let bVal: any;

      switch (sortConfig.key) {
        case "index":
          aVal = data.indexOf(a);
          bVal = data.indexOf(b);
          break;
        case "name":
          aVal = a.name.toLowerCase();
          bVal = b.name.toLowerCase();
          break;
        case "lead_count":
          aVal = a.lead_count;
          bVal = b.lead_count;
          break;
        case "webhook_count":
          aVal = a.webhook_count;
          bVal = b.webhook_count;
          break;
      }

      if (aVal < bVal) return sortConfig.direction === "asc" ? -1 : 1;
      if (aVal > bVal) return sortConfig.direction === "asc" ? 1 : -1;
      return 0;
    });
  }, [data, sortConfig]);

  const renderSortIcon = (key: SortKey) => {
    if (sortConfig?.key !== key) return " ⇅";
    return sortConfig.direction === "asc" ? " ▲" : " ▼";
  };

  const totalLeads = useMemo(
    () => sortedData.reduce((sum, r) => sum + r.lead_count, 0),
    [sortedData]
  );

  const totalWebhooks = useMemo(
    () => sortedData.reduce((sum, r) => sum + r.webhook_count, 0),
    [sortedData]
  );

  /* ================= RENDER ================= */

  return (
    <Container fluid>
      <PageBreadcrumb title="Source wise Lead & Webhook Report" />

      {showLogoutLoader && (
        <LogoutOverlay duration={5} onComplete={logout} />
      )}

      <div className="mt-4 bg-white p-4 shadow-sm rounded">
        <Form className="mb-3">
          <Row>
            <Col md={2}>
              <Form.Select
                value={selectedFilter}
                onChange={(e) => handleFilterChange(e.target.value)}
              >
                <option value="custom">Custom</option>
                <option value="today">Today</option>
                <option value="yesterday">Yesterday</option>
                <option value="last_10_days">Last 10 Days</option>
                <option value="this_month">This Month</option>
                <option value="all">All</option>
              </Form.Select>
            </Col>

            <Col md={2}>
              <DatePicker
                selected={fromDate}
                onChange={setFromDate}
                className="form-control"
                dateFormat="yyyy-MM-dd"
              />
            </Col>

            <Col md={2}>
              <DatePicker
                selected={toDate}
                onChange={setToDate}
                className="form-control"
                dateFormat="yyyy-MM-dd"
              />
            </Col>

            {(user?.type === "1" || user?.type === "2") && (
              <Col md={2}>
                <RegionSelect
                  value={region}
                  onChange={(val) => setRegion(val?.value ?? "0")}
                  label="Region"
                  placeholder="All Regions"
                />
              </Col>
            )}

            {/* <Col md={3}>
              <Select
                options={options}
                isMulti
                value={options.filter((o) => category.includes(o.value))}
                onChange={handleCategoryChange}
                placeholder="Select categories..."
              />
            </Col> */}

            <Col md="auto">
              <button type="button" className="btn btn-primary" onClick={fetchData}>
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
        ) : sortedData.length === 0 ? (
          <div className="text-center text-muted mt-4">No data available.</div>
        ) : (
          <div className="table-wrapper">
            <Table bordered hover className="styled-table mb-0">
              <thead>
                <tr>
                  <th onClick={() => handleSort("index")} style={{ cursor: "pointer" }}>
                    # {renderSortIcon("index")}
                  </th>
                  <th onClick={() => handleSort("name")} style={{ cursor: "pointer" }}>
                    Source {renderSortIcon("name")}
                  </th>
                  <th
                    className="text-end"
                    onClick={() => handleSort("lead_count")}
                    style={{ cursor: "pointer" }}
                  >
                    Leads {renderSortIcon("lead_count")}
                  </th>
                  <th
                    className="text-end"
                    onClick={() => handleSort("webhook_count")}
                    style={{ cursor: "pointer" }}
                  >
                    Webhooks {renderSortIcon("webhook_count")}
                  </th>
                </tr>
              </thead>

              <tbody>
                {sortedData.map((row, idx) => (
                  <tr key={row.id}>
                    <td>{idx + 1}</td>
                    <td>{row.name}</td>
                    <td className="text-end">{row.lead_count}</td>
                    <td className="text-end">{row.webhook_count}</td>
                  </tr>
                ))}
              </tbody>

              <tfoot>
                <tr style={{ fontWeight: 600 }}>
                  <td colSpan={2}>Total</td>
                  <td className="text-end">{totalLeads}</td>
                  <td className="text-end">{totalWebhooks}</td>
                </tr>
              </tfoot>
            </Table>
          </div>
        )}
      </div>
    </Container>
  );
};

export default DailyWebhookSourceReport;
