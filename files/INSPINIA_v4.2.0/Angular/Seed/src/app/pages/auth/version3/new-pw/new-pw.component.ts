import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { RouterLink } from '@angular/router';
import { PasswordStrengthBarComponent } from "@app/components/password-strength-bar.component";
import { NgOtpInputComponent } from 'ng-otp-input';

@Component({
    selector: 'app-new-pw',
    host: { 'data-component-id': 'auth3-new-pw' },
    imports: [RouterLink, PasswordStrengthBarComponent,FormsModule,NgOtpInputComponent],
    templateUrl: './new-pw.component.html',
    styles: ``,
})
export class NewPwComponent {
    currentYear = currentYear
    credits = credits
      password: string = '';
}
