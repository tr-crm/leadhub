import {Component} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {LucideAngularModule, Moon, Sun} from 'lucide-angular';
import {CommonModule} from '@angular/common';

@Component({
  selector: 'app-theme-toggler',
  imports: [LucideAngularModule, CommonModule],
  templateUrl: './theme-toggler.component.html'
})
export class ThemeTogglerComponent {

  constructor(public layout: LayoutStoreService) {
  }

  readonly Moon = Moon;
  readonly Sun = Sun;

  toggleTheme() {
    if (this.layout.theme === 'light') {
      this.layout.setTheme('dark')
    } else {
      this.layout.setTheme('light')
    }
  }
}
