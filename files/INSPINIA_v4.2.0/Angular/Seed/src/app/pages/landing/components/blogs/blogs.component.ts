import { Component } from '@angular/core';
import type { BlogType } from '../types';
import { BlogCardComponent } from "../blog-card/blog-card.component";
import { CommonModule } from '@angular/common';

@Component({
    selector: 'app-blogs',
    imports: [BlogCardComponent,CommonModule],
    templateUrl: './blogs.component.html',
    styles: ``
})
export class BlogsComponent {
    blogs: BlogType[] = [
        {
            category: 'Technology',
            image: 'assets/images/blog/blog-4.jpg',
            title: 'The Future of Artificial Intelligence',
            description: 'Discover how AI is transforming industries and what the future holds for this cutting-edge technology.',
            date: 'Jan 12, 2025',
            comments: 89,
            views: 1284,
            author: {
                name: 'Michael Turner',
                image: 'assets/images/users/user-4.jpg',
            },
            url: '/article',
        },
        {
            category: 'Data Science',
            image: 'assets/images/blog/blog-5.jpg',
            title: 'Top Data Science Trends in 2025',
            description: 'Get ahead in the data science field with the latest trends, technologies, and tools that are reshaping the industry.',
            date: 'Jan 12, 2025',
            comments: 89,
            views: 1284,
            author: {
                name: 'Olivia Brown',
                image: 'assets/images/users/user-1.jpg',
            },
            url: '/article',

        },
        {
            category: 'Business',
            image: 'assets/images/blog/blog-3.jpg',
            title: '5 Key Tips for New Entrepreneurs',
            description: 'Start your entrepreneurial journey with these 5 essential tips that will guide you through the first year of business.',
            date: 'Jan 12, 2025',
            comments: 89,
            views: 1284,
            author: {
                name: 'David Clark',
                image: 'assets/images/users/user-7.jpg',
            },
            url: '/article',
        },
    ];
}
