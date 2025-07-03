import {Component, inject, OnDestroy, OnInit} from '@angular/core';
import {NgIcon} from "@ng-icons/core";
import {NgbAlert} from "@ng-bootstrap/ng-bootstrap";
import {PageTitleComponent} from "@app/components/page-title.component";
import {LayoutStoreService} from '@core/services/layout-store.service';

@Component({
    selector: 'app-with-lines-menu',
    imports: [
        NgIcon,
        NgbAlert,
        PageTitleComponent
    ],
    templateUrl: './with-lines-menu.component.html'
})
export class WithLinesMenuComponent implements OnInit, OnDestroy {

    layout = inject(LayoutStoreService)

    ngOnInit() {
        this.layout.setHtmlAttribute('class', 'sidebar-with-line')
    }

    ngOnDestroy() {
        this.layout.setHtmlAttribute('class', '')
        this.layout.reset()
    }
}
