import {lazy} from "react";
import {Navigate, type RouteObject} from "react-router";
import MainLayout from "@/layouts/MainLayout.tsx";



const Login = lazy(() => import('@/views/login'));
const Dashboard = lazy(() => import('@/views/dashboards/dashboard'));
const UserCreate = lazy(() => import('@/views/user/create'));
const UserList = lazy(() => import('@/views/user/list'));
const WebHookLeadsList = lazy(() => import('@/views/leads/webhook'));
const LeadsCreate = lazy(() => import('@/views/leads/create'));
const LeadsList = lazy(() => import('@/views/leads/list'));
const DailyReport = lazy(() => import('@/views/reports/dailyreport'));
const DailySoucreWiseLeadReport = lazy(() => import('@/views/reports/dailysoucrewisereport'));
const Settings = lazy(() => import('@/views/settings'));
const DailyJobList = lazy(() => import('@/views/jobs/list'));




export const loginRoutes: RouteObject[] = [

    { 
       path: '/login',
       element: <Login/>,
       handle: {
           title: 'Login',
        }
    },
   
]
export const dashboardRoutes: RouteObject[] = [
    {
        path: '/dashboard', 
        element: <Dashboard/>,
        handle: {
           title: 'Dashboard',
        }
    }
]
export const userRoutes: RouteObject[] = [
    {
        path: '/user/create',
        element: <UserCreate/>,
         handle: {
           title: 'User Create',
        }
    },
    {
        path: '/user/list', 
        element: <UserList/>,
        handle: {
           title: 'User List',
        }
    }
]
export const leadsRoutes: RouteObject[] = [
    { 
        path: '/leads/webhookleadlist',
        element: <WebHookLeadsList/>,
        handle: {
           title: 'Fresh Leads List',
        }
    },
    { 
        path: '/leads/create',
        element: <LeadsCreate/>,
        handle: {
           title: 'Leads Create',
        }
    },
    { 
        path: '/leads/list',
        element: <LeadsList/>,
        handle: {
           title: 'Leads List',
        }
    }
]
export const reportRoutes: RouteObject[] = [
    {
        path: '/report/dailyreport',
        element: <DailyReport/>,
         handle: {
           title: 'Daily Report',
        }
    },
    {
        path: '/report/dailysoucrewiseleadreport',
        element: <DailySoucreWiseLeadReport/>,
         handle: {
           title: 'Daily Source Wise Lead Report',
        }
    },
   
]
export const settingsRoutes: RouteObject[] = [
    {
        path: '/settings', 
        element: <Settings/>,
        handle: {
           title: 'Settings',
        }
    }
]


export const dailyJobsRoutes: RouteObject[] = [
    {
        path: '/jobs/list', 
        element: <DailyJobList/>,
        handle: {
           title: 'Jobs List',
        }
    }
]

export const appRoutes: RouteObject[] = [
    {
        element: <MainLayout/>,
        children: [
            {
                path: '/',
                element: <Navigate to="/login" replace/>
            },
            ...dashboardRoutes,
            ...dailyJobsRoutes,
            ...userRoutes,
            ...leadsRoutes,
            ...reportRoutes,
            ...settingsRoutes
            
        ],
    },
];
export const otherRoutes: RouteObject[] = [...loginRoutes, ...dailyJobsRoutes ,...userRoutes, ...leadsRoutes,...reportRoutes,...settingsRoutes];

export const routes: RouteObject[] = [...appRoutes, ...otherRoutes];