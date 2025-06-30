import {Component} from '@angular/core';
import {appName, credits, currentYear} from '@/app/constants';

@Component({
  selector: 'app-footer',
  imports: [],
  templateUrl: './footer.component.html'
})
export class FooterComponent {
  currentYear = currentYear;
  appName = appName;
  credits = credits;
}
