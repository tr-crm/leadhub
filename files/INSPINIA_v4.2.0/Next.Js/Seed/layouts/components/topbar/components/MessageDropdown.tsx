import {IconType} from "react-icons";
import {Button, Col, Dropdown, DropdownItem, DropdownMenu, DropdownToggle, Row} from "react-bootstrap";
import {LuMails, LuShieldCheck} from "react-icons/lu";
import SimpleBar from "simplebar-react";
import {TbXboxXFilled} from "react-icons/tb";
import Image, {StaticImageData} from "next/image";

import user1 from '@/assets/images/users/user-1.jpg';
import user2 from '@/assets/images/users/user-2.jpg';
import user4 from '@/assets/images/users/user-4.jpg';
import user5 from '@/assets/images/users/user-5.jpg';
import user6 from '@/assets/images/users/user-6.jpg';

type MessageItemType = {
    id: string;
    user: {
        name: string;
        avatar?: StaticImageData;
        icon?: IconType;
        bgClass?: string;
    };
    action: string;
    context: string;
    timestamp: string;
    active?: boolean;
};

const messages: MessageItemType[] = [
    {
        id: 'message-1',
        user: {
            name: 'Liam Carter',
            avatar: user1
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
            avatar: user2
        },
        action: 'commented on',
        context: 'Marketing Campaign Q3',
        timestamp: '12 minutes ago'
    },
    {
        id: 'message-3',
        user: {
            name: 'Noah Blake',
            icon: LuShieldCheck,
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
            avatar: user4
        },
        action: 'sent an invoice for',
        context: 'Service Renewal',
        timestamp: '1 hour ago'
    },
    {
        id: 'message-5',
        user: {
            name: 'Ethan Moore',
            avatar: user5
        },
        action: 'completed the task',
        context: 'UI Review',
        timestamp: '2 hours ago'
    },
    {
        id: 'message-6',
        user: {
            name: 'Olivia White',
            avatar: user6
        },
        action: 'assigned you a task in',
        context: 'Sales Pipeline',
        timestamp: 'Yesterday'
    }
];

const MessageDropdown = () => {
    return (
        <div className="topbar-item">
            <Dropdown align="end">
                <DropdownToggle as={'button'} className="topbar-link dropdown-toggle drop-arrow-none">
                    <LuMails className="fs-xxl"/>
                    <span className="badge text-bg-success badge-circle topbar-badge">7</span>
                </DropdownToggle>

                <DropdownMenu className="p-0 dropdown-menu-end dropdown-menu-lg">
                    <div className="px-3 py-2 border-bottom">
                        <Row className="align-items-center">
                            <Col>
                                <h6 className="m-0 fs-md fw-semibold">Messages</h6>
                            </Col>
                            <Col className="text-end">
                                <a href="#" className="badge badge-soft-success badge-label py-1">09 Notifications</a>
                            </Col>
                        </Row>
                    </div>

                    <SimpleBar style={{maxHeight: '300px'}}>
                        {
                            messages.map((message) => (
                                <DropdownItem className={`notification-item py-2 text-wrap ${message.active ? 'active' : ''}`} id={message.id}
                                              key={message.id}>
                                <span className="d-flex gap-3">

                                    {
                                        message.user.icon &&
                                        <span className="avatar-md flex-shrink-0">
                                                 <span
                                                     className={`avatar-title rounded-circle fs-22 ${message.user.bgClass}`}>
                                                     <message.user.icon className="fs-22 fill-white"/>
                                                 </span>
                                            </span>
                                    }
                                    {
                                        message.user.avatar &&
                                        <span className="flex-shrink-0">
                                                  <Image src={message.user.avatar.src} height={36} width={36}
                                                       className="avatar-md rounded-circle"
                                                       alt="User Avatar"/>
                                            </span>
                                    }


                                    <span className="flex-grow-1 text-muted">
                                        <span
                                            className="fw-medium text-body">{message.user.name}</span> {message.action}<span
                                        className="fw-medium text-body"> {message.context}</span>
                                        <br/>
                                        <span className="fs-xs">{message.timestamp}</span>
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
                        Read All Messages
                    </a>

                </DropdownMenu>
            </Dropdown>
        </div>
    )
}

export default MessageDropdown