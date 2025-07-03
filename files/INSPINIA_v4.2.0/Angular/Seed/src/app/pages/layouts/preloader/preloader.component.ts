import {Component, inject, OnInit} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {NgIcon} from '@ng-icons/core';
import {NgbAlert} from '@ng-bootstrap/ng-bootstrap';
import {PageTitleComponent} from '@app/components/page-title.component';

@Component({
    selector: 'app-preloader',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './preloader.component.html',
})
export class PreloaderComponent implements OnInit {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setIsLoading(true);

        setTimeout(() => {
            this.layout.setIsLoading(false);
        }, 2000);
    }
}
