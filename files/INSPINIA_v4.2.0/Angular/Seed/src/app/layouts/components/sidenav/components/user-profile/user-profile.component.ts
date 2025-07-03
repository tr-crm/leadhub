import {Component, CUSTOM_ELEMENTS_SCHEMA} from '@angular/core';
import {RouterLink} from '@angular/router';
import {NgbCollapseModule, NgbDropdown, NgbDropdownMenu, NgbDropdownToggle} from '@ng-bootstrap/ng-bootstrap';
import {CommonModule} from '@angular/common';
import {NgIcon} from '@ng-icons/core';
import {userDropdownItems} from '@layouts/components/data';

@Component({
  selector: 'app-user-profile',
  imports: [
    RouterLink,
    NgbCollapseModule,
    NgbDropdown,
    NgbDropdownToggle,
    NgbDropdownMenu,
    CommonModule,
    NgIcon
  ],

  templateUrl: './user-profile.component.html',
  schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class UserProfileComponent {
  menuItems = userDropdownItems
}
