import {Component} from '@angular/core';
import {NgIcon} from '@ng-icons/core';
import {FlatpickrDirective, provideFlatpickrDefaults,} from 'angularx-flatpickr';
import {FormsModule} from '@angular/forms';

@Component({
    selector: 'app-with-tools-topbar',
    imports: [
        NgIcon,
        FlatpickrDirective,
        FormsModule
    ],
    providers: [provideFlatpickrDefaults()],
    templateUrl: './with-tools-topbar.component.html',
})
export class WithToolsTopbarComponent {
    dates: { from: Date; to: Date } = {
        from: new Date('2025-01-01'),
        to: new Date('2025-01-31'),
    };
}
