import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';
import {PageTitleComponent} from '@app/components/page-title.component';

@Component({
    selector: 'app-gray-menu',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './gray-menu.component.html',
})
export class GrayMenuComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setSidenavColor('gray')
    }

    ngOnDestroy() {
        this.layout.reset()
    }
}
