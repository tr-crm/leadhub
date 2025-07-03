import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-success-mail',
    host: { 'data-component-id': 'auth2-success-mail' },
    imports: [RouterLink],
    templateUrl: './success-mail.component.html',
    styles: ``
})
export class SuccessMailComponent {
    currentYear = currentYear
    credits = credits
}
