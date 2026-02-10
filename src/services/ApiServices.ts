import axios from '../api/axiosInstance'; // or plain axios


export interface LoginResponse {
  response: string
  message: string
  data: any
  multiLogin?: number
}



export const SsoLogin = async (payload:any): Promise<LoginResponse> => {
  const res = await axios.post('/api/AutoLogin/autoLogin', payload)
  return res.data
}
