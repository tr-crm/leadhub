import {credits, currentYear} from '@/app/constants';
import {CommonModule} from '@angular/common';
import {Component} from '@angular/core';
import {RouterLink} from '@angular/router';
import {NgIcon} from '@ng-icons/core';

type footerLinksType = {
    title: string;
    links: {
        name: string
        url: string;
        badge?: {
            title: string;
            variant: string
        }
    }[],
}

type socialLinksType = {
    title: string;
    icon: string;
    url: string
}

@Component({
    selector: 'app-footer',
    imports: [CommonModule, RouterLink, NgIcon],
    templateUrl: './footer.component.html',
    styles: ``
})
export class FooterComponent {
    currentYear = currentYear
    credits = credits
    socialLinks: socialLinksType[] = [
        {title: 'Facebook', icon: 'tablerBrandFacebook', url: '',},
        {title: 'Twitter-x', icon: 'tablerBrandX', url: '',},
        {title: 'Instagram', icon: 'tablerBrandInstagram', url: '',},
        {title: 'WhatsApp', icon: 'tablerBrandWhatsapp', url: '',},
    ];

    footerLinks: footerLinksType[] = [
        {
            title: 'Company',
            links: [
                {name: 'Our Story', url: ''},
                {name: 'Leadership Team', url: ''},
                {
                    name: 'Careers',
                    url: '',
                    badge: {title: "We're Hiring", variant: 'warning'}
                },
                {name: 'Press & Media', url: ''},
                {name: 'Investor Relations', url: ''},
                {name: 'Sustainability', url: ''},
            ],
        },
        {
            title: 'Community',
            links: [
                {name: 'Community Forum', url: ''},
                {name: 'Events & Meetups', url: ''},
                {name: 'Ambassadors', url: ''},
                {name: 'Customer Stories', url: ''},
                {name: 'Open Source', url: ''},
                {name: 'Code of Conduct', url: ''},
            ],
        },
        {
            title: 'Admin',
            links: [
                {name: 'Dashboard', url: ''},
                {name: 'User Management', url: ''},
                {name: 'Roles & Permissions', url: ''},
                {name: 'System Logs', url: ''},
                {name: 'Settings', url: ''},
                {name: 'API Access', url: ''},
            ],
        }
    ];
}
