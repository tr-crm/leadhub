import {Component, OnDestroy, OnInit} from '@angular/core';
import {RouterOutlet} from '@angular/router';

import {TopbarComponent} from '@layouts/components/topbar/topbar.component';
import {FooterComponent} from '@layouts/components/footer/footer.component';
import {NavbarComponent} from '@layouts/components/navbar/navbar.component';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {debounceTime, fromEvent, Subscription} from 'rxjs';
import {SidenavComponent} from '@layouts/components/sidenav/sidenav.component';
import {CommonModule} from '@angular/common';

@Component({
    selector: 'app-horizontal-layout',
    imports: [
        FooterComponent,
        RouterOutlet,
        TopbarComponent,
        NavbarComponent,
        SidenavComponent,
        CommonModule
    ],
    templateUrl: './horizontal-layout.component.html'
})
export class HorizontalLayoutComponent implements OnInit, OnDestroy {
    constructor(public layout: LayoutStoreService) {
    }

    resizeSubscription!: Subscription;

    isMobileSidebarVisible = false;

    ngOnInit() {
        this.onResize();

        this.resizeSubscription = fromEvent(window, 'resize')
            .pipe(debounceTime(200))
            .subscribe(() => this.onResize());
    }

    onResize(): void {
        const width = window.innerWidth;
        if (width < 992) {
            this.isMobileSidebarVisible = true
            this.layout.setSidenavSize('offcanvas');
        } else {
            this.isMobileSidebarVisible = false
            this.layout.setSidenavSize('default');
        }
    }

    ngOnDestroy(): void {
        this.resizeSubscription?.unsubscribe();
    }
}
