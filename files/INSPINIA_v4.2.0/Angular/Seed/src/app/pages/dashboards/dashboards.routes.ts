import {Routes} from '@angular/router';
import {Dashboard2Component} from '@/app/pages/dashboards/dashboard-2/dashboard-2.component';

export const DASHBOARDS_ROUTES: Routes = [
    {
        path: 'dashboard',
        component: Dashboard2Component,
        data: {title: "Dashboard"},
    },
];
