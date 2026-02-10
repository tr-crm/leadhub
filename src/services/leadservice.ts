import axios from '../api/axiosInstance.tsx'; // or plain axios

// import axio from '../api/axiosInstance.tsx'; // your custom axios instance
import axio from 'axios'; // main axios package for isAxiosError

export interface WebhookLeadayload {
  start: string;
  sourceVal: any;
  typeVal?: number;
  userIdVal: number;
  tokenVal: number;
  regionVal:any;
 executiveIdVal:any;
 leadtypeVal:any;
}

export interface LeadRequestPayload {
  start: string;
  sourceVal: any;
  typeVal?: number;
  fromDateVal: string;
  toDateVal: string;
  userIdVal: number;
  tokenVal: any;
  leadstatusVal:any;
  executiveIdVal:any;
  touchStatusVal:any;
  revertStatusVal: any;
}

export interface LeadCreateRequestPayload {
  leadDateVal: string;
  firstNameVal: string;
  lastNameVal: string;
  emailAddressVal: string;
  phoneNumberVal: string;
  sourceVal: number | '';
  categoryVal: number | '';
  subCategoryVal: number | '';
  productVal: number | '';
  countryVal: number | '';
  branchVal: number | '';
  leadTypeVal: number | '';
  leadStatusVal: number | '';
  qualityscoreVal: number | '';
  createdByVal: number;
  userIdVal: number;
  tokenVal: string;
  regionVal:number;
  executiveIdVal:number | '';
  alternatephoneNumberVal: string;
}
export interface  LeadUpdateRequestPayload {
  idVal: number;
  leadDateVal: string;
  firstNameVal: string;
  lastNameVal: string;
  emailAddressVal: string;
  phoneNumberVal: string;
  sourceVal: any;
  categoryVal?: any;
  subCategoryVal?: any;
  productVal?: any;
  countryVal?: any;
  branchVal?: any;
  userIdVal: number;
  tokenVal: string;
  executiveIdVal:any;
  updatedByVal:any;
  leadStatusVal:any;
  regionVal:any;
  typeVal:any;
  qualityscoreVal:any;
  // ...other fields
}



export const getLeadsList = async (payload: any) => {
  const response = await axios.post('/api/Leads/getLeadsList', payload);
  return response.data;
};
export const getFollowUpLeadsList = async (payload: LeadRequestPayload) => {
  const response = await axios.post('/api/Leads/getLeadFollowupsList', payload);
  return response.data;
};


export const getWebhookLeadsList = async (payload:WebhookLeadayload) => {
  const response = await axios.post('/api/Leads/getWebhookLeadsList', payload);
  return response.data;
};

export const CreateLead = async (payload: LeadCreateRequestPayload) => {
  const response = await axios.post('/api/Leads/createLead', payload);
  return response.data;
};
export const updateLead = async (payload: LeadUpdateRequestPayload) => {
  const response = await axios.post('/api/Leads/updateLead', payload);
  return response.data;
};
export const FreshLeadTransferToLeadList = async (payload:any) => {
  const response = await axios.post('/api/Leads/leadTransfer', payload);
  return response.data;
};
export const BulkFreshLeadTransferToLeadList = async (payload:any) => {
  const response = await axios.post('/api/Leads/bulkLeadTransfer', payload);
  return response.data;
};
export const ImportFreshLeadTransferToLeadList = async (payload:any) => {
  const response = await axios.post('/api/Leads/importLeadTransfer', payload);
  return response.data;
};


// export const CreateLead = async (payload: LeadCreateRequestPayload): Promise<void> => {
//   const res = await fetch('/api/Leads/createLead', {
//     method: 'POST',
//     headers: { 'Content-Type': 'application/json' },
//     body: JSON.stringify(payload),
//   });

//   if (!res.ok) {
//     const errorText = await res.text();
//     throw new Error(errorText || 'Lead creation failed');
//   }
// };

export interface AddFollowUpPayload {
  leadIdVal: number;
  followupDateVal: string;
  commentVal: string;
  createdByVal: number;
  leadStatusVal:any;
}
export const addLeadFollowUp = async (payload: AddFollowUpPayload) => {
  try {
    const response = await axios.post('/api/Leads/addLeadFollowup', payload);
    return response.data;
  } catch (error: any) {
    throw new Error(error?.response?.data?.message || 'Failed to add lead follow-up');
  }
};


export interface TransferLeadPayload {
  leadIdVal: number | string;
  leadDateVal: string;
  firstNameVal: string;
  lastNameVal: string;
  emailAddressVal: string;
  phoneNumberVal: string;
  sourceVal: string;
  categoryVal: string;
  subCategoryVal?: string;
  productVal?: string;
  countryVal?: string;
  branchVal: string;
  createdByVal: number | string;
}

export const transferLead = async (payload: TransferLeadPayload) => {
  try {
    const response = await axios.post('/api/Leads/transfer', payload);
    return response.data;
  } catch (error: any) {
    throw new Error(error?.response?.data?.message || 'Transfer failed');
  }
};


// leadservice.ts


export interface ImportCreateApiResponse<T> {
  type: 'success' | 'error' | 'login_error';
  data?: T;
  message?: string;
  response?:string;
}

export interface LeadPayload {
  lead_date: string | null;
  source_id: string | null;
  category_id: string | null;
  sub_category_id: string | null;
  product_id: string | null;
  branch_id: string;
  lead_type: string;
  created_by: string | null;
  data: any;
  userIdVal:number;
  tokenVal:string;
  dm:number,
  // regionVal:any,
  region:any
}

export async function ImportLeadCreate1(
  payload: LeadPayload
): Promise<ImportCreateApiResponse<any>> {
  try {
    // Use your custom axios instance for the POST request
    const res = await axios.post('/api/Leads/importLeads', payload);
   
    // Check if backend indicates login error inside the response data
    if (res.data?.response === 'login_error') {
      return {
        type: 'login_error',
        message: res.data.message || 'Unauthorized. Please login again.',
      };
    }

    // Successful response
    return { type: 'success', data: res.data };
  } catch (error: any) {
    // Use the main axios package's helper to check if this is an axios error
    if (axio.isAxiosError(error)) {
      // Check for 401 unauthorized HTTP status
      if (error.response?.status === 401) {
        return {
          type: 'login_error',
          message: 'Unauthorized. Please login again.',
        };
      }
      // Other axios errors
      return {
        type: 'error',
        message: error.response?.data?.message || error.message || 'Unknown error',
      };
    }

    // Non-axios errors fallback
    return { type: 'error', message: error.message || 'Network error' };
  }
}

export const ImportLeadCreate = async (payload: LeadPayload) => {
  const response = await axios.post('/api/Leads/importLeads', payload);
  return response.data;
};


//etImportLeadsList
export interface ImportLeadPayload {
  start: string;
  sourceVal: any;
  typeVal?: number;
  userIdVal: number;
  tokenVal: number;
  regionVal:any;
  executiveIdVal:any;
  leadtypeVal:any;
  fromDateVal:any;
  toDateVal:any;

 
}



// getImportLeadsList
export const getImportLeadsList = async (payload: ImportLeadPayload) => {
  const response = await axios.post('/api/Leads/getImportLeadsList', payload);
  return response.data;
};

//getDmImportLeadsList

export const getDmImportLeadsList = async (payload: ImportLeadPayload) => {
  const response = await axios.post('/api/Leads/getDmImportLeadsList', payload);
  return response.data;
};

export interface PartialWalkinPayload {
  start: string;
  sourceVal: any;
  typeVal?: number;
  fromDateVal: string;
  toDateVal: string;
  userIdVal: number;
  tokenVal: any;
  leadstatusVal:any;
  executiveIdVal:any;
  branchIdVal: string;
}


export const getPartialWalkinList = async (payload: PartialWalkinPayload) => {
  const response = await axios.post('/api/Leads/getLeadPartialWalkinList', payload);
  return response.data;
};

export interface NotificationPayload {
  userIdVal: number;
  tokenVal: number;
  typeVal?: number;
}

export const getTransactionNotificationList = async (payload: NotificationPayload) => {
  const response = await axios.post('/api/Leads/transactionList', payload);
  return response.data;
};
export interface UpdateNotificationPayload {
  userIdVal: number;
  tokenVal: number;
  typeVal?: number;
  idVal:number;
}

export const updateTransactionNotification = async (payload: UpdateNotificationPayload) => {
  const response = await axios.post('/api/Leads/updateTransactionStatus', payload);
  return response.data;
};


export interface SeachRequestPayload {
  searchVal:string;
  userIdVal: number;
  tokenVal: number;
  typeVal?: number;
}

export const getSeachRequestList = async (payload: SeachRequestPayload) => {
  const response = await axios.post('/api/Leads/getsearchByPhoneNumberLeadList', payload);
  return response.data;
};







// services/userservice.ts

export interface GetExecutiveListPayload {
  userIdVal: number;
  tokenVal: string;
  typeVal?: number;
  regionVal?: number;
}

export const getExecutivesByRole = async (payload: GetExecutiveListPayload) => {
  const response = await axios.post(
    '/api/User/getUserByRole',
    payload
  );
  return response.data;
};



export interface LeadIdBasedRequestPayload {
  leadIdVal: number;
  userIdVal: number;
  tokenVal: string;
  typeVal?: number;
}

export const LeadIdBasedDetails = async (payload: LeadIdBasedRequestPayload) => {
  const response = await axios.post(
    '/api/Leads/getLeadDetailsByLeadIdWithComments',
    payload
  );
  return response.data;
};


export interface SeachOldCrmRequestPayload {
  contactnoVal: string;
  namesearchVal : string;
}

export const getSeachOldCrmRequestList = async (payload: SeachOldCrmRequestPayload) => {
  const response = await axios.post(
    'https://api.texasreview.in/university/api//Applicant/get_applicant_by_mobileno',
    payload
  );
  return response.data;
};




export interface SeachOldCrmFollowUpRequestPayload {
  fromdateVal: string;
  todateVal : string;
  leadtoVal: string;
}

export const getOldCrmFollowUpLeadsList = async (payload: SeachOldCrmFollowUpRequestPayload) => {
  const response = await axios.post(
    'https://api.texasreview.in/university/api//Applicant/get_lead_followup_list_by_dates',
    payload
  );
  return response.data;
};



export interface oldCRMAddFollowupRequestPayload {
   leaddateVal?: string;
  firstnameVal?: string;
  lastNameVal?: string;
  emailidVal?: string;
  mobilenoVal?: string;

  // Lead Identifiers
  applicantidVal?: string | number;
  teleleadidVal?: string | number;
  levelidVal?: string | number;
  leadtoVal?: string;

  // Department & Product Info
  deptidVal?: string | number;
  maincatproductVal?: string;
  subcatproductVal?: string;
  keywordVal?: string;

  // Source & Category
  sourceVal?: any;
  categoryVal?: any;
  subCategoryVal?: any;
  productVal?: any;
  productdetailsVal?: any;
  branchVal?: any;
  visitbranchVal?: any;

  // Executive & Assignment
  executiveIdVal?: any;
  excutiveIdVal?: any;

  // Status & Quality
  qualityscoreVal?: any;
  qualityVal?: string;
  PartialWalkin?: string;
  leadStatusVal?: any;
  leadstatusVal?: string;

  // Follow-up Info
  followupdateVal?: string;
  commentsVal?: string;

  // Metadata
  createdbyVal?: string | number;
}

export const oldCRMaddLeadFollowUp = async (payload: oldCRMAddFollowupRequestPayload) => {
  const response = await axios.post(
    'https://api.texasreview.in/university/api//Sudheer_Test/update_leadform_data',
    payload
  );
  return response.data;
};

export interface LeadOldCRMToNewCRMTransferRequestPayload {
 
leadDateVal: string;
    firstNameVal: string;
    lastNameVal: string;
    emailAddressVal: string;
    phoneNumberVal: string;
    sourceVal: string;
    qualityscoreVal: string;
    categoryVal: string;
    subCategoryVal: string;
    userIdVal: string;
    tokenVal: string;
    branchVal: string;
    productVal: string;
    countryVal: string;
    leadStatusVal: string;
    executiveIdVal: string;
    updatedByVal: string;
    regionVal: string;
    typeVal: string;
    createdByVal: string;
    applicantidVal: string;
}

export const LeadTransferLeadHub = async (payload: LeadOldCRMToNewCRMTransferRequestPayload) => {
  const response = await axios.post(
    '/api/Leads/createLead',
    payload
  );
  return response.data;
};




export interface UpdateOldCRMApllicantIDLeadHubPayload {
 
    applicantidVal: string;
}

export const UpdateOldCRMApllicantIDLeadHub = async (payload: UpdateOldCRMApllicantIDLeadHubPayload) => {
  const response = await axios.post(
    'https://api.texasreview.in/university/api//Sudheer_Test/update_applicantid_based_teleid_remove',
    payload
  );
  return response.data;
};



//getDataTransferStudentLeadsList
export const getDataTransferStudentLeadsList = async (payload: any) => {
  const response = await axios.post('/api/Transfer/leadTransferList', payload);
  return response.data;
};

// datatransferStudentLeads
export const datatransferStudentLeads = async (payload: any) => {
  const response = await axios.post('/api/Transfer/transferLeadhubLeads', payload);
  return response.data;
};

//regionChangeFromWebhookByLeadId
export const regionChangeFromWebhookByLeadId = async (payload: any) => {
  const response = await axios.post('/api/Transfer/webhookRegionLeadTransfer', payload);
  return response.data;
};

//regionChangeFromLeadListByLeadId
export const regionChangeFromLeadListByLeadId = async (payload: any) => {
  const response = await axios.post('/api/Transfer/transferLeadhubRegionLeads', payload);
  return response.data;
};

// leadRegionTransferList
export const leadRegionTransferList = async (payload: any) => {
  const response = await axios.post('/api/Transfer/leadRegionTransferList', payload);
  return response.data;
};