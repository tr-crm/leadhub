import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { PricingPlanCardComponent } from "../pricing-plan-card/pricing-plan-card.component";

@Component({
    selector: 'app-pricing-plans',
    imports: [CommonModule, PricingPlanCardComponent],
    templateUrl: './pricing-plans.component.html',
    styles: ``
})
export class PricingPlansComponent {
    plans = [
        {
            name: 'Single License',
            price: 49,
            description: 'Perfect for personal or one-client projects',
            highlight: 'Single project use',
            features: [
                { text: '1 project usage', included: true },
                { text: 'Full component access', included: true },
                { text: 'Basic documentation', included: true },
                { text: 'No multi-client use', included: false },
                { text: 'No SaaS/resale rights', included: false },
            ],
            btnClass: 'btn-outline-primary',
        },
        {
            name: 'Multiple License',
            price: 249,
            description: 'For developers or agencies working with multiple clients',
            highlight: 'Up to 5 projects',
            features: [
                { text: 'Use in up to 5 projects', included: true },
                { text: 'Commercial client use', included: true },
                { text: 'Lifetime updates', included: true },
                { text: 'Premium support', included: true },
                { text: 'No resale/SaaS rights', included: false },
            ],
            btnClass: 'btn-primary',
            isPopular: true,
        },
        {
            name: 'Extended License',
            price: 999,
            description: 'For SaaS products or items offered in paid applications',
            highlight: 'Commercial redistribution rights',
            features: [
                { text: 'Unlimited project usage', included: true },
                { text: 'SaaS & resale rights', included: true },
                { text: 'Full Figma source files', included: true },
                { text: 'Priority support', included: true },
                { text: 'Custom licensing agreement', included: true },
            ],
            btnClass: 'btn-dark',
        },
    ];
}
