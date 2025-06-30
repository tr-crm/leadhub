import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgIcon } from '@ng-icons/core';
import { PasswordStrengthBarComponent } from "@app/components/password-strength-bar.component";
import { FormsModule } from '@angular/forms';
import { NgOtpInputComponent } from 'ng-otp-input';

@Component({
    selector: 'app-new-pw',
    host: { 'data-component-id': 'auth2-new-pw' },
    imports: [RouterLink, NgIcon, PasswordStrengthBarComponent, FormsModule,NgOtpInputComponent],
    templateUrl: './new-pw.component.html',
    styles: ``,
})
export class NewPwComponent {
    currentYear = currentYear
    credits = credits
    password: string = '';
}
