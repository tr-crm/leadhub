import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgIcon } from '@ng-icons/core';

@Component({
    selector: 'app-reset-pw',
    host: { 'data-component-id': 'auth2-reset-pw' },
    imports: [RouterLink,NgIcon],
    templateUrl: './reset-pw.component.html',
    styles: ``,
})
export class ResetPwComponent {
    currentYear = currentYear
    credits = credits
}
