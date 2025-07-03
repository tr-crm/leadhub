import { Routes } from '@angular/router';

export const PAGES_ROUTES: Routes = [
    {
        path: '',
        loadChildren: () => import('./dashboards/dashboards.routes').then((mod) => mod.DASHBOARDS_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./layouts/layout.routes').then((mod) => mod.LAYOUT_ROUTES)
    },
];
