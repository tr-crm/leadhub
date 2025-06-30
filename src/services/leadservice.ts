import axios from '../api/axiosInstance'; // or plain axios

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




