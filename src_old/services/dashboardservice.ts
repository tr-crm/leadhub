import axios from '../api/axiosInstance'; // or plain axios

export interface leadDashBord {
  yearVal: number;
  monthVal: number;
  userIdVal: number;
  tokenVal: number;
  typeVal?: number;
}

// Define expected User shape (adjust to match API response)



export const dashboardLeadReport = async (payload: leadDashBord) => {
  const response = await axios.post('/api/Reports/dashboardLeadReport', payload);
  return response.data;
};