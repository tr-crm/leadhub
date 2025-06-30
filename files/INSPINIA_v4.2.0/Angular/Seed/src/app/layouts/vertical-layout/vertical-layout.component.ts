import {Component, OnDestroy, OnInit} from '@angular/core';
import {RouterOutlet} from '@angular/router';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {SidenavComponent} from '@layouts/components/sidenav/sidenav.component';
import {TopbarComponent} from '@layouts/components/topbar/topbar.component';
import {FooterComponent} from '@layouts/components/footer/footer.component';
import {debounceTime, fromEvent, Subscription} from 'rxjs';

@Component({
    selector: 'app-vertical-layout',
    imports: [RouterOutlet, SidenavComponent, TopbarComponent, FooterComponent],
    templateUrl: './vertical-layout.component.html',
    styles: ``
})
export class VerticalLayoutComponent implements OnInit, OnDestroy {
    constructor(public layout: LayoutStoreService) {
    }

    resizeSubscription!: Subscription;

    ngOnInit() {
        this.onResize();

        this.resizeSubscription = fromEvent(window, 'resize')
            .pipe(debounceTime(200))
            .subscribe(() => this.onResize());
    }

    onResize(): void {
        const width = window.innerWidth;
        const size = this.layout.sidenavSize;

        if (width <= 767.98) {
            this.layout.setSidenavSize('offcanvas', false);
        } else if (width <= 1140 && !['offcanvas'].includes(size)) {
            this.layout.setSidenavSize(size === 'on-hover' ? 'condensed' : 'condensed', false);
        } else {
            this.layout.setSidenavSize(size);
        }
    }

    ngOnDestroy(): void {
        this.resizeSubscription?.unsubscribe();
    }
}
