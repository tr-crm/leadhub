import api from '../api/axiosInstance.tsx'; // your axios instance
import axios from 'axios'; // to access isAxiosError

export interface Status {
  id: string;
  name: string;
  count: number;
}

export interface DailyLead {
  date: string;
  statuses: Status[];
  total: number;
  name:string;
  branchIds:any;
  id:any;
}

export interface ApiResponse {
  response: string;
  message: string;
  data: DailyLead[];
}

export interface RegionApiResponse<T> {
  type: 'success' | 'error' | 'login_error';
  data?: T;
  message?: string;
  response?:string;
}

export interface DailyLeadReportRequest {
  yearVal: string;
  monthVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal: string;
  catgoryIdVal: any; 
}

export interface RegionLeadReportRequest {
  yearVal: string;
  monthVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal:any,
  catgoryIdVal: string[];
}

export const getDailyReportLeadsList = async (
  payload: DailyLeadReportRequest
): Promise<ApiResponse> => {
  try {
    const response = await api.post<ApiResponse>(
      '/api/Reports/dailyLeadReport',
      payload
    );

    return response.data;
  } catch (error: any) {
    if (axios.isAxiosError(error)) {
      const msg =
        error.response?.data?.message ||
        error.response?.statusText ||
        error.message;
      throw new Error(msg);
    }

    throw new Error('An unexpected error occurred');
  }
};


export const getDailySourceWiseLeadReportLeadsList = async (
  payload: DailyLeadReportRequest
): Promise<ApiResponse> => {
  try {
    const response = await api.post<ApiResponse>(
      '/api/Reports/sourceWiseLeadReport',
      payload
    );

    return response.data;
  } catch (error: any) {
    if (axios.isAxiosError(error)) {
      const msg =
        error.response?.data?.message ||
        error.response?.statusText ||
        error.message;
      throw new Error(msg);
    }

    throw new Error('An unexpected error occurred');
  }
};


export const getRegionwiseLeadReportList = async (payload: RegionLeadReportRequest) => {
  const response = await api.post('/api/Reports/regionWiseLeadReport', payload);
  return response.data;
};
//getDailyDMLeadReportList

export const getDailyDMLeadReportList = async (payload: RegionLeadReportRequest) => {
  const response = await api.post('/api/Reports/dailyDmLeadReport', payload);
  return response.data;
};
export const getExecutivewiseLeadReportList = async (payload: RegionLeadReportRequest) => {
  const response = await api.post('/api/Reports/telecallerReport', payload);
  return response.data;
};

export interface MonthlyLead {
  year_month: string;
  month: string;
  statuses: Status[];
  total: number;
  name:string;
}
export interface MonthlyWiseReportPayload {
  yearVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  catgoryIdVal : string[];
}
//getMonthlyWiseReportLeadsList

export const getMonthlyWiseReportLeadsList = async (
  payload: MonthlyWiseReportPayload
): Promise<any> => {
  try {
    const response = await api.post<any>(
      '/api/Reports/leadWiseMonthlyLeadReport',
      payload
    );

    return response.data;
  } catch (error: any) {
    if (axios.isAxiosError(error)) {
      const msg =
        error.response?.data?.message ||
        error.response?.statusText ||
        error.message;
      throw new Error(msg);
    }

    throw new Error('An unexpected error occurred');
  }
};

export interface MonthlySourceWiseReportPayload {
  yearVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  catgoryIdVal: string[];
}

//getMonthlySourceWiseReportLeadsList

export const getMonthlySourceWiseReportLeadsList = async (
  payload: MonthlySourceWiseReportPayload
): Promise<any> => {
  try {
    const response = await api.post<any>(
      '/api/Reports/sourceWiseMonthlyLeadReport',
      payload
    );

    return response.data;
  } catch (error: any) {
    if (axios.isAxiosError(error)) {
      const msg =
        error.response?.data?.message ||
        error.response?.statusText ||
        error.message;
      throw new Error(msg);
    }

    throw new Error('An unexpected error occurred');
  }
};



export interface DailyLeadClickableReportPayload {
  leadDateVal: string[];
  leadStatusVal: string[];
  userIdVal: string;
  tokenVal: string;
  typeVal: string;
  regionVal: string;
  catgoryIdVal: string[];
}

export const DailyLeadClickableReportRequest = async (payload: DailyLeadClickableReportPayload) => {
  const response = await api.post('/api/Reports/dailyLeadReportClickable', payload);
  return response.data;
};

export interface DailyLeadDmMClickableReportPayload {
  leadDateVal: string[];
  leadStatusVal: string[];
  userIdVal: string;
  tokenVal: string;
  typeVal: string;
  catgoryIdVal: string[];
}

export const DailyLeadDmClickableReportRequest = async (payload: DailyLeadDmMClickableReportPayload) => {
  const response = await api.post('/api/Reports/dailyDmLeadReportClickable', payload);
  return response.data;
};



export interface DailySourceWiseLeadClickablePayload {
  leadDateVal: string[];
  sourceVal: string[];
  userIdVal: string;
  tokenVal: string;
  typeVal: string;
  regionVal: string;
  catgoryIdVal: string[];
}

export const getDailySourceWiseLeadClickableDetails = async (payload: DailySourceWiseLeadClickablePayload) => {
  const response = await api.post('/api/Reports/sourceWiseLeadReportClickable', payload);
  return response.data;
};




export interface MonthlyWiseClickableReportPayload {
  monthVal: string[];
  leadStatusVal: string[];
  userIdVal: string;
  tokenVal: string;
  typeVal: string;
  yearVal:string;
  catgoryIdVal : string[];
}

export const MonthlyWiseClickableReportRequest = async (payload: MonthlyWiseClickableReportPayload) => {
  const response = await api.post('/api/Reports/leadWiseMonthlyLeadReportClickable', payload);
  return response.data;
};


export interface RegionLeadClickablePayload {
  branchIdVal: string[];
  leadStatusVal: string[];
  userIdVal: string;
  tokenVal: string;
  typeVal: string;
  yearVal: string;
  monthVal: string;
  catgoryIdVal: string[];
}

export const getRegionLeadClickableDetails = async (payload: RegionLeadClickablePayload) => {
  const response = await api.post('/api/Reports/regionWiseLeadReportClickable', payload);
  return response.data;
};





export interface getMonthlySourceWiseReportClickablePayload {
  monthVal: string[];
  sourceVal: string[];
  userIdVal: string;
  tokenVal: string;
  typeVal: string;
  yearVal: string;
  catgoryIdVal : string[];
}

export const getMonthlySourceWiseReportClickableLeadsList = async (payload: getMonthlySourceWiseReportClickablePayload) => {
  const response = await api.post('/api/Reports/sourceWiseMonthlyLeadReportClickable', payload);
  return response.data;
};



export interface BranchLeadReportRequest {
  yearVal: string;
  monthVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal:any
}

export const getBranchwiseLeadReportList = async (payload: BranchLeadReportRequest) => {
  const response = await api.post('/api/Reports/branchWiseRegionWiseLeadReport', payload);
  return response.data;
};



export interface getExecutivewiseLeadReportClickablepayload {
  yearVal: string;
  monthVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  executiveIdVal:string[];
  leadStatusVal:string[];
  catgoryIdVal: string[];
}

export const getExecutivewiseLeadReportClickableDetails = async (payload: getExecutivewiseLeadReportClickablepayload) => {
  const response = await api.post('/api/Reports/executiveAndLeadStatusWiseReportClickable', payload);
  return response.data;
};




export interface ProductSourceReportRequest {
  yearVal: string;
  monthVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal: string;
  catgoryIdVal : string[];
}

export const getProductSourceWiseLeadReportLeadsList = async (payload: ProductSourceReportRequest) => {
  const response = await api.post('/api/Reports/ProductWiseLeadReport', payload);
  return response.data;
};



export interface ProductSourceWiseLeadClickablePayload {
   yearVal: string;
  monthVal: string;
  catgoryIdVal: string[];
  sourceVal: string[];
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal: string;
}

export const getProductSourceWiseLeadClickableDetails = async (payload: ProductSourceWiseLeadClickablePayload) => {
  const response = await api.post('/api/Reports/productWiseLeadReportClickable', payload);
  return response.data;
};



export interface getDailyExecutivewiseLeadReportPayload {
   fromDateVal: string;
  toDateVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal: string;
    catgoryIdVal: string[];
}

export const getDailyExecutivewiseLeadReportList = async (payload: getDailyExecutivewiseLeadReportPayload) => {
  const response = await api.post('/api/Reports/telecallerDateWiseReport', payload);
  return response.data;
};



export interface getDailyExecutivewiseLeadReportClickablepayload {
   fromDateVal: string;
  toDateVal: string;
   
  userIdVal: number;
 tokenVal: string;
  typeVal: number;
  executiveIdVal: string[];
  leadStatusVal: string[];
  catgoryIdVal: string[];
}

export const getDailyExecutivewiseLeadReportClickableDetails = async (payload: getDailyExecutivewiseLeadReportClickablepayload) => {
  const response = await api.post('/api/Reports/executiveAndLeadStatusDateWiseReportClickable', payload);
  return response.data;
};