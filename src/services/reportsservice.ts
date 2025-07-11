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
  name:string
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
}

export interface RegionLeadReportRequest {
  yearVal: string;
  monthVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
  regionVal:any
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



