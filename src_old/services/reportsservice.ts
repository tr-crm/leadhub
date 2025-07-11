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

export interface MonthlyLead {
  month: string;
  statuses: Status[];
  total: number;
  name:string;
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
export interface MonthlyWiseReportPayload {
  yearVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
}

export interface MonthlySourceWiseReportPayload {
  yearVal: string;
  userIdVal: number;
  tokenVal: string;
  typeVal: number;
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


// getRegionwiseLeadReportList



export async function getRegionwiseLeadReportList(
  payload: RegionLeadReportRequest
): Promise<any> {
  try {
    // POST request with custom payload
    const res = await api.post('/api/Reports/regionWiseLeadReport', payload);

    // Handle login error indicated in response body
    if (res.data?.response === 'login_error') {
      return {
        type: 'login_error',
        message: res.data.message || 'Unauthorized. Please login again.',
      };
    }

    // Return successful response data
    return { type: 'success', data: res.data };
  } catch (error: any) {
    // Axios error handling
    if (axios.isAxiosError(error)) {
      if (error.response?.status === 401) {
        // Unauthorized HTTP status
        return {
          type: 'login_error',
          message: 'Unauthorized. Please login again.',
        };
      }
      // Other axios errors with message from response or fallback
      return {
        type: 'error',
        message: error.response?.data?.message || error.message || 'Unknown error',
      };
    }

    // Non-axios error fallback
    return { type: 'error', message: error.message || 'Network error' };
  }
}
//getDailyDMLeadReportList
export async function getDailyDMLeadReportList(
  payload: RegionLeadReportRequest
): Promise<any> {
  try {
    // POST request with custom payload
    const res = await api.post('/api/Reports/dailyDmLeadReport', payload);
    console.log(res.data?.response);
        return res;
    // // Handle login error indicated in response body
    // if (res.data?.response === 'login_error') {
      
    // }

    // // Return successful response data
    // return { type: 'success', data: res.data };
  } catch (error: any) {
    // Axios error handling
    if (axios.isAxiosError(error)) {
      if (error.response?.status === 401) {
        console.log('401');
        // Unauthorized HTTP status
        // navigate('/login');
        return {
          type: 'login_error',
          message: 'Unauthorized. Please login again.',
        };
      }
      // Other axios errors with message from response or fallback
      return {
        type: 'error',
        message: error.response?.data?.message || error.message || 'Unknown error',
      };
    }

    // Non-axios error fallback
    return { type: 'error', message: error.message || 'Network error' };
  }
}

//getExecutivewiseLeadReportList
export async function getExecutivewiseLeadReportList(
  payload: RegionLeadReportRequest
): Promise<any> {
  try {
    // POST request with custom payload
    const res = await api.post('/api/Reports/telecallerReport', payload);
    console.log(res.data?.response);
        return res;
    // // Handle login error indicated in response body
    // if (res.data?.response === 'login_error') {
      
    // }

    // // Return successful response data
    // return { type: 'success', data: res.data };
  } catch (error: any) {
    // Axios error handling
    if (axios.isAxiosError(error)) {
      if (error.response?.status === 401) {
        console.log('401');
        // Unauthorized HTTP status
        // navigate('/login');
        return {
          type: 'login_error',
          message: 'Unauthorized. Please login again.',
        };
      }
      // Other axios errors with message from response or fallback
      return {
        type: 'error',
        message: error.response?.data?.message || error.message || 'Unknown error',
      };
    }

    // Non-axios error fallback
    return { type: 'error', message: error.message || 'Network error' };
  }
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