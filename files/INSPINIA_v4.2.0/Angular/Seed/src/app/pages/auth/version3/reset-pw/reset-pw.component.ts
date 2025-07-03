import { credits, currentYear } from '@/app/constants';
import { Component, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-reset-pw',
    host: { 'data-component-id': 'auth2-reset-pw' },
    imports: [RouterLink],
    templateUrl: './reset-pw.component.html',
    styles: ``,
    schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class ResetPwComponent {
    currentYear = currentYear
    credits = credits
}
