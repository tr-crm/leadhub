import { useState, useEffect, useMemo, useCallback, useRef} from 'react';
import Select from 'react-select';
import DataTable from 'react-data-table-component';
import {
  Container,
  Button,
  Form,
  Row,
  Col,
  Alert,
} from 'react-bootstrap';
import 'react-datepicker/dist/react-datepicker.css';
import PageBreadcrumb from '@/components/PageBreadcrumb';
import { getDataTransferStudentLeadsList,
    datatransferStudentLeads
} from '@/services/leadservice';
import { RegionList, 
getUserListByRegion,
StatusList,

} from '@/services/generalservice';
import type { Lead } from '@/types/lead.types';
import { toast } from 'react-toastify';
import LogoutOverlay from '@/components/LogoutOverlay';
import { isAuthenticated, getUserInfo, logout } from '@/utils/auth';
interface OptionType {
  value: any;
  label: string;
}

const DataTransferStudentLeadsList: React.FC = () => {
  const [showLogoutLoader, setShowLogoutLoader] = useState<boolean>(false);
  const user = useMemo(() => (isAuthenticated() ? getUserInfo() : null), []);

  
      const didFetch = useRef(false);
  
      const [data, setData] = useState<Lead[]>([]);
      const [loading, setLoading] = useState(false);
      const [error, setError] = useState<string | null>(null);
  
      const [currentPage, setCurrentPage] = useState(1);
      const [perPage, setPerPage] = useState(10);
      const [regionOptions, setRegionOptions] = useState<OptionType[]>([]);
      const [region, setRegion] = useState<string>(String(user?.region ?? '0'));
      const [selectedCounsellor, setSelectedCounsellor] = useState<any>("0");
      const [newregionOptions, setNewRegionOptions] = useState<OptionType[]>([]);
      const [newregion, setNewRegion] = useState<string>(String(user?.region));
      const [newselectedCounsellor, setNewSelectedCounsellor] = useState<any>('');
      const [executiveOptions, setExecutiveOptions] = useState<OptionType[]>([
          { value: "0", label: "All" },
      ]);
       const [newexecutiveOptions, setNewExecutiveOptions] = useState<OptionType[]>([
          { value: "0", label: "All" },
      ]);
      const handleExecChange = useCallback((opt: OptionType | null) => {
      setSelectedCounsellor(opt?.value ?? '0');
      }, []);
      const [statusFilter, setStatusFilter] = useState('0');
      const handleStatusChange = useCallback((opt: OptionType | null) => {
      setStatusFilter(opt?.value ?? '0');
      }, []);
      
     const selectedNewCounsellor = useCallback((opt: OptionType | null) => {
      setNewSelectedCounsellor(opt?.value ?? '0');
      }, []);
  
  
     useEffect(() => {
        if (!user) return;
        const fetchRegion = async () => {
          try {
            const regions = await RegionList(user.id, user.access_token, user.region, user.type);
              const options = regions.map((reg: any) => ({
              value: String(reg.id),           // change according to API response
              label: reg.display_name || ""   // adjust key as per response
            }));
  
            setRegionOptions([
              { value: "0", label: "Select Region" },
              ...options,
            ]);
          } catch (err) {
            console.error(err);
          }
        };
        fetchRegion();
      }, [user]);
  
    useEffect(() => {
      if (!user) return;
      const fetchNewRegion = async () => {
        try {
         const branches = await RegionList(user.id, user.access_token, user.region, user.type);
            const options = branches.map((reg: any) => ({
              value: String(reg.id),           // change according to API response
              label: reg.display_name || ""   // adjust key as per response
            }));
  
            setNewRegionOptions([
              { value: "0", label: "Select Region" },
              ...options,
            ]);
        } catch (err) {
          console.error(err);
        }
      };
      fetchNewRegion();
    }, [user]);
    
      
      useEffect(() => {
          const fetchCounsellors = async () => {
            try {
              const res = await getUserListByRegion(
                user.id,
                user.access_token,                
                region,
                user.type,
              );
    
              // Assuming API returns an array of counsellors
              const options = res.map((counsellor: any) => ({
                value: String(counsellor.id),           // change according to API response
                label: counsellor.display_name || ""   // adjust key as per response
              }));
    
              setExecutiveOptions([
                { value: "0", label: "Select Counsellor" },
                ...options,
              ]);
            } catch (err) {
              console.error("Error fetching counsellors:", err);
            }
          };
    
          if (region && region !== "0") {
            fetchCounsellors();
          } else {
            setExecutiveOptions([{ value: "0", label: "Select Counsellor" }]);
          }
        }, [region]);
  
         useEffect(() => {
          const fetchNewCounsellors = async () => {
            try {
              const res = await getUserListByRegion(
                user.id,
                user.access_token,                
                newregion,
                user.type,
              );
    
              // Assuming API returns an array of counsellors
              const options = res.map((counsellor: any) => ({
                value: String(counsellor.id),           // change according to API response
                label: counsellor.display_name || ""   // adjust key as per response
              }));
    
              setNewExecutiveOptions([
                { value: "0", label: "Select Counsellor" },
                ...options,
              ]);
            } catch (err) {
              console.error("Error fetching counsellors:", err);
            }
          };
    
          if (newregion && newregion !== "0") {
            fetchNewCounsellors();
          } else {
            setNewExecutiveOptions([{ value: "0", label: "Select Counsellor" }]);
          }
        }, [newregion]);
    
  

    const [statusOptions, setStatusOptions] = useState<OptionType[]>([ { value: "0", label: "All" },]);
   useEffect(() => {
      if (!user) return;

      const fetchStatus = async () => {
        try {
          const branches = await StatusList(user.id, user.access_token);

          const options = branches
            .map((bran: any) => ({
              value: String(bran.id),
              label: bran.display_name,
            }))
            .filter((opt: any) => opt.value !== "11"); // ⬅️ REMOVE value 11

          setStatusOptions([{ value: "0", label: "All" }, ...options]);
        } catch (err) {
          console.error(err);
        }
      };

      fetchStatus();
    }, [user]);



  const fetchLeads = async () => {
    if (!user) return;

     // New Branch Required
    if (!region || region === "0") {
       toast.dismiss();
      toast.error("Please select the Region.");
      return;
    }

    // New Counsellor Required
    if (!selectedCounsellor || selectedCounsellor === "0") {
       toast.dismiss();
      toast.error("Please select the Counsellor.");
      return;
    }
    if (!transferType) {
       toast.dismiss();
      toast.error("Please select Transfer Type");
      return;
    }

    
    
    setLoading(true);
    setError(null);
    try {
      const payload: any = {
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
        leadStatusIdVal: statusFilter,
        regionIdVal: region,
        counselorIdVal: selectedCounsellor
      };

      const response = await getDataTransferStudentLeadsList(payload);

      if (response.response === 'login_error') {
        toast.dismiss();
        toast.error(response.message);
        setShowLogoutLoader(true);
        return;
      } else if (response.response === 'error') {
        setData([]);
        toast.dismiss();
        toast.error(response.message);
      } else if (response.response === 'success') {
        toast.dismiss();
        toast.success(response.message);
        setData(response.data);
        
      }
    } catch {
      setError('Failed to fetch leads. Please try again.');
      toast.dismiss();
      toast.error('Failed to fetch leads. Please try again.');
    } finally {
      setLoading(false);
    }
  };

    useEffect(() => {
      if (didFetch.current) return; // ❗ stop second call in StrictMode
      didFetch.current = true;

      if (!user) {
        setShowLogoutLoader(true);
        return;
      }

      fetchLeads();
    }, []);

 

    const [isTotalTransferEnabled, setIsTotalTransferEnabled] = useState(false);
    useEffect(() => {
      if (String(statusFilter) === "0") {
        setIsTotalTransferEnabled(true);
      } else {
        setIsTotalTransferEnabled(false);
        
        // If Total Transfer was selected, reset transferType
        if (transferType === "2") {
          setTransferType("");
        }
      }
    }, [statusFilter]);

    // selected row
    const [selectedRows, setSelectedRows] = useState<any[]>([]);
    const [transferType, setTransferType] = useState("");

    const transferOptions = [
        { value: "1", label: "Single Transfer" },
        { value: "2", label: "Total Transfer" }
    ];
    const handleTransferTypeChange = (opt: any) => {
      setTransferType(opt?.value || "");
    };

    const handleSelectedRows = (state: any) => {
        const rows = state.selectedRows;

      
        const idArray = rows.map((r: any) => r.id);

        setSelectedRows(idArray);
    };



      const transfer = async() =>{
        if (!user) return;
         // 🔎 VALIDATION
        if (!transferType) {
          toast.error("Please select Transfer Type");
          return;
        }

        // Single Transfer → must select exactly 1 row
        if (transferType === "1") {
          if (selectedRows.length === 0) {
            toast.error("Please select at least one lead for Single Transfer.");
            return;
          }
        }

        // New Branch Required
        if (!newregion || newregion === "0") {
          toast.error("Please select the TO Branch.");
          return;
        }

        // New Counsellor Required
        if (!newselectedCounsellor || newselectedCounsellor === "0") {
          toast.error("Please select the TO Counsellor.");
          return;
        }
      setLoading(true);
        // return;
      try {

       const finalLeadIds =
          transferType === "2"
          ? data.map((d: any) => d.id)
          : selectedRows;


        const payload = {
          userIdVal: (user as any).id,
          tokenVal: (user as any).access_token,
          typeVal: (user as any).type,
          leadIdVals: finalLeadIds,
          oldCounselorIdVal: selectedCounsellor,
          oldBranchIdVal: region,
          newCounselorIdVal : newselectedCounsellor,
          newBranchIdVal: newregion,
          leadsCountVal: data.length,
          transferTypeVal: transferType,
          transferredByVal: user.id
        };
        
        const response = await datatransferStudentLeads(payload);

        if (response.response === "login_error") {
          toast.dismiss();
          toast.error(response.message || "Login required");
          setShowLogoutLoader(true);
          return;
        } else if (response.response === "error") {
          toast.dismiss();
          toast.error(response.message || "Error transfer faild!");
        } else if (response.response === "success") {
          toast.dismiss();
          if (response.message) toast.success(response.message);
        }
      } catch (err) {
        toast.dismiss();
        toast.error("Failed to transfer. Please try again.");
      } finally {
        setLoading(false);
        setSelectedRows([]);
         fetchLeads();
      }
    }


 const columns = [
    {
      name: 'ID',
      cell: (_row: Lead, index: number) => (currentPage - 1) * perPage + index + 1,
      width: '60px',
    },
   
    {
      name: 'Date',
      cell: (row: Lead) => (
        <div>
          {row.lead_date && (
            <div>
              <span>W:</span>{row.lead_date}
            </div>
          )}
        
        </div>
      ),
      sortable: false,
      wrap: true,
    },
    {
      name: 'Name',
      cell: (row: Lead) => (
        <div>
          {row.full_name && <div>{row.full_name}</div>}
          {row.phone_number && <div> {row.phone_number}</div>}
          {row.email && <div> {row.email}</div>}
        </div>
      ),
      sortable: false,
      wrap: true,
    },   
    
    { name: 'Branch', selector: (row: Lead) => row.branchname || '-', sortable: true, wrap: true },
    { name: 'Counsellor', selector: (row: any) => row.executive_name || '-', sortable: true, wrap: true },    
    { name: 'Status', selector: (row: any) => row.lead_status_name || '-', sortable: true, wrap: true },
    { name: 'Source', selector: (row: Lead) => row.source_name || '-', sortable: true, wrap: true },

  ];



  
  return (
    <Container fluid>
      <PageBreadcrumb title={`Leads List (${data.length})`} />

      {showLogoutLoader && (
        <LogoutOverlay
          duration={5}
          onComplete={async () => {
            await logout();
          }}
        />
      )}


      <Form className="mb-4">
        <Row style={{ marginBottom: '1rem' }}> 
            {/* Branch */}
            {/* {user.type} */}
            {(user.type === '1' || user.type === '2') && (
              <Col xs={12} sm={6} md={2}>
                <Form.Label>Branch</Form.Label>
                <Select
                    options={regionOptions}
                    value={regionOptions.find((opt) => opt.value === String(region)) || null}
                    onChange={(opt) => setRegion(opt ? String(opt.value) : "0")}
                    
                />
              </Col>
            )}

             {(user.type === '3') && (
              <Col xs={12} sm={6} md={2}>
                <Form.Label>Branch</Form.Label>
                <Select
                    options={regionOptions}
                    value={regionOptions.find((opt) => opt.value === String(region)) || null}
                    onChange={(opt) => setRegion(opt ? String(opt.value) : "0")}
                    isDisabled
                />
              </Col>
            )}
         

            {/* Counsellor */}
            <Col xs={12} sm={6} md={2}>
            <Form.Label>Counsellor</Form.Label>
            <Select
                options={executiveOptions}
                value={executiveOptions.find((o) => o.value === selectedCounsellor) || null}
                onChange={handleExecChange}
                placeholder="Select Counselor"
                required
            />
            </Col>


            {/* Status */}
            <Col xs={12} sm={6} md={2}>
            <Form.Label>Status</Form.Label>
            <Select
                options={statusOptions}
                value={statusOptions.find((s) => s.value === statusFilter) || null}
                onChange={handleStatusChange}
                placeholder="Select Lead Status"
                required
            />
            </Col>

            {/* Transfer Type */}
            <Col xs={12} sm={6} md={2}>
            <Form.Label>Transfer Type</Form.Label>
            <Select
              options={transferOptions.map((opt) => ({
                ...opt,
                isDisabled: opt.value === "2" && !isTotalTransferEnabled
              }))}
              value={transferOptions.find((o) => o.value === transferType) || null}
              onChange={handleTransferTypeChange}
              placeholder="Select Transfer Type"
            />

            </Col>

            {/* Search Button */}
            <Col xs={12} sm={6} md={1}>
            <div className="mb-4"></div> 
            <Button variant="primary" className="w-100" onClick={fetchLeads}>
                Search
            </Button>
            </Col>
          </Row>
          <Row >
            {/* CONDITIONAL SECTION */}
            {data.length > 0 && (
            <>
                {/* To Branch */}
                 {/* To Branch */}
                {(user.type === '1' || user.type === '2') && (
                  <Col xs={12} sm={6} md={2}>
                    <Select
                        options={newregionOptions}
                        value={newregionOptions.find((opt) => opt.value === String(newregion)) || null}
                        onChange={(opt) => setNewRegion(opt ? String(opt.value) : "0")}
                        
                    />
                  </Col>
                )}

                {(user.type === '3') && (
                  <Col xs={12} sm={6} md={2}>
                    <Select
                        options={newregionOptions}
                        value={newregionOptions.find((opt) => opt.value === String(newregion)) || null}
                        onChange={(opt) => setNewRegion(opt ? String(opt.value) : "0")}
                        isDisabled
                    />
                  </Col>
                )}

                {/* To Counsellor */}
                <Col xs={12} sm={6} md={2}>
                <Select
                    options={newexecutiveOptions}
                    value={newexecutiveOptions.find((o) => o.value === newselectedCounsellor) || null}
                    onChange={selectedNewCounsellor}
                    placeholder="Select Counselor"
                    required
                />
                </Col>

                {/* Transfer Button */}
                <Col xs={12} sm={6} md={1}>
                  <Button variant="danger" className="w-100" onClick={transfer}>
                      Transfer
                  </Button>
                </Col>

                 {transferType === '1' && (
                  <Col xs={12} sm={6} md={2}>
                      <span>Slected Rows</span>: {selectedRows.length}
                  </Col>
               
                )}
            </>
            )}
        </Row>
      </Form>


      {error && <Alert variant="danger">{error}</Alert>}

      <DataTable
        columns={columns}
        data={data}
        progressPending={loading}
        pagination
        highlightOnHover
        pointerOnHover
        responsive
        selectableRows
        selectableRowsHighlight
        onSelectedRowsChange={handleSelectedRows}
        selectableRowDisabled={() => transferType === "2"}
        paginationPerPage={perPage}
        onChangePage={(page) => setCurrentPage(page)}
        onChangeRowsPerPage={(newPerPage, page) => {
          setPerPage(newPerPage);
          setCurrentPage(page);
        }}
        conditionalRowStyles={[
          {
            when: (row: any) => row.followup_date_time !== null || row.A_date_time !== null,
            style: {
              backgroundColor: '#ffff',
              color: '#000',
            },
          },
          {
            when: (row: any) => row.followup_date_time === null && row.A_date_time === null,
            style: {
              backgroundColor: '#e5f4e3ff',
              color: '#000',
            },
          },
        ]}
        
      />

    </Container>
  );
};

export default DataTransferStudentLeadsList;
