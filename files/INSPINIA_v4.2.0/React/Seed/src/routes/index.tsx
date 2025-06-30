import {lazy} from "react";
import {Navigate, type RouteObject} from "react-router";
import MainLayout from "@/layouts/MainLayout.tsx";

const Dashboard = lazy(() => import('@/views/dashboards/dashboard'));
const Landing = lazy(() => import('@/views/landing'));

const Auth1SignIn = lazy(() => import('@/views/auth/auth-1/sign-in'));
const Auth1SignUp = lazy(() => import('@/views/auth/auth-1/sign-up'));
const Auth1ResetPassword = lazy(() => import('@/views/auth/auth-1/reset-password'));
const Auth1NewPassword = lazy(() => import('@/views/auth/auth-1/new-password'));
const Auth1TwoFactor = lazy(() => import('@/views/auth/auth-1/two-factor'));
const Auth1LockScreen = lazy(() => import('@/views/auth/auth-1/lock-screen'));
const Auth1SuccessMail = lazy(() => import('@/views/auth/auth-1/success-mail'));
const Auth1LoginPin = lazy(() => import('@/views/auth/auth-1/login-pin'));
const Auth1DeleteAccount = lazy(() => import('@/views/auth/auth-1/delete-account'));

const Auth2SignIn = lazy(() => import('@/views/auth/auth-2/sign-in'));
const Auth2SignUp = lazy(() => import('@/views/auth/auth-2/sign-up'));
const Auth2ResetPassword = lazy(() => import('@/views/auth/auth-2/reset-password'));
const Auth2NewPassword = lazy(() => import('@/views/auth/auth-2/new-password'));
const Auth2TwoFactor = lazy(() => import('@/views/auth/auth-2/two-factor'));
const Auth2LockScreen = lazy(() => import('@/views/auth/auth-2/lock-screen'));
const Auth2SuccessMail = lazy(() => import('@/views/auth/auth-2/success-mail'));
const Auth2LoginPin = lazy(() => import('@/views/auth/auth-2/login-pin'));
const Auth2DeleteAccount = lazy(() => import('@/views/auth/auth-2/delete-account'));

const Auth3SignIn = lazy(() => import('@/views/auth/auth-3/sign-in'));
const Auth3SignUp = lazy(() => import('@/views/auth/auth-3/sign-up'));
const Auth3ResetPassword = lazy(() => import('@/views/auth/auth-3/reset-password'));
const Auth3NewPassword = lazy(() => import('@/views/auth/auth-3/new-password'));
const Auth3TwoFactor = lazy(() => import('@/views/auth/auth-3/two-factor'));
const Auth3LockScreen = lazy(() => import('@/views/auth/auth-3/lock-screen'));
const Auth3SuccessMail = lazy(() => import('@/views/auth/auth-3/success-mail'));
const Auth3LoginPin = lazy(() => import('@/views/auth/auth-3/login-pin'));
const Auth3DeleteAccount = lazy(() => import('@/views/auth/auth-3/delete-account'));

const Error400 = lazy(() => import('@/views/error/400'));
const Error401 = lazy(() => import('@/views/error/401'));
const Error403 = lazy(() => import('@/views/error/403'));
const Error404 = lazy(() => import('@/views/error/404'));
const Error408 = lazy(() => import('@/views/error/408'));
const Error500 = lazy(() => import('@/views/error/500'));
const Maintenance = lazy(() => import('@/views/other/maintenance'));

const ScrollableLayout = lazy(() => import('@/views/layouts/scrollable'));
const CompactLayout = lazy(() => import('@/views/layouts/compact'));
const BoxedLayout = lazy(() => import('@/views/layouts/boxed'));
const HorizontalLayout = lazy(() => import('@/views/layouts/horizontal'));

const SidebarCompact = lazy(() => import('@/views/layouts/sidebars/compact'));
const SidebarIconView = lazy(() => import('@/views/layouts/sidebars/icon-view'));
const SidebarOnHover = lazy(() => import('@/views/layouts/sidebars/on-hover'));
const SidebarOnHoverActive = lazy(() => import('@/views/layouts/sidebars/on-hover-active'));
const SidebarOffcanvas = lazy(() => import('@/views/layouts/sidebars/offcanvas'));
const SidebarNoIconsLines = lazy(() => import('@/views/layouts/sidebars/no-icons-with-lines'));
const SidebarWithLines = lazy(() => import('@/views/layouts/sidebars/with-lines'));
const SidebarLight = lazy(() => import('@/views/layouts/sidebars/light'));
const SidebarGradient = lazy(() => import('@/views/layouts/sidebars/gradient'));
const SidebarGray = lazy(() => import('@/views/layouts/sidebars/gray'));
const SidebarImage = lazy(() => import('@/views/layouts/sidebars/image'));

const TopbarDark = lazy(() => import('@/views/layouts/topbars/dark'));
const TopbarGray = lazy(() => import('@/views/layouts/topbars/gray'));
const TopbarGradient = lazy(() => import('@/views/layouts/topbars/gradient'));
const TopbarWithSubItems = lazy(() => import('@/views/layouts/topbars/with-sub-items'));
const TopbarWithTools = lazy(() => import('@/views/layouts/topbars/with-tools'));


export const authRoutes: RouteObject[] = [
    {path: '/auth-1/sign-in', element: <Auth1SignIn/>},
    {path: '/auth-1/sign-up', element: <Auth1SignUp/>},
    {path: '/auth-1/reset-password', element: <Auth1ResetPassword/>},
    {path: '/auth-1/new-password', element: <Auth1NewPassword/>},
    {path: '/auth-1/two-factor', element: <Auth1TwoFactor/>},
    {path: '/auth-1/lock-screen', element: <Auth1LockScreen/>},
    {path: '/auth-1/success-mail', element: <Auth1SuccessMail/>},
    {path: '/auth-1/login-pin', element: <Auth1LoginPin/>},
    {path: '/auth-1/delete-account', element: <Auth1DeleteAccount/>},

    {path: '/auth-2/sign-in', element: <Auth2SignIn/>},
    {path: '/auth-2/sign-up', element: <Auth2SignUp/>},
    {path: '/auth-2/reset-password', element: <Auth2ResetPassword/>},
    {path: '/auth-2/new-password', element: <Auth2NewPassword/>},
    {path: '/auth-2/two-factor', element: <Auth2TwoFactor/>},
    {path: '/auth-2/lock-screen', element: <Auth2LockScreen/>},
    {path: '/auth-2/success-mail', element: <Auth2SuccessMail/>},
    {path: '/auth-2/login-pin', element: <Auth2LoginPin/>},
    {path: '/auth-2/delete-account', element: <Auth2DeleteAccount/>},

    {path: '/auth-3/sign-in', element: <Auth3SignIn/>},
    {path: '/auth-3/sign-up', element: <Auth3SignUp/>},
    {path: '/auth-3/reset-password', element: <Auth3ResetPassword/>},
    {path: '/auth-3/new-password', element: <Auth3NewPassword/>},
    {path: '/auth-3/two-factor', element: <Auth3TwoFactor/>},
    {path: '/auth-3/lock-screen', element: <Auth3LockScreen/>},
    {path: '/auth-3/success-mail', element: <Auth3SuccessMail/>},
    {path: '/auth-3/login-pin', element: <Auth3LoginPin/>},
    {path: '/auth-3/delete-account', element: <Auth3DeleteAccount/>},
]

export const errorRoutes: RouteObject[] = [
    {path: '/error/400', element: <Error400/>},
    {path: '/error/401', element: <Error401/>},
    {path: '/error/403', element: <Error403/>},
    {path: '/error/404', element: <Error404/>},
    {path: '/error/408', element: <Error408/>},
    {path: '/error/500', element: <Error500/>},
    {path: '/maintenance', element: <Maintenance/>},
]

export const dashboardRoutes: RouteObject[] = [
    {path: '/dashboard', element: <Dashboard/>},
]

export const landingRoute: RouteObject[] = [
    {path: '/landing', element: <Landing/>},
]

export const layoutRoutes: RouteObject[] = [
    {path: '/layouts/scrollable', element: <ScrollableLayout/>},
    {path: '/layouts/compact', element: <CompactLayout/>},
    {path: '/layouts/boxed', element: <BoxedLayout/>},
    {path: '/layouts/horizontal', element: <HorizontalLayout/>},

    {path: '/layouts/sidebars/compact', element: <SidebarCompact/>},
    {path: '/layouts/sidebars/icon-view', element: <SidebarIconView/>},
    {path: '/layouts/sidebars/on-hover', element: <SidebarOnHover/>},
    {path: '/layouts/sidebars/on-hover-active', element: <SidebarOnHoverActive/>},
    {path: '/layouts/sidebars/offcanvas', element: <SidebarOffcanvas/>},
    {path: '/layouts/sidebars/no-icons-with-lines', element: <SidebarNoIconsLines/>},
    {path: '/layouts/sidebars/with-lines', element: <SidebarWithLines/>},
    {path: '/layouts/sidebars/light', element: <SidebarLight/>},
    {path: '/layouts/sidebars/gradient', element: <SidebarGradient/>},
    {path: '/layouts/sidebars/gray', element: <SidebarGray/>},
    {path: '/layouts/sidebars/image', element: <SidebarImage/>},

    {path: '/layouts/topbars/dark', element: <TopbarDark/>},
    {path: '/layouts/topbars/gray', element: <TopbarGray/>},
    {path: '/layouts/topbars/gradient', element: <TopbarGradient/>},
    {path: '/layouts/topbars/with-sub-items', element: <TopbarWithSubItems/>},
    {path: '/layouts/topbars/with-tools', element: <TopbarWithTools/>},
]

export const appRoutes: RouteObject[] = [
    {
        element: <MainLayout/>,
        children: [
            {
                path: '/',
                element: <Navigate to="/dashboard" replace/>
            },
            ...dashboardRoutes,
            ...layoutRoutes
        ],
    },
];

export const otherRoutes: RouteObject[] = [...authRoutes, ...errorRoutes, ...landingRoute];

export const routes: RouteObject[] = [...appRoutes, ...otherRoutes];