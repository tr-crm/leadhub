import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {PageTitleComponent} from '@app/components/page-title.component';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';

@Component({
    selector: 'app-scrollable',
    imports: [
        PageTitleComponent,
        NgIcon,
        NgbAlert
    ],
    templateUrl: './scrollable.component.html'
})
export class ScrollableComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setLayoutPosition('scrollable')
    }

    ngOnDestroy() {
        this.layout.reset()
    }
}
