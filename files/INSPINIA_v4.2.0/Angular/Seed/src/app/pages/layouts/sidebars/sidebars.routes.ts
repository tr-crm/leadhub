import {Routes} from '@angular/router';
import {LightMenuComponent} from '@/app/pages/layouts/sidebars/light-menu/light-menu.component';
import {GradientMenuComponent} from '@/app/pages/layouts/sidebars/gradient-menu/gradient-menu.component';
import {ImageMenuComponent} from '@/app/pages/layouts/sidebars/image-menu/image-menu.component';
import {GrayMenuComponent} from '@/app/pages/layouts/sidebars/gray-menu/gray-menu.component';
import {CompactMenuComponent} from '@/app/pages/layouts/sidebars/compact-menu/compact-menu.component';
import {OnHoverMenuComponent} from '@/app/pages/layouts/sidebars/on-hover-menu/on-hover-menu.component';
import {IconViewMenuComponent} from '@/app/pages/layouts/sidebars/icon-view-menu/icon-view-menu.component';
import {
    OnHoverActiveMenuComponent
} from '@/app/pages/layouts/sidebars/on-hover-active-menu/on-hover-active-menu.component';
import {OffcanvasMenuComponent} from '@/app/pages/layouts/sidebars/offcanvas-menu/offcanvas-menu.component';
import {
    NoIconsWithLinesMenuComponent
} from '@/app/pages/layouts/sidebars/no-icons-with-lines-menu/no-icons-with-lines-menu.component';
import {WithLinesMenuComponent} from '@/app/pages/layouts/sidebars/with-lines-menu/with-lines-menu.component';

export const SIDEBARS_ROUTES: Routes = [
    {
        path: 'layouts/sidebars/light',
        component: LightMenuComponent,
        data: {title: "Light Menu"},
    },
    {
        path: 'layouts/sidebars/gradient',
        component: GradientMenuComponent,
        data: {title: "Gradient Menu"},
    },
    {
        path: 'layouts/sidebars/gray',
        component: GrayMenuComponent,
        data: {title: "Gray Menu"},
    },
    {
        path: 'layouts/sidebars/image',
        component: ImageMenuComponent,
        data: {title: "Image Menu"},
    },
    {
        path: 'layouts/sidebars/compact',
        component: CompactMenuComponent,
        data: {title: "Compact Menu"},
    },
    {
        path: 'layouts/sidebars/icon-view',
        component: IconViewMenuComponent,
        data: {title: "Icon View Menu"},
    },
    {
        path: 'layouts/sidebars/on-hover',
        component: OnHoverMenuComponent,
        data: {title: "On Hover Menu"},
    },
    {
        path: 'layouts/sidebars/on-hover-active',
        component: OnHoverActiveMenuComponent,
        data: {title: "On Hover Active Menu"},
    },
    {
        path: 'layouts/sidebars/offcanvas',
        component: OffcanvasMenuComponent,
        data: {title: "Offcanvas Menu"},
    },
    {
        path: 'layouts/sidebars/no-icons-with-lines',
        component: NoIconsWithLinesMenuComponent,
        data: {title: "No Icons With Lines Menu"},
    },
    {
        path: 'layouts/sidebars/with-lines',
        component: WithLinesMenuComponent,
        data: {title: "With Lines Menu"},
    },
];
