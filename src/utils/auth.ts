import Cookies from 'js-cookie';

export const getAuthToken = () => Cookies.get('accessToken');

export const getUserInfo = () => {
  const user = Cookies.get('LeadHubLoginAccess');
  return user ? JSON.parse(user) : null;
};

export const logout = () => {
  Cookies.remove('accessToken');
  Cookies.remove('LeadHubLoginAccess');
};
