import { credits, currentYear } from '@/app/constants';
import { Component, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgIcon } from '@ng-icons/core';

@Component({
    selector: 'app-lock-screen',
    host: { 'data-component-id': 'auth2-lock-screen' },
    imports: [RouterLink, NgIcon],
    templateUrl: './lock-screen.component.html',
    styles: ``,
})
export class LockScreenComponent {
    currentYear = currentYear
    credits = credits
}
