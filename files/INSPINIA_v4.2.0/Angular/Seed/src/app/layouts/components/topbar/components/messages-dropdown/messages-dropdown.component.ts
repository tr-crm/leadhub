import {Component} from '@angular/core';
import {NgbDropdown, NgbDropdownMenu, NgbDropdownToggle} from '@ng-bootstrap/ng-bootstrap';
import {LucideAngularModule, LucideIconData, Mails, ShieldUser} from 'lucide-angular';
import {SimplebarAngularModule} from 'simplebar-angular';
import {CommonModule} from '@angular/common';
import {NgIcon} from '@ng-icons/core';

type MessageItemType = {
    id: string;
    user: {
        name: string;
        avatar?: string;
        icon?: LucideIconData;
        bgClass?: string;
    };
    action: string;
    context: string;
    timestamp: string;
    active?: boolean;
};

@Component({
    selector: 'app-messages-dropdown',
    imports: [
        NgbDropdownMenu,
        NgbDropdownToggle,
        NgbDropdown,
        CommonModule,
        LucideAngularModule,
        SimplebarAngularModule,
        NgIcon
    ],
    templateUrl: './messages-dropdown.component.html'
})
export class MessagesDropdownComponent {

    protected readonly Mails = Mails;

    messages: MessageItemType[] = [
        {
            id: 'message-1',
            user: {
                name: 'Liam Carter',
                avatar: 'assets/images/users/user-1.jpg'
            },
            action: 'uploaded a new document to',
            context: 'Project Phoenix',
            timestamp: '5 minutes ago',
            active: true
        },
        {
            id: 'message-2',
            user: {
                name: 'Ava Mitchell',
                avatar: 'assets/images/users/user-2.jpg'
            },
            action: 'commented on',
            context: 'Marketing Campaign Q3',
            timestamp: '12 minutes ago'
        },
        {
            id: 'message-3',
            user: {
                name: 'Noah Blake',
                icon: ShieldUser,
                bgClass: 'text-bg-info'
            },
            action: 'updated the status of',
            context: 'Client Onboarding',
            timestamp: '30 minutes ago'
        },
        {
            id: 'message-4',
            user: {
                name: 'Sophia Taylor',
                avatar: 'assets/images/users/user-4.jpg'
            },
            action: 'sent an invoice for',
            context: 'Service Renewal',
            timestamp: '1 hour ago'
        },
        {
            id: 'message-5',
            user: {
                name: 'Ethan Moore',
                avatar: 'assets/images/users/user-5.jpg'
            },
            action: 'completed the task',
            context: 'UI Review',
            timestamp: '2 hours ago'
        },
        {
            id: 'message-6',
            user: {
                name: 'Olivia White',
                avatar: 'assets/images/users/user-6.jpg'
            },
            action: 'assigned you a task in',
            context: 'Sales Pipeline',
            timestamp: 'Yesterday'
        }
    ];
}
