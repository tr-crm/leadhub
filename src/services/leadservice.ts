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
  executiveIdVal:any
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
  createdByVal: number;
  userIdVal: number;
  tokenVal: string;
  regionVal:number;
  executiveIdVal:number | '';
}
export interface  LeadUpdateRequestPayload {
  id: number;
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
  // ...other fields
}



export const getLeadsList = async (payload: LeadRequestPayload) => {
  const response = await axios.post('/api/Leads/getLeadsList', payload);
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
  const response = await axios.post('/api/Leads/createLead', payload);
  return response.data;
};
export const FreshLeadTransferToLeadList = async (payload:any) => {
  const response = await axios.post('/api/Leads/leadTransfer', payload);
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
  dm:number
}

export async function ImportLeadCreate(
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


// getImportLeadsList
export interface ImportLeadPayload {
  start: string;
  sourceVal: any;
  typeVal?: number;
  userIdVal: number;
  tokenVal: number;
  regionVal:any;
 
}
// getImportLeadsList
export async function getImportLeadsList(
  payload:ImportLeadPayload
): Promise<ImportCreateApiResponse<any>> {
  try {
    // Use your custom axios instance for the POST request
    const res = await axios.post('/api/Leads/getImportLeadsList', payload);
   
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

//getDmImportLeadsList


export async function getDmImportLeadsList(
  payload:ImportLeadPayload
): Promise<ImportCreateApiResponse<any>> {
  try {
    // Use your custom axios instance for the POST request
    const res = await axios.post('/api/Leads/getDmImportLeadsList', payload);
   
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





