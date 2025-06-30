import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';
import {PageTitleComponent} from '@app/components/page-title.component';
import {LayoutStoreService} from '@core/services/layout-store.service';

@Component({
    selector: 'app-dark-topbar',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './dark-topbar.component.html'
})
export class DarkTopbarComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setTopbarColor('dark')
    }

    ngOnDestroy() {
        this.layout.reset()
    }
}
