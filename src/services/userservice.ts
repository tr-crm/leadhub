import axios from '../api/axiosInstance'; // or plain axios
export interface UserListRequestPayload {
  start: string;
  userIdVal: number;
  tokenVal: string;
  typeVal:number;
  regionVal:number;
}


export interface LeaveRequestPayload {
  userIdVal: number;
  tokenVal: string;
  leaveFromDateVal: string;
  leaveToDateVal: string;
}

 export interface UserEditPayload {
  idVal: number;
  userIdVal: number;
  tokenVal: string;
  firstNameVal: string;
  lastNameVal: string;
  emailAddressVal: string;
  phoneNumberVal: string;
  roleVal: number;
  updatedByVal: number;
  regionVal: string | number;
  supervisionVal : string | number;
  idletimeVal : string;
}


export interface UserResetPayload {
  idVal: number;
  userIdVal: number;
  tokenVal: string;
  newPwdVal: string;
  rePwdVal: string;
}

export interface AssignPayload {
  idVal: number;
  userIdVal: number;
  tokenVal: string;
  autoAssignTelecallersVal : string | number;
  assignmentOrderVal: number;
}

export interface removePayload {
  idVal: number;
  userIdVal: number;
  tokenVal: string;
  autoAssignTelecallersVal : string | number;
  assignmentOrderVal: number;
}


export interface jobsCreatePayload {
  jobPlanVal: string;
  jobDateVal: string;  
  userIdVal : number;
  tokenVal: string;
  createdByVal: number;
  jobStatusVal: string;
}

export interface jobsListPayload {
  toDateVal: string;
  fromDateVal: string;  
  userIdVal : number;
  tokenVal: string;
}


export interface jobsExecutionPayload {
  idVal: number;
  jobExecutionVal: string;
  jobStatusVal: string;  
  updatedByVal: number;
  userIdVal : number;
  tokenVal: string;
}

export interface jobsScoresPayload {
  idVal: number;
  jobScoreVal: string;
  scoreUpdatedByVal: number;
  userIdVal : number;
  tokenVal: string;
}

export interface LoginHistoryPayload{
  idVal: number;
  userIdVal : number;
  tokenVal: string;
}

export interface UserChangePayload{
  idVal: number;
  userIdVal: number;
  tokenVal: string;
  oldPwdVal: string;
  newPwdVal: string;
  rePwdVal: string;
}

export interface UserCreatePayload{
  userIdVal: number;
  tokenVal: string;
  firstNameVal: string;
  lastNameVal: string;
  emailAddressVal: string;
  phoneNumberVal: string;
  roleVal: number;
  regionVal: number;
  createdByVal: number;
  supervisionVal: number;
  idletimeVal : string;
}

export const getUserCreate = async (payload:any) => {
  const response = await axios.post('/api/User/createUser', payload);
  return response.data;
};
export const getUserList = async (payload: UserListRequestPayload) => {
  const response = await axios.post('/api/User/getUserList', payload);
  return response.data;
};

export const submitLeaveRequest = async (payload: LeaveRequestPayload) => {
  const response = await axios.post('/api/User/userLeaveCreate', payload);
  return response.data;
};


export const submitUserEdit = async (payload: UserEditPayload) => {
  const response = await axios.post('/api/User/updateUser', payload);
  return response.data;
};


export const submitUserResetPassword = async (payload: UserResetPayload) => {
  const response = await axios.post('/api/User/resetUserPassword', payload);
  return response.data;
};

export const submitAssignUser = async (payload: AssignPayload) => {
  const response = await axios.post('/api/User/autoAssignmentSingle', payload);
  return response.data;
};

export const submitRemoveAssignUser = async (payload: removePayload) => {
  const response = await axios.post('/api/User/autoAssignmentSingle', payload);
  return response.data;
};


export const submitJobCreate = async (payload: jobsCreatePayload) => {
  const response = await axios.post('/api/User/createJobPlan', payload);
  return response.data;
};


export const getJobsList = async (payload: jobsListPayload) => {
  const response = await axios.post('/api/User/getJobRoleList', payload);
  return response.data;
};


export const submitJobExecution = async (payload: jobsExecutionPayload) => {
  const response = await axios.post('/api/User/createJobPlanExecution', payload);
  return response.data;
};



export const submitJobScore = async (payload: jobsScoresPayload) => {
  const response = await axios.post('/api/User/createJobPlanScore', payload);
  return response.data;
};



export const getLoginHistoryList = async (payload: LoginHistoryPayload) => {
  const response = await axios.post('/api/User/getUserLoginHistory', payload);
  return response.data;
};


export const submitUserChangePassword = async (payload: UserChangePayload) => {
  const response = await axios.post('/api/User/changeUserPassword', payload);
  return response.data;
};


export const submitUserCreate = async (payload: UserCreatePayload) => {
  const response = await axios.post('/api/User/createUser', payload);
  return response.data;
};


//UpdateFirstloginSeenComment
export const UpdateFirstloginSeenComment = async (payload:any) => {
  const response = await axios.post('/api/User/adduserFirstLoginStatus', payload);
  // console.log(response);
  return response.data;
};

export const addSavedFilters = async (payload: any) => {
  const response = await axios.post('/api/User/addUserFilters', payload);
  return response.data;
};
export const getSavedFilters = async (payload: any) => {
  const response = await axios.post('/api/User/getUserFilters', payload);
  return response.data;
};
