
import {type ChildrenType} from "@/types";
import {LayoutProvider} from "@/context/useLayoutContext";

const AppWrapper = ({children}: ChildrenType) => {
    return (
        <LayoutProvider>
            {children}
        </LayoutProvider>
    )
}

export default AppWrapper;

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
