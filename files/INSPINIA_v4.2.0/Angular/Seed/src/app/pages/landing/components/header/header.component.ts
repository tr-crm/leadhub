import { CommonModule } from '@angular/common';
import { Component, HostListener, inject } from '@angular/core';
import { RouterLink } from '@angular/router';
import {LayoutStoreService} from '@core/services/layout-store.service';
import { ScrollService } from '@core/services/scroll.service';
import { NgbAlert, NgbCollapseModule } from '@ng-bootstrap/ng-bootstrap';
import { NgIcon } from '@ng-icons/core';

@Component({
    selector: 'app-header',
    imports: [NgIcon, RouterLink, CommonModule, NgbCollapseModule, NgbAlert],
    templateUrl: './header.component.html',
    styles: ``
})
export class HeaderComponent {
    isCollapsed = true;
    isSticky = false;
    isOpen = true
    public scroll = inject(ScrollService)
    public layout = inject(LayoutStoreService)

    navItems = ['Home', 'Services', 'Features', 'Plans', 'Reviews', 'Blog', 'Contact'];

    @HostListener('window:scroll', [])
    onWindowScroll() {
        const scroll = window.scrollY || window.pageYOffset;
        this.isSticky = scroll > 100;
    }

    closeAlert() {
        this.isOpen = false
    }

    toggleTheme() {
        if (this.layout.theme === 'light') {
            this.layout.setTheme('dark')
        } else {
            this.layout.setTheme('light')
        }
    }
}
