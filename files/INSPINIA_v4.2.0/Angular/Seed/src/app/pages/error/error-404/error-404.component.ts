import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-error-404',
    imports: [RouterLink],
    templateUrl: './error-404.component.html',
    styles: ``
})
export class Error404Component {
    currentYear = currentYear
    credits = credits
}
