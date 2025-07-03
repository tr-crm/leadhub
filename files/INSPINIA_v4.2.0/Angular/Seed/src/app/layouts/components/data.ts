import {MenuItemType} from '@/app/types/layout';

type UserDropdownItemType = {
    label?: string;
    icon?: string;
    url?: string;
    isDivider?: boolean;
    isHeader?: boolean;
    class?: string;
}

export const userDropdownItems: UserDropdownItemType[] = [
    {
        label: 'Welcome back!',
        isHeader: true
    },
    {
        label: 'Profile',
        icon: 'tablerUserCircle',
        url: 'pages-profile.html'
    },
    {
        label: 'Notifications',
        icon: 'tablerBellRinging',
        url: '#'
    },
    {
        label: 'Balance: $985.25',
        icon: 'tablerCreditCard',
        url: '#',
    },
    {
        label: 'Account Settings',
        icon: 'tablerSettings2',
        url: '#'
    },
    {
        label: 'Support Center',
        icon: 'tablerHeadset',
        url: '#'
    },
    {
        isDivider: true
    },
    {
        label: 'Lock Screen',
        icon: 'tablerLock',
        url: 'auth-lock-screen.html'
    },
    {
        label: 'Log Out',
        icon: 'tablerLogout2',
        url: '#',
        class: 'text-danger fw-semibold'
    }
];

export const menuItems: MenuItemType[] = [
    {label: 'Menu', isTitle: true},
    {
        label: 'Dashboard',
        icon: 'tablerLayoutDashboard',
        url: '/dashboard'
    },
    {
        label: 'Landing Page',
        icon: 'tablerStackFront',
        url: '/landing',
    },

    {label: 'Custom Pages', isTitle: true},
    {
        label: 'Authentication',
        icon: 'tablerLock',
        isCollapsed: true,
        children: [
            {
                label: 'Version 1',
                isCollapsed: true,
                children: [
                    {label: 'Sign In', url: '/auth/sign-in'},
                    {label: 'Sign Up', url: '/auth/sign-up'},
                    {label: 'Reset Password', url: '/auth/reset-pw'},
                    {label: 'New Password', url: '/auth/new-pw'},
                    {label: 'Two Factor', url: '/auth/two-factor'},
                    {label: 'Lock Screen', url: '/auth/lock-screen'},
                    {label: 'Success Mail', url: '/auth/success-mail'},
                    {label: 'Login with PIN', url: '/auth/login-pin'},
                    {label: 'Delete Account', url: '/auth/delete-account'},
                ]
            },
            {
                label: 'Version 2',
                isCollapsed: true,
                children: [
                    {label: 'Sign In', url: '/auth-2/sign-in'},
                    {label: 'Sign Up', url: '/auth-2/sign-up'},
                    {label: 'Reset Password', url: '/auth-2/reset-pw'},
                    {label: 'New Password', url: '/auth-2/new-pw'},
                    {label: 'Two Factor', url: '/auth-2/two-factor'},
                    {label: 'Lock Screen', url: '/auth-2/lock-screen'},
                    {label: 'Success Mail', url: '/auth-2/success-mail'},
                    {label: 'Login with PIN', url: '/auth-2/login-pin'},
                    {label: 'Delete Account', url: '/auth-2/delete-account'},
                ]
            },
            {
                label: 'Version 3',
                isCollapsed: true,
                children: [
                    {label: 'Sign In', url: '/auth-3/sign-in'},
                    {label: 'Sign Up', url: '/auth-3/sign-up'},
                    {label: 'Reset Password', url: '/auth-3/reset-pw'},
                    {label: 'New Password', url: '/auth-3/new-pw'},
                    {label: 'Two Factor', url: '/auth-3/two-factor'},
                    {label: 'Lock Screen', url: '/auth-3/lock-screen'},
                    {label: 'Success Mail', url: '/auth-3/success-mail'},
                    {label: 'Login with PIN', url: '/auth-3/login-pin'},
                    {label: 'Delete Account', url: '/auth-3/delete-account'},
                ]
            },

        ]
    },
    {
        label: 'Error Pages',
        icon: 'tablerAlertHexagon',
        isCollapsed: true,
        children: [
            {label: '400', url: '/error/400'},
            {label: '401', url: '/error/401'},
            {label: '403', url: '/error/403'},
            {label: '404', url: '/error/404'},
            {label: '408', url: '/error/408'},
            {label: '500', url: '/error/500'},
            {label: 'Maintenance', url: '/maintenance'},
        ]
    },
    {label: 'Layouts', isTitle: true},
    {
        label: 'Layout Options',
        icon: 'tablerLayout',
        isCollapsed: true,
        children: [
            {label: 'Scrollable', url: '/layouts/scrollable'},
            {label: 'Compact', url: '/layouts/compact'},
            {label: 'Boxed', url: '/layouts/boxed'},
            {label: 'Horizontal', url: '/layouts/horizontal'},
            {label: 'Preloader', url: '/layouts/preloader'},
        ]
    },
    {
        label: 'Sidebars',
        icon: 'tablerLayoutSidebar',
        isCollapsed: true,
        children: [
            {label: 'Light Menu', url: '/layouts/sidebars/light'},
            {label: 'Gradient Menu', url: '/layouts/sidebars/gradient'},
            {label: 'Gray Menu', url: '/layouts/sidebars/gray'},
            {label: 'Image Menu', url: '/layouts/sidebars/image'},
            {label: 'Compact Menu', url: '/layouts/sidebars/compact'},
            {label: 'Icon View Menu', url: '/layouts/sidebars/icon-view'},
            {label: 'On Hover Menu', url: '/layouts/sidebars/on-hover'},
            {label: 'On Hover Active', url: '/layouts/sidebars/on-hover-active'},
            {label: 'Offcanvas Menu', url: '/layouts/sidebars/offcanvas'},
            {label: 'No Icons with Lines', url: '/layouts/sidebars/no-icons-with-lines'},
            {label: 'Sidebar with Lines', url: '/layouts/sidebars/with-lines'},
        ]
    },
    {
        label: 'Topbars',
        icon: 'tablerLayoutNavbar',
        isCollapsed: true,
        children: [
            {label: 'Dark Topbar', url: '/layouts/topbars/dark'},
            {label: 'Gray Topbar', url: '/layouts/topbars/gray'},
            {label: 'Gradient Topbar', url: '/layouts/topbars/gradient'},
            {label: 'Topbar with Sub Items', url: '/layouts/topbars/with-sub-items'},
            {label: 'Topbar with Tools', url: '/layouts/topbars/with-tools'},
        ]
    },
    {label: 'Menu Items', isTitle: true},
    {
        label: 'Menu Levels',
        icon: 'tablerSitemap',
        isCollapsed: true,
        children: [
            {
                label: 'Second Level',
                isCollapsed: true,
                children: [
                    {label: 'Item 2.1', url: '#'},
                    {label: 'Item 2.2', url: '#'}
                ]
            },
            {
                label: 'Third Level',
                isCollapsed: true,
                children: [
                    {label: 'Item 1', url: '#'},
                    {
                        label: 'Item 2',
                        isCollapsed: true,
                        children: [
                            {label: 'Item 3.1', url: '#'},
                            {label: 'Item 3.2', url: '#'}
                        ]
                    }
                ]
            }
        ]
    },
    {
        label: 'Disabled Menu',
        icon: 'tablerBan',
        url: '#!',
        isDisabled: true
    },
    {
        label: 'Special Menu',
        icon: 'tablerStar',
        url: '#!',
        isSpecial: true
    }
];

export const horizontalMenuItems: MenuItemType[] = [
    {
        label: 'Dashboard',
        icon: 'tablerLayoutDashboard',
        url: '/dashboard'
    },
    {
        label: 'Pages',
        icon: 'tablerFiles',
        children: [
            {
                label: 'Authentication 1',
                icon: 'tablerShieldLock',
                children: [
                    {label: 'Sign In', url: '/auth/sign-in'},
                    {label: 'Sign Up', url: '/auth/sign-up'},
                    {label: 'Reset Password', url: '/auth/reset-pw'},
                    {label: 'New Password', url: '/auth/new-pw'},
                    {label: 'Two Factor', url: '/auth/two-factor'},
                    {label: 'Lock Screen', url: '/auth/lock-screen'},
                    {label: 'Success Mail', url: '/auth/success-mail'},
                    {label: 'Login with PIN', url: '/auth/login-pin'},
                    {label: 'Delete Account', url: '/auth/delete-account'},
                ]
            },
            {
                label: 'Authentication 2',
                icon: 'tablerUserHexagon',
                children: [
                    {label: 'Sign In', url: '/auth-2/sign-in'},
                    {label: 'Sign Up', url: '/auth-2/sign-up'},
                    {label: 'Reset Password', url: '/auth-2/reset-pw'},
                    {label: 'New Password', url: '/auth-2/new-pw'},
                    {label: 'Two Factor', url: '/auth-2/two-factor'},
                    {label: 'Lock Screen', url: '/auth-2/lock-screen'},
                    {label: 'Success Mail', url: '/auth-2/success-mail'},
                    {label: 'Login with PIN', url: '/auth-2/login-pin'},
                    {label: 'Delete Account', url: '/auth-2/delete-account'},
                ]
            },
            {
                label: 'Authentication 3',
                icon: 'tablerLockAccess',
                children: [
                    {label: 'Sign In', url: '/auth-3/sign-in'},
                    {label: 'Sign Up', url: '/auth-3/sign-up'},
                    {label: 'Reset Password', url: '/auth-3/reset-pw'},
                    {label: 'New Password', url: '/auth-3/new-pw'},
                    {label: 'Two Factor', url: '/auth-3/two-factor'},
                    {label: 'Lock Screen', url: '/auth-3/lock-screen'},
                    {label: 'Success Mail', url: '/auth-3/success-mail'},
                    {label: 'Login with PIN', url: '/auth-3/login-pin'},
                    {label: 'Delete Account', url: '/auth-3/delete-account'},
                ]
            },
            {
                label: 'Error Pages',
                icon: 'tablerAlertHexagon',
                children: [
                    {label: '400', url: '/error/400'},
                    {label: '401', url: '/error/401'},
                    {label: '403', url: '/error/403'},
                    {label: '404', url: '/error/404'},
                    {label: '408', url: '/error/408'},
                    {label: '500', url: '/error/500'},
                    {label: 'Maintenance', url: '/maintenance'},
                ]
            }
        ]
    },
    {
        label: 'Layouts',
        icon: 'tablerLayout',
        children: [
            {
                label: 'Layout Options',
                icon: 'tablerLayout',
                children: [
                    {label: 'Scrollable', url: '/layouts/scrollable'},
                    {label: 'Compact', url: '/layouts/compact'},
                    {label: 'Boxed', url: '/layouts/boxed'},
                    {label: 'Horizontal', url: '/layouts/horizontal'},
                    {label: 'Preloader', url: '/layouts/preloader'},
                ]
            },
            {
                label: 'Sidebars',
                icon: 'tablerLayoutSidebar',
                children: [
                    {label: 'Light Menu', url: '/layouts/sidebars/light'},
                    {label: 'Gradient Menu', url: '/layouts/sidebars/gradient'},
                    {label: 'Gray Menu', url: '/layouts/sidebars/gray'},
                    {label: 'Image Menu', url: '/layouts/sidebars/image'},
                    {label: 'Compact Menu', url: '/layouts/sidebars/compact'},
                    {label: 'Icon View Menu', url: '/layouts/sidebars/icon-view'},
                    {label: 'On Hover Menu', url: '/layouts/sidebars/on-hover'},
                    {label: 'On Hover Active', url: '/layouts/sidebars/on-hover-active'},
                    {label: 'Offcanvas Menu', url: '/layouts/sidebars/offcanvas'},
                    {label: 'No Icons with Lines', url: '/layouts/sidebars/no-icons-with-lines'},
                    {label: 'Sidebar with Lines', url: '/layouts/sidebars/with-lines'},
                ]
            },
            {
                label: 'Topbars',
                icon: 'tablerLayoutNavbar',
                children: [
                    {label: 'Dark Topbar', url: '/layouts/topbars/dark'},
                    {label: 'Gray Topbar', url: '/layouts/topbars/gray'},
                    {label: 'Gradient Topbar', url: '/layouts/topbars/gradient'},
                    {label: 'Topbar with Sub Items', url: '/layouts/topbars/with-sub-items'},
                    {label: 'Topbar with Tools', url: '/layouts/topbars/with-tools'},
                ]
            }
        ]
    },
    {
        label: 'Landing',
        icon: 'tablerRocket',
        url: '/landing'
    }
];
