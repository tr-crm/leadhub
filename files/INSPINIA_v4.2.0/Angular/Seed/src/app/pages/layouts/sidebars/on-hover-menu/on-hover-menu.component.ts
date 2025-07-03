import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';
import {PageTitleComponent} from '@app/components/page-title.component';
import {LayoutStoreService} from '@core/services/layout-store.service';

@Component({
    selector: 'app-on-hover-menu',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './on-hover-menu.component.html'
})
export class OnHoverMenuComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setSidenavSize('on-hover')
    }

    ngOnDestroy() {
        this.layout.reset()
    }
}
