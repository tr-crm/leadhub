import {Component, Input} from '@angular/core';
import {CommonModule} from '@angular/common';
import {RouterLink} from '@angular/router';
import {NgIcon} from '@ng-icons/core';

@Component({
    selector: 'app-page-title',
    imports: [CommonModule, RouterLink, NgIcon],
    template: `
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-sm text-uppercase fw-bold m-0">{{ title }}</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a routerLink="/">Inspinia</a></li>
                    <li class="d-flex justify-content-center">
                        <ng-icon name="tablerChevronRight" size="14" class="breadcrumb-arrow align-middle mx-1"/>
                    </li>
                    <ng-container *ngIf="subTitle">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ subTitle }}</a></li>
                        <li class="d-flex justify-content-center">
                            <ng-icon name="tablerChevronRight" size="14" class="breadcrumb-arrow align-middle mx-1"/>
                        </li>
                    </ng-container>
                    <li class="breadcrumb-item active">{{ title }}</li>
                </ol>
            </div>
        </div>
    `
})
export class PageTitleComponent {
    @Input() title: string = 'Welcome!';
    @Input() subTitle: string | null = null;
}
