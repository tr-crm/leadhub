import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgOtpInputComponent } from 'ng-otp-input';

@Component({
    selector: 'app-login-pin',
    host: { 'data-component-id': 'auth2-login-pin' },
    imports: [RouterLink,NgOtpInputComponent],
    templateUrl: './login-pin.component.html',
    styles: ``
})
export class LoginPinComponent {
    currentYear = currentYear
    credits = credits
}
