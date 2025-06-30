import {Component} from '@angular/core';
import {CommonModule} from '@angular/common';
import {RouterLink} from '@angular/router';
import {currency} from '@/app/constants';
import {NgIcon} from '@ng-icons/core';
import {NgbDropdown, NgbDropdownItem, NgbDropdownMenu, NgbDropdownToggle} from '@ng-bootstrap/ng-bootstrap';
import {toTitleCase} from '@/app/utils/string-utils';
import {orders} from '@/app/pages/dashboards/dashboard-2/data';

@Component({
    selector: 'app-recent-orders',
    imports: [CommonModule, RouterLink, NgIcon, NgbDropdown, NgbDropdownItem, NgbDropdownMenu, NgbDropdownToggle],
    templateUrl: './recent-orders.component.html'
})
export class RecentOrdersComponent {
    orders = orders
    currency = currency;
    toTitleCase = toTitleCase;
}
