'use client'
import {Button, Col, Dropdown, DropdownItem, DropdownMenu, DropdownToggle, Row} from "react-bootstrap";
import {
    LuBatteryWarning,
    LuBell, LuBellRing,
    LuBug, LuCalendar, LuCircleCheck,
    LuCloudUpload, LuDatabaseZap, LuDownload, LuLock,
    LuMessageCircle,
    LuServerCrash, LuSquareCheck, LuTriangleAlert,
    LuUserPlus
} from "react-icons/lu";
import {TbXboxXFilled} from "react-icons/tb";

import SimpleBar from "simplebar-react";
import {IconType} from "react-icons";

type NotificationType = {
    id: string;
    icon: IconType;
    variant: 'danger' | 'warning' | 'success' | 'primary' | 'info' | 'secondary';
    message: string;
    timestamp: string;
}

const notifications: NotificationType[] = [
    {
        id: 'notification-1',
        icon: LuServerCrash,
        variant: 'danger',
        message: 'Critical alert: Server crash detected',
        timestamp: '30 minutes ago'
    },
    {
        id: 'notification-2',
        icon: LuTriangleAlert,
        variant: 'warning',
        message: 'High memory usage on Node A',
        timestamp: '10 minutes ago'
    },
    {
        id: 'notification-3',
        icon: LuCircleCheck,
        variant: 'success',
        message: 'Backup completed successfully',
        timestamp: '1 hour ago'
    },
    {
        id: 'notification-4',
        icon: LuUserPlus,
        variant: 'primary',
        message: 'New user registration: Sarah Miles',
        timestamp: 'Just now'
    },
    {
        id: 'notification-5',
        icon: LuBug,
        variant: 'danger',
        message: 'Bug reported in payment module',
        timestamp: '20 minutes ago'
    },
    {
        id: 'notification-6',
        icon: LuMessageCircle,
        variant: 'info',
        message: 'New comment on Task #142',
        timestamp: '15 minutes ago'
    },
    {
        id: 'notification-7',
        icon: LuBatteryWarning,
        variant: 'warning',
        message: 'Low battery on Device X',
        timestamp: '45 minutes ago'
    },
    {
        id: 'notification-8',
        icon: LuCloudUpload,
        variant: 'success',
        message: 'File upload completed',
        timestamp: '1 hour ago'
    },
    {
        id: 'notification-9',
        icon: LuCalendar,
        variant: 'primary',
        message: 'Team meeting scheduled at 3 PM',
        timestamp: '2 hours ago'
    },
    {
        id: 'notification-10',
        icon: LuDownload,
        variant: 'secondary',
        message: 'Report ready for download',
        timestamp: '3 hours ago'
    },
    {
        id: 'notification-11',
        icon: LuLock,
        variant: 'danger',
        message: 'Multiple failed login attempts',
        timestamp: '5 hours ago'
    },
    {
        id: 'notification-12',
        icon: LuBellRing,
        variant: 'info',
        message: 'Reminder: Submit your timesheet',
        timestamp: 'Today, 9:00 AM'
    },
    {
        id: 'notification-13',
        icon: LuDatabaseZap,
        variant: 'warning',
        message: 'Database nearing capacity',
        timestamp: 'Yesterday'
    },
    {
        id: 'notification-14',
        icon: LuSquareCheck,
        variant: 'success',
        message: 'System check completed',
        timestamp: '2 days ago'
    }
];

const NotificationDropdown = () => {
    return (
        <div className="topbar-item">
            <Dropdown align="end">
                <DropdownToggle as={'button'} className="topbar-link dropdown-toggle drop-arrow-none">
                    <LuBell className="fs-xxl"/>
                    <span className="badge badge-square text-bg-warning topbar-badge">14</span>
                </DropdownToggle>

                <DropdownMenu className="p-0 dropdown-menu-end dropdown-menu-lg">
                    <div className="px-3 py-2 border-bottom">
                        <Row className="align-items-center">
                            <Col>
                                <h6 className="m-0 fs-md fw-semibold">Notifications</h6>
                            </Col>
                            <Col className="text-end">
                                <a href="#" className="badge text-bg-light badge-label py-1">14 Alerts</a>
                            </Col>
                        </Row>
                    </div>

                    <SimpleBar style={{maxHeight: '300px'}}>

                        {
                            notifications.map((notification) => (
                                <DropdownItem className="notification-item py-2 text-wrap" id={notification.id}
                                              key={notification.id}>
                                <span className="d-flex gap-2">
                                    <span className="avatar-md flex-shrink-0">
                                        <span
                                            className={`avatar-title bg-${notification.variant}-subtle text-${notification.variant} rounded fs-22`}>
                                            <notification.icon className={`fs-xl fill-${notification.variant}`}/>
                                        </span>
                                    </span>
                                    <span className="flex-grow-1 text-muted">
                                        <span
                                            className="fw-medium text-body">{notification.message}</span>
                                        <br/>
                                        <span className="fs-xs">{notification.timestamp}</span>
                                    </span>
                                    <Button variant="link" type="button" className="flex-shrink-0 text-muted p-0">
                                        <TbXboxXFilled className="fs-xxl"/>
                                    </Button>
                                </span>
                                </DropdownItem>
                            ))
                        }
                    </SimpleBar>

                    <a href="javascript:void(0);"
                       className="dropdown-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                        View All Alerts
                    </a>

                </DropdownMenu>
            </Dropdown>
        </div>
    )
}

export default NotificationDropdown