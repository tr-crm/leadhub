import {Routes} from '@angular/router';
import {DarkTopbarComponent} from '@/app/pages/layouts/topbars/dark-topbar/dark-topbar.component';
import {GrayTopbarComponent} from '@/app/pages/layouts/topbars/gray-topbar/gray-topbar.component';
import {GradientTopbarComponent} from '@/app/pages/layouts/topbars/gradient-topbar/gradient-topbar.component';
import {
    WithSubItemsTopbarComponent
} from '@/app/pages/layouts/topbars/with-sub-items-topbar/with-sub-items-topbar.component';
import {WithToolsTopbarComponent} from '@/app/pages/layouts/topbars/with-tools-topbar/with-tools-topbar.component';

export const TOPBARS_ROUTES: Routes = [
    {
        path: 'layouts/topbars/dark',
        component: DarkTopbarComponent,
        data: {title: "Dark Topbar"},
    },
    {
        path: 'layouts/topbars/gray',
        component: GrayTopbarComponent,
        data: {title: "Gray Topbar"},
    },
    {
        path: 'layouts/topbars/gradient',
        component: GradientTopbarComponent,
        data: {title: "Gradient Topbar"},
    },
    {
        path: 'layouts/topbars/with-sub-items',
        component: WithSubItemsTopbarComponent,
        data: {title: "With Sub Items Topbar"},
    },
    {
        path: 'layouts/topbars/with-tools',
        component: WithToolsTopbarComponent,
        data: {title: "With Tools Topbar"},
    },
];
