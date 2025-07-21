// src/components/AppWrapper.tsx
import { type ChildrenType } from '@/types';
import { LayoutProvider } from '@/context/useLayoutContext';
import AutoLogoutProvider from './AutoLogoutProvider';
import { useLocation } from 'react-router-dom';
import { isAuthenticated, getUserInfo } from '@/utils/auth';


const AppWrapper = ({ children }: ChildrenType) => {
  const location = useLocation();
  const isLoginPage = location.pathname === '/login';

  const user = isAuthenticated() ? getUserInfo() : null;
 
   const idle_time = user?.idle_time ?? 2;
  const shouldUseAutoLogout = user?.type === '5';
  // console.log(shouldUseAutoLogout);

  const content = <LayoutProvider>{children}</LayoutProvider>;

  return isLoginPage ? content : (
    shouldUseAutoLogout ? (
      <AutoLogoutProvider timeoutMinutes={idle_time} countdownSeconds={5}>
        {content}
      </AutoLogoutProvider>
    ) : content
  );
};

export default AppWrapper;



// import { type ChildrenType } from '@/types';
// import { LayoutProvider } from '@/context/useLayoutContext';
// import AutoLogoutProvider from './AutoLogoutProvider';

// const AppWrapper = ({ children }: ChildrenType) => {
//   return (
//     <AutoLogoutProvider timeoutMinutes={1} countdownSeconds={30}>
//       <LayoutProvider>{children}</LayoutProvider>
//     </AutoLogoutProvider>
//   );
// };

// export default AppWrapper;







// import {type ChildrenType} from "@/types";
// import {LayoutProvider} from "@/context/useLayoutContext";

// const AppWrapper = ({children}: ChildrenType) => {
//     return (
//         <LayoutProvider>
//             {children}
//         </LayoutProvider>
//     )
// }

// export default AppWrapper;


// import { useEffect, useState } from 'react';
// import { type ChildrenType } from "@/types";
// import { LayoutProvider } from "@/context/useLayoutContext";
// import { isAuthenticated, logout } from '@/utils/auth';
// import LogoutOverlay from '@/components/LogoutOverlay';
// import { useLocation } from 'react-router-dom';

// const AppWrapper = ({ children }: ChildrenType) => {
//   const [showLogoutOverlay, setShowLogoutOverlay] = useState(false);
//   const location = useLocation();

//   useEffect(() => {
//     const isLoginPage = location.pathname === '/login';
//     if (!isAuthenticated() && !isLoginPage) {
//       setShowLogoutOverlay(true);
//     }
//   }, [location]
// );

//   return (
//     <LayoutProvider>
//       {showLogoutOverlay ? (
//         <LogoutOverlay
//           duration={5}
//           onComplete={() => {
//             logout();
//           }}
//         />
//       ) : (
//         children
//       )}
//     </LayoutProvider>
    
//   );
// };

// export default AppWrapper;
