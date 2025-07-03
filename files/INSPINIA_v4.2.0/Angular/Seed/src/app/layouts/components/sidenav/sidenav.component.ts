import {Component} from '@angular/core';
import {UserProfileComponent} from '@layouts/components/sidenav/components/user-profile/user-profile.component';
import {AppMenuComponent} from '@layouts/components/sidenav/components/app-menu/app-menu.component';
import {SimplebarAngularModule} from 'simplebar-angular';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {NgIf} from '@angular/common';
import {NgIcon} from '@ng-icons/core';
import {RouterLink} from '@angular/router';

@Component({
  selector: 'app-sidenav',
    imports: [
        UserProfileComponent,
        AppMenuComponent,
        SimplebarAngularModule,
        NgIf,
        NgIcon,
        RouterLink
    ],
  templateUrl: './sidenav.component.html',
})
export class SidenavComponent {
  constructor(public layout: LayoutStoreService) {
  }

  hoverSidebar() {
    this.layout.setSidenavSize(this.layout.sidenavSize === 'on-hover-active' ? 'on-hover' : 'on-hover-active')
  }

  closeSidebar() {
    const html = document.documentElement;
    html.classList.toggle('sidebar-enable')
    this.layout.hideBackdrop()
  }
}
