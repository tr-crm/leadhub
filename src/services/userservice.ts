import axios from '../api/axiosInstance'; // or plain axios
export interface UserListRequestPayload {
  start: string;
  userIdVal: number;
  tokenVal: string;
  typeVal:number;
  regionVal:number;
}

// Define expected User shape (adjust to match API response)



export const getUserList = async (payload: UserListRequestPayload) => {
  const response = await axios.post('/api/User/getUserList', payload);
  return response.data;
};