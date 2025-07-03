import { Component, Input } from '@angular/core';
import type { PricingPlanType } from '../types';
import { CommonModule } from '@angular/common';
import { NgIcon } from '@ng-icons/core';

@Component({
    selector: 'app-pricing-plan-card',
    imports: [CommonModule,NgIcon],
    templateUrl: './pricing-plan-card.component.html',
    styles: ``
})
export class PricingPlanCardComponent {
    @Input() plan!: PricingPlanType

}
