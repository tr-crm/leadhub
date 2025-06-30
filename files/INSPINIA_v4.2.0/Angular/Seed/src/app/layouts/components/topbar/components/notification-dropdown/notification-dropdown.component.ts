import {Component} from '@angular/core';
import {NgbDropdown, NgbDropdownMenu, NgbDropdownToggle} from '@ng-bootstrap/ng-bootstrap';
import {SimplebarAngularModule} from 'simplebar-angular';
import {
    AlertTriangle,
    BatteryWarning,
    Bell,
    BellRing,
    Bug,
    Calendar,
    CheckCircle,
    CheckSquare,
    CloudUpload,
    DatabaseZap,
    Download,
    Lock,
    LucideAngularModule,
    LucideIconData,
    MessageCircle,
    ServerCrash,
    UserPlus
} from 'lucide-angular';
import {CommonModule, NgComponentOutlet} from '@angular/common';
import {NgIcon} from '@ng-icons/core';

type NotificationType = {
    id: string;
    icon: LucideIconData;
    variant: 'danger' | 'warning' | 'success' | 'primary' | 'info' | 'secondary';
    message: string;
    timestamp: string;
}

@Component({
    selector: 'app-notification-dropdown',
    imports: [
        NgbDropdown,
        NgbDropdownToggle,
        SimplebarAngularModule,
        NgbDropdownMenu,
        LucideAngularModule,
        CommonModule,
        NgIcon
    ],
    templateUrl: './notification-dropdown.component.html',
})
export class NotificationDropdownComponent {

    protected readonly Bell = Bell;

    notifications: NotificationType[] = [
        {
            id: 'notification-1',
            icon: ServerCrash,
            variant: 'danger',
            message: 'Critical alert: Server crash detected',
            timestamp: '30 minutes ago'
        },
        {
            id: 'notification-2',
            icon: AlertTriangle,
            variant: 'warning',
            message: 'High memory usage on Node A',
            timestamp: '10 minutes ago'
        },
        {
            id: 'notification-3',
            icon: CheckCircle,
            variant: 'success',
            message: 'Backup completed successfully',
            timestamp: '1 hour ago'
        },
        {
            id: 'notification-4',
            icon: UserPlus,
            variant: 'primary',
            message: 'New user registration: Sarah Miles',
            timestamp: 'Just now'
        },
        {
            id: 'notification-5',
            icon: Bug,
            variant: 'danger',
            message: 'Bug reported in payment module',
            timestamp: '20 minutes ago'
        },
        {
            id: 'notification-6',
            icon: MessageCircle,
            variant: 'info',
            message: 'New comment on Task #142',
            timestamp: '15 minutes ago'
        },
        {
            id: 'notification-7',
            icon: BatteryWarning,
            variant: 'warning',
            message: 'Low battery on Device X',
            timestamp: '45 minutes ago'
        },
        {
            id: 'notification-8',
            icon: CloudUpload,
            variant: 'success',
            message: 'File upload completed',
            timestamp: '1 hour ago'
        },
        {
            id: 'notification-9',
            icon: Calendar,
            variant: 'primary',
            message: 'Team meeting scheduled at 3 PM',
            timestamp: '2 hours ago'
        },
        {
            id: 'notification-10',
            icon: Download,
            variant: 'secondary',
            message: 'Report ready for download',
            timestamp: '3 hours ago'
        },
        {
            id: 'notification-11',
            icon: Lock,
            variant: 'danger',
            message: 'Multiple failed login attempts',
            timestamp: '5 hours ago'
        },
        {
            id: 'notification-12',
            icon: BellRing,
            variant: 'info',
            message: 'Reminder: Submit your timesheet',
            timestamp: 'Today, 9:00 AM'
        },
        {
            id: 'notification-13',
            icon: DatabaseZap,
            variant: 'warning',
            message: 'Database nearing capacity',
            timestamp: 'Yesterday'
        },
        {
            id: 'notification-14',
            icon: CheckSquare,
            variant: 'success',
            message: 'System check completed',
            timestamp: '2 days ago'
        }
    ];
}
