import { Routes } from '@angular/router';
import { MaintenanceComponent } from '../other-pages/maintenance/maintenance.component';
import { Error400Component } from './error-400/error-400.component';
import { Error401Component } from './error-401/error-401.component';
import { Error403Component } from './error-403/error-403.component';
import { Error404Component } from './error-404/error-404.component';
import { Error408Component } from './error-408/error-408.component';
import { Error500Component } from './error-500/error-500.component';

export const ERROR_PAGES_ROUTES: Routes = [
    {
        path: 'error/400',
        component: Error400Component,
        data: { title: "Error 401" },
    },
    {
        path: 'error/401',
        component: Error401Component,
        data: { title: "Error 401" },
    },
    {
        path: 'error/403',
        component: Error403Component,
        data: { title: "Error 403" }
    },
    {
        path: 'error/404',
        component: Error404Component,
        data: { title: "Error 404" }
    },
    {
        path: 'error/408',
        component: Error408Component,
        data: { title: "Error 408" }
    },
    {
        path: 'error/500',
        component: Error500Component,
        data: { title: "Error 500" }
    },
];
