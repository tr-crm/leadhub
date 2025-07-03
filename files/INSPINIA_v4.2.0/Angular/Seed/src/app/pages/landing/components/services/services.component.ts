import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { NgIcon } from '@ng-icons/core';

type ServiceType = {
    name: string,
    description: string,
    icon: string
}

@Component({
    selector: 'app-services',
    imports: [CommonModule, NgIcon],
    templateUrl: './services.component.html',
    styles: ``
})
export class ServicesComponent {


    services: ServiceType[] = [
        {
            name: 'Digital Strategy',
            description: 'Crafting data-driven strategies to maximize online growth and brand engagement.',
            icon: 'tablerBulb'
        },
        {
            name: 'SEO Optimization',
            description: 'Improve search engine rankings and increase website visibility through tailored SEO practices.',
            icon: 'tablerChartBar'
        },
        {
            name: 'Social Media Marketing',
            description: 'Engage your audience across platforms with strategic content and campaign management.',
            icon: 'tablerSpeakerphone'
        },
        {
            name: 'Web Development',
            description: 'Building fast, responsive, and scalable websites that meet your business needs.',
            icon: 'tablerWorld'
        },
        {
            name: 'Email Marketing',
            description: 'Connect with your audience and boost conversions through targeted email campaigns.',
            icon: 'tablerMail'
        },
        {
            name: 'E-Commerce Solutions',
            description: 'Launch and manage high-performing online stores with secure, scalable features.',
            icon: 'tablerShoppingCart'
        },
        {
            name: 'Content Creation',
            description: 'Produce compelling visuals and copy to drive traffic and build brand identity.',
            icon: 'tablerCamera'
        },
        {
            name: 'Security Audits',
            description: 'Ensure your website and data are secure with comprehensive vulnerability assessments.',
            icon: 'tablerShieldCheck'
        }
    ];
}
