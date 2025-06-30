import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { RouterLink } from '@angular/router';
import { PasswordStrengthBarComponent } from "@app/components/password-strength-bar.component";

@Component({
    selector: 'app-sign-up',
    imports: [RouterLink, PasswordStrengthBarComponent,FormsModule],
    templateUrl: './sign-up.component.html',
    styles: ``
})
export class SignUpComponent {
    currentYear = currentYear
    credits = credits
    password: string = '';
}
