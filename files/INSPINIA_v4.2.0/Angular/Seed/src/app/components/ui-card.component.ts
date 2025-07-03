import {CommonModule} from '@angular/common';
import {Component, Input} from '@angular/core';
import {NgIcon} from '@ng-icons/core';
import {NgbCollapse} from '@ng-bootstrap/ng-bootstrap';

@Component({
    selector: 'app-ui-card',
    imports: [CommonModule, NgIcon, NgbCollapse],
    template: `
        <div class="card" *ngIf="isVisible">
            <div class="card-header justify-content-between align-items-center" [class]="{'border-0':isCollapsed}">
                <h5 class="card-title">{{ title }}</h5>
                <div>
                    <div *ngIf="isTogglable || isReloadable ||  isCloseable" class="card-action">
                        <button *ngIf="isTogglable" (click)="isCollapsed = !isCollapsed"
                                class="card-action-item border-0">
                            <ng-icon *ngIf="!isCollapsed" name="tablerChevronUp"/>
                            <ng-icon *ngIf="isCollapsed" name="tablerChevronDown"/>
                        </button>
                        <button *ngIf="isReloadable" (click)="reload()" class="card-action-item border-0">
                            <ng-icon name="tablerRefresh"/>
                        </button>
                        <button *ngIf="isCloseable" (click)="close()" class="card-action-item border-0">
                            <ng-icon name="tablerX"/>
                        </button>
                    </div>
                    <ng-content select="[helper-text]"></ng-content>
                </div>
            </div>

            <div class="card-body p-0 {{bodyClass}}" #collapse="ngbCollapse" [(ngbCollapse)]="isCollapsed">
                <ng-content select="[card-body]"></ng-content>
            </div>

            <div *ngIf="isReloading" class="card-overlay d-flex">
                <div class="spinner-border text-primary"></div>
            </div>

        </div>
    `
})
export class UiCardComponent {
    @Input() title!: string
    @Input() bodyClass?: string
    @Input() isTogglable?: boolean
    @Input() isReloadable?: boolean
    @Input() isCloseable?: boolean

    isCollapsed = false
    isReloading = false;
    isVisible = true;

    reload() {
        this.isReloading = true;
        setTimeout(() => (this.isReloading = false), 1500); // fake reload
    }

    close() {
        this.isVisible = false;
    }
}
