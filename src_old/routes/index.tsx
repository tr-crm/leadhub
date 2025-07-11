import {lazy} from "react";
import {Navigate, type RouteObject} from "react-router";
import MainLayout from "@/layouts/MainLayout.tsx";



const Login = lazy(() => import('@/views/login'));
const Dashboard = lazy(() => import('@/views/dashboards/dashboard'));
const UserCreate = lazy(() => import('@/views/user/create'));
const UserList = lazy(() => import('@/views/user/list'));
 const UserProfile = lazy(() => import('@/views/user/profile'));
 const UserLognHistory = lazy(() => import('@/views/user/history'));
const WebHookLeadsList = lazy(() => import('@/views/leads/webhook'));
const LeadsCreate = lazy(() => import('@/views/leads/create'));
const LeadsList = lazy(() => import('@/views/leads/list'));
const LeadsFollowupList = lazy(() => import('@/views/leads/followup'));
const PartialWalkin = lazy(() => import('@/views/leads/partialwalkin'));
const ImportCreate = lazy(() => import('@/views/leads/import/create'));
const ImportList = lazy(() => import('@/views/leads/import/list'));
const DmImportCreate = lazy(() => import('@/views/import/create'));
const DmLeadCreate = lazy(() => import('@/views/import/singlecreate'));
const DmImportList = lazy(() => import('@/views/import/list'));
const DailyReport = lazy(() => import('@/views/reports/dailyreport'));
const MonthlyWiseReport = lazy(() => import('@/views/reports/monthlywisereport'));
const MonthlySourceWiseReport = lazy(() => import('@/views/reports/monthlysourcewisereport'));
const DailySoucreWiseLeadReport = lazy(() => import('@/views/reports/dailysoucrewisereport'));
const RegionWiseLeadReport = lazy(() => import('@/views/reports/region'));
const DailyDMLeadReport = lazy(() => import('@/views/reports/dailyleaddmreport'));
const ExecutivewiseLeadReport = lazy(() => import('@/views/reports/executivewiseleadreport'));
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
    },
   
 {
        path: '/user/profile', 
        element: <UserProfile/>,
        handle: {
           title: 'User Profile',
        }
    },
     {
        path: '/user/history', 
        element: <UserLognHistory/>,
        handle: {
           title: 'Login History',
        }
    },
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
    },
    { 
        path: '/leads/followup',
        element: <LeadsFollowupList/>,
        handle: {
           title: 'Lead FollowUp List',
        }
    },
    { 
        path: '/leads/partialwalkin',
        element: <PartialWalkin/>,
        handle: {
           title: 'Partial Walkin List',
        }
    },
    { 
        path: '/leads/import/create',
        element: <ImportCreate/>,
        handle: {
           title: 'Excel Import Create',
        }
    },
    { 
        path: '/leads/import/list',
        element: <ImportList/>,
        handle: {
           title: 'Excel Import List',
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
        path: '/reports/monthlyWisereport',
        element: <MonthlyWiseReport/>,
         handle: {
           title: 'Monthly Wise Report',
        }
    },
    {
        path: '/reports/monthlysourcewisereport',
        element: <MonthlySourceWiseReport/>,
         handle: {
           title: 'Monthly Wise Report',
        }
    },
    
    {
        path: '/report/dailysoucrewiseleadreport',
        element: <DailySoucreWiseLeadReport/>,
         handle: {
           title: 'Daily Source Wise Lead Report',
        }
    },
    {
        path: '/report/region',
        element: <RegionWiseLeadReport/>,
         handle: {
           title: 'Region Wise Lead Report',
        }
    },{
        path: '/report/dailyleaddmreport',
        element: <DailyDMLeadReport/>,
         handle: {
           title: 'Daily DM Lead Report',
        }
    },{
        path: '/report/executivewiseleadreport',
        element: <ExecutivewiseLeadReport/>,
         handle: {
           title: 'Executive Wise Lead Report',
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
export const importRoutes: RouteObject[] = [
     {
        path: '/import/list', 
        element: <DmImportList/>,
        handle: {
           title: 'DM Excel Import List',
        }
    },
    {
        path: '/import/create',
        element: <DmImportCreate/>,
         handle: {
           title: 'DM Excel Import Create',
        }
    },
    {
        path: '/import/singlecreate',
        element: <DmLeadCreate/>,
         handle: {
           title: 'DM Lead Create',
        }
    }
   
]
export const dailyJobsRoutes: RouteObject[] = [
    {
        path: '/jobs/list', 
        element: <DailyJobList/>,
        handle: {
           title: 'Daily Job List',
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
            ...userRoutes,
            ...leadsRoutes,
            ...reportRoutes,
            ...settingsRoutes,
            ...importRoutes,
            ...dailyJobsRoutes
            
        ],
    },
];
export const otherRoutes: RouteObject[] = [...loginRoutes, ...userRoutes, ...leadsRoutes,...reportRoutes,...settingsRoutes,...importRoutes,...dailyJobsRoutes];

export const routes: RouteObject[] = [...appRoutes, ...otherRoutes];