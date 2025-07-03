import { credits, currentYear } from '@/app/constants';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
    selector: 'app-error-408',
    imports: [RouterLink],
    templateUrl: './error-408.component.html',
    styles: ``
})
export class Error408Component {
    currentYear = currentYear
    credits = credits
}
