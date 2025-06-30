import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {NgIcon} from "@ng-icons/core";
import {NgbAlert} from "@ng-bootstrap/ng-bootstrap";
import {PageTitleComponent} from "@app/components/page-title.component";
import {LayoutStoreService} from '@core/services/layout-store.service';

@Component({
    selector: 'app-icon-view-menu',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './icon-view-menu.component.html'
})
export class IconViewMenuComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setSidenavSize('condensed')
    }

    ngOnDestroy() {
        this.layout.reset()
    }
}
