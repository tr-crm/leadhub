import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgOtpInputComponent } from 'ng-otp-input';

@Component({
  selector: 'app-two-factor',
  host: { 'data-component-id': 'auth2-factor' },
  imports: [RouterLink,NgOtpInputComponent],
  templateUrl: './two-factor.component.html',
  styles: ``
})
export class TwoFactorComponent {
   currentYear = currentYear
    credits = credits
}
