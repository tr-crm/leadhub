import { credits, currentYear } from '@/app/constants';
import { Component, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-sign-in',
    host: { 'data-component-id': 'auth3-sign-in' },
    imports: [RouterLink],
    templateUrl: './sign-in.component.html',
    styles: ``,
    schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class SignInComponent {
    currentYear = currentYear
    credits = credits
}
