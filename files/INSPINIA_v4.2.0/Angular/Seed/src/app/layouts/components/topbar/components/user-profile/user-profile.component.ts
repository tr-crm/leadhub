import {Component} from '@angular/core';
import {CommonModule} from "@angular/common";
import {NgbDropdown, NgbDropdownMenu, NgbDropdownToggle} from "@ng-bootstrap/ng-bootstrap";
import {userDropdownItems} from '@layouts/components/data';
import {RouterLink} from '@angular/router';
import {NgIcon} from '@ng-icons/core';

@Component({
  selector: 'app-user-profile-topbar',
  imports: [
    CommonModule,
    NgbDropdown,
    NgbDropdownMenu,
    NgbDropdownToggle,
    RouterLink,
    NgIcon
  ],
  templateUrl: './user-profile.component.html'
})
export class UserProfileComponent {
  menuItems = userDropdownItems;
}
