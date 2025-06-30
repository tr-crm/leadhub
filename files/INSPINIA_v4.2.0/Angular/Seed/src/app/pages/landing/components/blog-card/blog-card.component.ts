import { Component, Input } from '@angular/core';
import type { BlogType } from '../types';
import { RouterLink } from '@angular/router';
import { NgIcon } from '@ng-icons/core';

@Component({
    selector: 'app-blog-card',
    imports: [RouterLink,NgIcon],
    templateUrl: './blog-card.component.html',
    styles: ``
})
export class BlogCardComponent {
    @Input() blog!: BlogType
}
