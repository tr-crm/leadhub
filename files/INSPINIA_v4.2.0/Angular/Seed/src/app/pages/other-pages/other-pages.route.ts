import { Routes } from '@angular/router';
import { MaintenanceComponent } from '../other-pages/maintenance/maintenance.component';


export const OTHER_PAGES_ROUTES: Routes = [
    {
        path: 'maintenance',
        component: MaintenanceComponent,
        data: { title: "Maintenance" },
    },

];
