import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-delete-account',
    host: { 'data-component-id': 'auth3-delete-account' },
    imports: [RouterLink],
    templateUrl: './delete-account.component.html',
    styles: ``
})
export class DeleteAccountComponent {
    currentYear = currentYear
    credits = credits
}
