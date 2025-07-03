import axios from '../api/axiosInstance'; // or plain axios

export interface logoutpayload {
  userIdVal: number;
  tokenVal: number;
  typeVal?: number;
  multiLoginVal: number;
}

// Define expected User shape (adjust to match API response)



export const logoutService = async (payload: logoutpayload) => {
  const response = await axios.post('/api/User/userLogout', payload);
  return response.data;
};