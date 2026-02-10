// LeadTransferList.tsx
import React, { useEffect, useState, useRef, useMemo } from "react";
import DataTable from "react-data-table-component";
import { Container, Form, Row, Col } from "react-bootstrap";
import PageBreadcrumb from "@/components/PageBreadcrumb";
import { isAuthenticated, getUserInfo, logout } from "@/utils/auth";
import LogoutOverlay from "@/components/LogoutOverlay";
import { leadRegionTransferList } from "@/services/leadservice";

// Define the TypeScript type for your API data
interface Lead {
  id: string;
  full_name: string;
  lead_status: string;
  followup_date_time: string | null;
  lead_date: string;
  walkin_date: string | null;
  executive_id: string;
  country_id: string;
  lead_type: string;
  source_id: string;
  quality_id: string;
  branch_id: string;
  region: string;
  branchname: string;
  lead_status_name: string;
  source_name: string;
  lead_quality_name: string;
  executive_name: string;
  created_by_name: string;
  region_name: string;
}

const LeadTransferList: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);

  const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);

  const didFetchRef = useRef(false);

  useEffect(() => {
    if (!user) {
      setShowLogoutLoader(true);
    }
  }, [user]);

  const [leads, setLeads] = useState<Lead[]>([]);
  const [loading, setLoading] = useState<boolean>(true);

  // Search
  const [searchTerm, setSearchTerm] = useState("");

  // Pagination
  const [currentPage, setCurrentPage] = useState<number>(1);
  const [perPage, setPerPage] = useState<number>(10);

  // Filtered data (based on search)
  const filteredLeads = useMemo(() => {
    if (!searchTerm) return leads;

    const term = searchTerm.toLowerCase();

    return leads.filter((lead) =>
      [
        lead.full_name,
        lead.branchname,
        lead.region_name,
        lead.executive_name,
        lead.source_name,
        lead.lead_status_name,
      ]
        .join(" ")
        .toLowerCase()
        .includes(term)
    );
  }, [leads, searchTerm]);

  // DataTable Columns
  const columns = [
    {
      name: "ID",
      width: "60px",
      cell: (_row: Lead, index: number) =>
        (currentPage - 1) * perPage + index + 1,
    },
    { name: "Full Name", selector: (row: Lead) => row.full_name, sortable: true },
    {
      name: "Lead Status",
      selector: (row: Lead) => row.lead_status_name,
      sortable: true,
      wrap: true,
      width: "130px",
    },
    {
      name: "Lead Date",
      selector: (row: Lead) => row.lead_date,
      sortable: true,
      wrap: true,
    },
    {
      name: "Branch",
      selector: (row: Lead) => row.branchname,
      sortable: true,
      wrap: true,
    },
    {
      name: "Region",
      selector: (row: Lead) => row.region_name,
      sortable: true,
      wrap: true,
    },
    {
      name: "Executive",
      selector: (row: Lead) => row.executive_name,
      sortable: true,
      wrap: true,
    },
    {
      name: "Source",
      selector: (row: Lead) => row.source_name,
      sortable: true,
      wrap: true,
    },
    { name: "Quality", selector: (row: Lead) => row.lead_quality_name, sortable: true },
    { name: "Created By", selector: (row: Lead) => row.created_by_name, sortable: true },
  ];

  useEffect(() => {
    if (didFetchRef.current) return;
    didFetchRef.current = true;

    const fetchLeads = async () => {
      try {
        const payload = {
          sourceVal: "0",
          userIdVal: user?.id,
          tokenVal: user?.access_token,
          typeVal: user?.type,
          counselorIdVal: user?.id,
        };

        const response = await leadRegionTransferList(payload);

        if (response.response === "success") {
          setLeads(response.data);
        }
      } catch (error) {
        console.error("Error fetching lead transfer list:", error);
      } finally {
        setLoading(false);
      }
    };

    fetchLeads();
  }, [user]);

  return (
    <Container fluid>
      <PageBreadcrumb title={`Leads List (${filteredLeads.length})`} />

      {showLogoutLoader && (
        <LogoutOverlay
          duration={5}
          onComplete={async () => {
            await logout();
          }}
        />
      )}

      {/* Search Box */}
      <Row className="mb-3">
        <Col md={4}>
          <Form.Control
            type="text"
            placeholder="Search by name, region, branch, executive..."
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
          />
        </Col>
      </Row>

      <DataTable
        columns={columns}
        data={filteredLeads}
        progressPending={loading}
        pagination
        onChangePage={(page) => setCurrentPage(page)}
        onChangeRowsPerPage={(newPerPage) => {
          setPerPage(newPerPage);
          setCurrentPage(1);
        }}
        highlightOnHover
        pointerOnHover
        responsive
        striped
      />
    </Container>
  );
};

export default LeadTransferList;
