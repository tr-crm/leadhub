import { credits, currentYear } from '@/app/constants';
import { Component, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { RouterLink } from '@angular/router';
import { PasswordStrengthBarComponent } from "@app/components/password-strength-bar.component";
import { FormsModule } from '@angular/forms';

@Component({
    selector: 'app-sign-up',
    host: { 'data-component-id': 'auth3-sign-up' },
    imports: [RouterLink, PasswordStrengthBarComponent,FormsModule],
    templateUrl: './sign-up.component.html',
    styles: ``,
    schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class SignUpComponent {
    currentYear = currentYear
    credits = credits
    password: string = '';
}
