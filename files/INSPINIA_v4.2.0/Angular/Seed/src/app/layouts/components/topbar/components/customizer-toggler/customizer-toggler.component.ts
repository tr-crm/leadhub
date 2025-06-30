import {Component} from '@angular/core';
import {LayoutStoreService} from '@core/services/layout-store.service';
import {LucideAngularModule, Settings} from 'lucide-angular';

@Component({
  selector: 'app-customizer-toggler',
  imports: [LucideAngularModule],
  templateUrl: './customizer-toggler.component.html'
})
export class CustomizerTogglerComponent {
  constructor(public layout: LayoutStoreService) {
  }

  readonly Settings = Settings;
}
