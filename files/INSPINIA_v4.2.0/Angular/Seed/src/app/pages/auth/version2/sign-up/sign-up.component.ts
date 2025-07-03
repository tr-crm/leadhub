import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgIcon } from '@ng-icons/core';
import { PasswordStrengthBarComponent } from "@app/components/password-strength-bar.component";
import { FormsModule } from '@angular/forms';

@Component({
    selector: 'app-sign-up',
    host: { 'data-component-id': 'auth2-sign-up' },
    imports: [RouterLink, NgIcon, PasswordStrengthBarComponent,FormsModule],
    templateUrl: './sign-up.component.html',
    styles: ``,
})
export class SignUpComponent {
    currentYear = currentYear
    credits = credits
     password: string = '';
}
