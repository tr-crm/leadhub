import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-maintenance',
  imports: [RouterLink],
  templateUrl: './maintenance.component.html',
  styles: ``
})
export class MaintenanceComponent {
    currentYear = currentYear
    credits = credits
}
