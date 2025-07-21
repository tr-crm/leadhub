// utils/auth.ts

import Cookies from 'js-cookie';
import axios from '../api/axiosInstance'; // Custom axios instance

// interface UserInfo {
//   id: string;
//   access_token: string;
//   type: string;
//   [key: string]: any;
// }

// API endpoint for logout
// const API_LOGOUT_URL = 'https://dev.thetrcrm.com/leadhub/services/api/User/userLogout';

// Get access token from cookie
export const getAuthToken = (): string | undefined => {
  return Cookies.get('accessToken');
};

// // Get full user info from cookie
// export const getUserInfo = (): UserInfo | null => {
//   const user = Cookies.get('LeadHubLoginAccess');
//   return user ? JSON.parse(user) as UserInfo : null;
// };
// export const getUserInfo = () => {
//   const user = Cookies.get('LeadHubLoginAccess');
//   // console.log(user);
//   return user ? JSON.parse(user) : null;
// };

export const getUserInfo = () => {
  const user = Cookies.get('LeadHubLoginAccess');
  if (!user) {
    // console.log('LeadHubLoginAccess cookie not found');
    return null;
  }
  try {
    return JSON.parse(user);
  } catch (error) {
    console.error('Error parsing LeadHubLoginAccess cookie:', error);
    return null;
  }
};


// Check if user is authenticated
export const isAuthenticated = (): boolean => {
  const user = getUserInfo();
  return !!(user?.id && user?.access_token);
};

// Logout function with API call and session cleanup
export const logout = async (idlelogout: string = "0"): Promise<void> => {
  console.log(idlelogout);
  const user = getUserInfo();
    // console.log(user);
  if (user?.id && user?.access_token && user?.type) {
    try {
     
    const response=  await axios.post("/api/User/userLogout", {
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
        multiLoginVal: user.multi_login_status,
        idlelogoutVal:idlelogout
      });
       console.log(response);
    } catch (error) {
      console.error('Logout API error:', error);
      // Continue with logout even if API call fails
    }
  }

  // Clear cookies
  Cookies.remove('accessToken');
  Cookies.remove('LeadHubLoginAccess');

  // // Redirect to login page
  window.location.href = '/login';
};
