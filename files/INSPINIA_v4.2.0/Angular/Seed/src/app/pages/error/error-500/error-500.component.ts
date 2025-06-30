import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-error-500',
    imports: [RouterLink],
    templateUrl: './error-500.component.html',
    styles: ``
})
export class Error500Component {
    currentYear = currentYear
    credits = credits
}
