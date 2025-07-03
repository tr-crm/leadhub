import {Routes} from '@angular/router';
import {ScrollableComponent} from '@/app/pages/layouts/scrollable/scrollable.component';
import {CompactComponent} from '@/app/pages/layouts/compact/compact.component';
import {BoxedComponent} from '@/app/pages/layouts/boxed/boxed.component';
import {HorizontalComponent} from '@/app/pages/layouts/horizontal/horizontal.component';
import {PreloaderComponent} from '@/app/pages/layouts/preloader/preloader.component';

export const LAYOUT_ROUTES: Routes = [
    {
        path: 'layouts/scrollable',
        component: ScrollableComponent,
        data: {title: "Scrollable"},
    },
    {
        path: 'layouts/compact',
        component: CompactComponent,
        data: {title: "Compact"},
    },
    {
        path: 'layouts/boxed',
        component: BoxedComponent,
        data: {title: "Boxed"},
    },
    {
        path: 'layouts/horizontal',
        component: HorizontalComponent,
        data: {title: "Horizontal"},
    },
    {
        path: 'layouts/preloader',
        component: PreloaderComponent,
        data: {title: "Preloader"},
    },
    {
        path: '',
        loadChildren: () => import('./sidebars/sidebars.routes').then((mod) => mod.SIDEBARS_ROUTES)
    },
    {
        path: '',
        loadChildren: () => import('./topbars/topbars.routes').then((mod) => mod.TOPBARS_ROUTES)
    },
];
