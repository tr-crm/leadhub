import { Component } from '@angular/core';
import {AppMenuComponent} from '@layouts/components/navbar/components/app-menu/app-menu.component';

@Component({
  selector: 'app-navbar',
    imports: [
        AppMenuComponent
    ],
  templateUrl: './navbar.component.html'
})
export class NavbarComponent {

}
