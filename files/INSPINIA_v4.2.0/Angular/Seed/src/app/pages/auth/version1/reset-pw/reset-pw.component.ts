import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-reset-pw',
    imports: [RouterLink],
    templateUrl: './reset-pw.component.html',
    styles: ``
})
export class ResetPwComponent {
    currentYear = currentYear
    credits = credits
}
