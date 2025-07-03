import api from '../api/axiosInstance'; // your axios instance
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
}

export interface ApiResponse {
  response: string;
  message: string;
  data: DailyLead[];
}

export interface DailyLeadReportRequest {
  yearVal: string;
  monthVal: string;
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
