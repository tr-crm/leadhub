import {type MenuItemType} from "@/types/layout";
import {type IconType} from "react-icons";
import { TbSearch } from 'react-icons/tb';
import {
    // TbAlertHexagon,
    // TbBoxAlignTop,
    TbFiles,
    // TbLayout,
    TbLayoutDashboard,
    // TbLayoutSidebar,
    TbLock,
    // TbLockAccess,
    TbLogout2,
    TbRocket,
    // TbShieldLock,
    TbUserCircle,
    // TbUserHexagon,
    //  TbSettings2,
     TbGraphFilled,
     TbSettingsBolt,
     TbSubtask,
     TbFileImport
    //  TbSettingsAutomation,
} from "react-icons/tb";

type UserDropdownItemType = {
    label?: string;
    icon?: IconType;
    url?: string;
    isDivider?: boolean;
    isHeader?: boolean;
    class?: string;
     isLogout?: boolean;
}

export const userDropdownItems: UserDropdownItemType[] = [
    {
        label: 'Welcome back!',
        isHeader: true
    },
    {
        label: 'Profile',
        icon: TbUserCircle,
        url: 'pages-profile.html'
    },
    {
        label: 'Lock Screen',
        icon: TbLock,
        url: 'auth-lock-screen.html'
    },
    {
        isDivider: true
    },
    
    {
        label: 'Log Out',
        icon: TbLogout2,
        url: '#',
        class: 'text-danger fw-semibold',
        isLogout: true,
    }
];

export const menuItems: MenuItemType[] = [
  {
    key: "dashboard",
    label: "Dashboard",
    icon: TbLayoutDashboard,
    url: "/dashboard",
    minLevel: [1, 2, 3, 4, 5,8,9],
  },
  {
    key: "settings",
    label: "Settings",
    icon: TbSettingsBolt,
    url: "/settings",
    minLevel: [1, 2, 3],
  },
  {
    key: "user",
    label: "User",
    icon: TbUserCircle,
    minLevel: [1, 2, 3, 8],
    children: [
      {
        key: "user-list",
        label: "List",
        url: "/user/list",
        minLevel: [1, 2, 3, 8],
      },
      {
        key: "user-create",
        label: "Create",
        url: "/user/create",
        minLevel: [1, 2, 3, 8],
      },
      {
        key: "user-login-history",
        label: "Login History",
        url: "/user/history",
        minLevel: [1, 2, 3,4,5, 8],
      },
      
    ],
  },

  {
    key: "search",
    label: "search",
    icon: TbSearch,
    url: "/search",
    minLevel: [1, 2, 3, 4, 5],
  },
  {
    key: "leads",
    label: "Leads",
    icon: TbFiles,
    minLevel: [1, 2, 3, 4, 5],
    children: [
      {
        key: "leads-webhookfreshleadlist",
        label: "Webhook List",
        url: "/leads/webhookleadlist",
        minLevel: [1, 2, 3, 4, 5],
      },
      {
        key: "import-list",
        label: "Import List",
        url: "/leads/import/list",
        minLevel: [1, 2, 3, 4, 5],
      },
      {
        key: "leads-list",
        label: "Lead List",
        url: "/leads/list",
        minLevel: [1, 2, 3, 4, 5],
      },
      
      {
        key: "leads-followuplist",
        label: "Lead FollowUp List",
        url: "/leads/followup",
        minLevel: [1, 2, 3, 4, 5],
      },
      {
        key: "leads-partialwalkin",
        label: "Partial Walkin List",
        url: "/leads/partialwalkin",
        minLevel: [1, 2, 3, 4, 5],
      },
      {
        key: "import-create",
        label: "Import Create",
        url: "/leads/import/create",
        minLevel: [1, 2, 3],
      },
      {
        key: "leads-create",
        label: "Lead Create",
        url: "/leads/create",
        minLevel: [1, 2, 3, 4, 5],
      },
      
    ],
  },
  {
        key: 'Jobs',
        label: 'Productivity',
        icon: TbSubtask,
        minLevel: [1,2,3,4,5,8, 9],
        children: [
            {key: 'Job-list', label: 'Daily Job List', url: '/jobs/list'}
           
        ]
    },
  {
    key: "dmimport",
    label: "DM Import",
    icon: TbFileImport,
    minLevel: [1, 2, 8, 9],
    children: [
      {
        key: "dm-import-list",
        label: "Import List",
        url: "/import/list",
        minLevel: [1, 2, 8, 9],
      },
      {
        key: "dm-import-create",
        label: "Excel Import",
        url: "/import/create",
        minLevel: [1, 2, 8, 9],
      },
      {
        key: "dm-import-singlecreate",
        label: "DM Lead Create",
        url: "/import/singlecreate",
        minLevel: [1, 2, 8, 9],
      },
    ],
  },
  {
    key: "Reports",
    label: "Reports",
    icon: TbGraphFilled,
    minLevel: [1, 2, 3, 4, 5,8,9],
    children: [
      {
        key: "Daily Report",
        label: "Daily Lead Report",
        url: "/report/dailyreport",
        minLevel: [1, 2, 3, 4, 5],
      },
      {
        key: "Daily Source Wise Lead Report",
        label: "Daily Source Wise Lead Report",
        url: "/report/dailysoucrewiseleadreport",
        minLevel: [1, 2, 3, 4, 5],
      },
      {
        key: "Region Wise Lead Report",
        label: "Region Wise Lead Report",
        url: "/report/region",
        minLevel: [1, 2, 3],
      },
      {
        key: "Branch Wise Report",
        label: "Branch Wise Report",
        url: "/reports/branch",
        minLevel: [5],
      },
      {
        key: "Daily DM Lead Report",
        label: "Daily DM Lead Report",
        url: "/report/dailyleaddmreport",
        minLevel: [1,2,8,9],
      },
      {
        key: "Executive Wise Lead Report",
        label: "Executive Wise Lead Report",
        url: "report/executivewiseleadreport",
        minLevel: [1,2,3],
      },
      {
        key: "Monthly Wise Report",
        label: "Monthly Wise Report",
        url: "/reports/monthlywisereport",
        minLevel: [1, 2, 3, 4, 5],
      },
       {
        key: "Monthly Source Wise Report",
        label: "Monthly Source Wise Report",
        url: "/reports/monthlysourcewisereport",
        minLevel: [1, 2, 3, 4, 5],
      },
      
      

      
    ],
  },
];




export const horizontalMenuItems: MenuItemType[] = [
    {
        key: 'dashboard',
        label: 'Dashboard',
        icon: TbLayoutDashboard,
        url: '/dashboard',
      minLevel: [1, 2],

    },
   
    
    {
        key: 'landing',
        label: 'Landing',
        icon: TbRocket,
        url: '/landing'
        ,
       minLevel: [1, 2],
    }
];


