import { Component, Input } from '@angular/core';
import type { TestimonialType } from '../types';
import { CommonModule } from '@angular/common';
import {RatingComponent} from '@app/components/rating.component';

@Component({
    selector: 'app-testimonial-card',
    imports: [CommonModule, RatingComponent],
    templateUrl: './testimonial-card.component.html',
    styles: ``
})
export class TestimonialCardComponent {
    @Input() testimonial!: TestimonialType
}
