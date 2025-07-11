import api from '../api/axiosInstance.tsx';

export interface Telecaller {
  id: string;
  full_name: string;
  assignment_order?: string;
  is_available_for_assignment?: string;
  order:any;
  type?:number;
  
}



export interface AssignmentPayload {
  userIdVal: number;
  assignmentOrderVal: number;
}

interface FetchPayload {
  typeVal: string;
  userIdVal: string;
  tokenVal: string;
  regionVal:string
}

interface SavePayload extends FetchPayload {
  autoAssignTelecallersVal: string;
  assignmentsVal: AssignmentPayload[];
}

// export const fetchTelecallers = async (payload: FetchPayload): Promise<Telecaller[]> => {
//   const response = await api.post('/api/User/getUserByRole', payload);
//   return response.data
//   // if (response.data.response === 'success') {
//   //   return response.data.data;
//   // } else {
//   //   throw new Error(response.data.message || 'Failed to fetch telecallers');
//   // }
// };
export const fetchTelecallers = async (payload: FetchPayload) => {
  const response = await api.post('/api/User/getUserByRole', payload);
  return response.data;
};
 export const saveAutoAssignSettings = async (payload: SavePayload) => {
  const response = await api.post('/api/User/autoAssignment', payload);
  return response.data;
};
// export const saveAutoAssignSettings = async (
//   payload: SavePayload
// ): Promise<string> => {
//   const response = await api.post('/api/User/autoAssignment', payload);

//   if (response.data.response === 'success') {
//     return response.data.message || 'Settings saved successfully';
//   } else {
//     throw new Error(response.data.message || 'Failed to save settings');
//   }
// };
