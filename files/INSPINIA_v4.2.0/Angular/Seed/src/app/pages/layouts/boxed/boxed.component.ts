import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';
import {PageTitleComponent} from '@app/components/page-title.component';

@Component({
    selector: 'app-boxed',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './boxed.component.html',
})
export class BoxedComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setLayoutWidth('boxed')
        this.layout.setSidenavSize('on-hover')
    }

    ngOnDestroy() {
        this.layout.reset()
    }
}
