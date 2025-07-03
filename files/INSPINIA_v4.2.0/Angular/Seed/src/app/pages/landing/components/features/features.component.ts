import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { CountUpModule } from 'ngx-countup';

@Component({
    selector: 'app-features',
    imports: [RouterLink, CountUpModule, CommonModule],
    templateUrl: './features.component.html',
    styles: ``
})
export class FeaturesComponent {
    stats1 = [
        { value: 99.50, suffix: '%', label: 'User satisfaction' },
        { value: 7.4, suffix: 'x', label: 'Monthly user growth' },
        { value: 1200, suffix: '+', label: 'Messages sent per second' }
    ];
    stats2 = [
        { value: 99.50, suffix: '%', label: 'File recovery success rate' },
        { value: 3.2, suffix: 'x', label: 'Faster upload speed' },
        { value: 1500, suffix: '+', label: 'Files organized per minute' }
    ];
    stats3 = [
        { value: 97.50, suffix: '%', label: 'Sync reliability' },
        { value: 4.2, suffix: 'x', label: 'Faster contact search' },
        { value: 250000, suffix: '+', label: 'Contacts managed daily' }
    ];
}
