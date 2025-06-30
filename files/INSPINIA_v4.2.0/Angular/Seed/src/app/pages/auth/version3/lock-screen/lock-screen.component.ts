import { credits, currentYear } from '@/app/constants';
import { Component, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-lock-screen',
    host: { 'data-component-id': 'auth3-lock-screen' },
    imports: [RouterLink],
    templateUrl: './lock-screen.component.html',
    styles: ``,
    schemas:[CUSTOM_ELEMENTS_SCHEMA]
})
export class LockScreenComponent {
    currentYear = currentYear
    credits = credits
}
