import {CommonModule} from '@angular/common';
import {Component} from '@angular/core';
import {TestimonialCardComponent} from "../testimonial-card/testimonial-card.component";

@Component({
    selector: 'app-testimonials',
    imports: [CommonModule, TestimonialCardComponent],
    templateUrl: './testimonials.component.html',
    styles: ``
})
export class TestimonialsComponent {
    testimonials = [
        {
            avatar: 'assets/images/users/user-1.jpg',
            name: 'Emily Carter',
            title: 'Absolutely love it!',
            description: 'This gadget exceeded all my expectations. Sleek design and incredible performance!',
            rating: 5
        },
        {
            avatar: 'assets/images/users/user-2.jpg',
            name: 'Michael Zhang',
            title: 'Great value for money',
            description: 'Sturdy build and long battery life. Would definitely recommend it to friends!',
            rating: 4.5
        },
        {
            avatar: 'assets/images/users/user-3.jpg',
            name: 'Sara Lopez',
            title: 'Top-notch customer service',
            description: 'The team helped me with my issue right away. Smooth experience overall!',
            rating: 4
        },
        {
            avatar: 'assets/images/users/user-4.jpg',
            name: 'James Whitman',
            title: 'Highly impressed',
            description: 'The performance and features are unmatched in this price range. Highly impressed!',
            rating: 5
        },
        {
            avatar: 'assets/images/users/user-5.jpg',
            name: 'Aisha Khan',
            title: 'Smooth experience from start to finish',
            description: 'The website, shipping, and support all worked flawlessly. Very satisfied!',
            rating: 4.5
        }
    ];

    clients = [
        'assets/images/clients/01.svg',
        'assets/images/clients/02.svg',
        'assets/images/clients/03.svg',
        'assets/images/clients/04.svg',
        'assets/images/clients/05.svg',
        'assets/images/clients/06.svg',
        'assets/images/clients/07.svg'
    ];
}
