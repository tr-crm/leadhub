import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-sign-in',
    imports: [RouterLink],
    templateUrl: './sign-in.component.html',
    styles: ``
})
export class SignInComponent {
    currentYear = currentYear
    credits=credits
}
