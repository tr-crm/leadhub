import {Routes} from '@angular/router';
import {MainLayoutComponent} from '@layouts/main-layout/main-layout.component';
import { LandingComponent } from './pages/landing/landing.component';

export const routes: Routes = [
    {
        path: '',
        redirectTo: 'dashboard',
        pathMatch: 'full',
    },
    {
        path: '',
        component: MainLayoutComponent,
        loadChildren: () => import('./pages/pages.route').then((mod) => mod.PAGES_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./pages/auth/auth.route').then((mod) => mod.AUTH_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./pages/error/error.route').then((mod) => mod.ERROR_PAGES_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./pages/other-pages/other-pages.route').then((mod) => mod.OTHER_PAGES_ROUTES)
    },
    {
        path: 'landing',
        component: LandingComponent,
        data: { title: 'One page Landing' }
    },
];
