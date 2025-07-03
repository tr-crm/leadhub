import { Routes } from '@angular/router';

export const AUTH_ROUTES: Routes = [
    {
        path: '',
        loadChildren: () => import('./version1/version1.route').then((mod) => mod.VERSION1_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./version2/version2.route').then((mod) => mod.VERSION2_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./version3/version3.route').then((mod) => mod.VERSION3_ROUTES)
    },

];
