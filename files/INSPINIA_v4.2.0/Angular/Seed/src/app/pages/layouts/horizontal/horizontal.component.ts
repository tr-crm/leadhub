import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';
import {PageTitleComponent} from '@app/components/page-title.component';
import {NavigationEnd, Router} from '@angular/router';
import {filter} from 'rxjs';

@Component({
    selector: 'app-horizontal',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './horizontal.component.html',
})
export class HorizontalComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)
    router = inject(Router)

    ngOnInit() {
        this.layout.setLayoutOrientation('horizontal')
    }

    ngOnDestroy() {
        const sub = this.router.events
            .pipe(filter(event => event instanceof NavigationEnd))
            .subscribe(() => {
                this.layout.setLayoutOrientation('vertical');
                this.layout.setSidenavSize('default');
                sub.unsubscribe();
            });
    }
}
