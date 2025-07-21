import { useState, useEffect } from 'react';
import { Col, Dropdown, DropdownItem, DropdownMenu, DropdownToggle, Row} from "react-bootstrap";

import {
    LuBell,LuFacebook ,LuImport 
} from "react-icons/lu";
import { useNavigate } from 'react-router-dom';
import { toast } from 'react-toastify';
import SimpleBar from "simplebar-react";
import type {IconType} from "react-icons";
import { getUserInfo } from '@/utils/auth';
import type { NotificationPayload, UpdateNotificationPayload } from '@/services/leadservice';
import { getTransactionNotificationList, updateTransactionNotification } from '@/services/leadservice';




type NotificationType = {
    id: string;
    icon: IconType;
    variant: 'danger' | 'warning' | 'success' | 'primary' | 'info' | 'secondary';
    message: string;
    timestamp: string;
    transfer_type?: string; 
}


const formatTimestamp = (dateString: string): string => {
  const date = new Date(dateString);
  return date.toLocaleString(); 
};


const NotificationDropdown = () => {
    const [notifications, setNotifications] = useState<NotificationType[]>([]); 
    const navigate = useNavigate();
    const user = getUserInfo();
    const handleNotificationClick = async (notification: NotificationType & { transfer_type?: string }) => {
        const payload: UpdateNotificationPayload = {
            userIdVal: user.id,
            tokenVal: user.access_token,
            typeVal: user.type,
            idVal: Number(notification.id),
        };

    try {
        const response = await updateTransactionNotification(payload);

        if (response.response === 'login_error') {
        toast.dismiss();
        toast.error(response.message);
        return;
        } else if (response.response === 'error') {
        toast.dismiss();
        toast.error(response.message);
        } else if (response.response === 'success') {
        fetchNotifications();
        toast.dismiss();
        toast.success(response.message);
        }
    } catch (error) {
        console.error("Failed to fetch notifications:", error);
    }

    const type = notification.transfer_type;

    if (type == '1') {
        navigate("/leads/webhookleadlist");
    } else if (type == '2') {
        navigate("/leads/import/list");
    } else {
        navigate("/login");
    }
     fetchNotifications();
    };

    const getVariantFromTransferType = (type: string): NotificationType['variant'] => {
        switch (type) {
            case '1':
            return 'info'; 
            case '2':
            return 'warning'; 
            default:
            return 'secondary';
        }
    };

    const getIconFromTransferType = (type: string): NotificationType['icon'] => {
        switch (type) {
            case '1':
            return LuFacebook; 
            case '2':
            return LuImport; 
            default:
            return LuBell;
        }
    };

    const totalCount = notifications.length;
  const fetchNotifications = async () => {
    const payload: NotificationPayload = {
      userIdVal: user.id,
      tokenVal: user.access_token,
      typeVal: user.type,
    };

    try {
      const response = await getTransactionNotificationList(payload);
      const data = response.data;

     const formatted = data.map((item: any) => ({
      id: item.id,
      icon: getIconFromTransferType(item.transfer_type) ,
      variant: getVariantFromTransferType(item.transfer_type),
      message: item.description,
      timestamp: formatTimestamp(item.created_at),
      transfer_type: item.transfer_type,
    }));

      setNotifications(formatted);
    } catch (error) {
      console.error("Failed to fetch notifications:", error);
    }
  };
    useEffect(() => {
    let isFetching = false;

    const safeFetchNotifications = async () => {
        if (isFetching) return;
        isFetching = true;
        try {
        await fetchNotifications();
        } finally {
        isFetching = false;
        }
    };

    // Initial call
    safeFetchNotifications();

    // Poll every 5 minutes
    const intervalId = setInterval(safeFetchNotifications, 300000);
    return () => clearInterval(intervalId);
    }, []);

    return (
        <div className="topbar-item">
            <Dropdown align="end">
                <DropdownToggle as={'button'} className="topbar-link dropdown-toggle drop-arrow-none">
                    <LuBell className="fs-xxl"/>
                    <span className="badge badge-square text-bg-warning topbar-badge">{totalCount}</span>
                </DropdownToggle>

                <DropdownMenu className="p-0 dropdown-menu-end dropdown-menu-lg">
                    <div className="px-3 py-2 border-bottom">
                        <Row className="align-items-center">
                            <Col>
                                <h6 className="m-0 fs-md fw-semibold">Notifications</h6>
                            </Col>
                            <Col className="text-end">
                                <a href="#" className="badge text-bg-light badge-label py-1">{totalCount} Alerts</a>
                            </Col>
                        </Row>
                    </div>

                    <SimpleBar style={{maxHeight: '300px'}}>

                        {
                        notifications.map((notification) => (
                            <DropdownItem
                            className="notification-item py-2 text-wrap"
                            id={notification.id}
                            key={notification.id}
                            onClick={() => handleNotificationClick(notification)} // Optional: Navigate on full row click
                            >
                            <span className="d-flex gap-2 align-items-start">
                                {/* Avatar + Icon */}
                                <span className="avatar-md flex-shrink-0">
                                <span
                                    className={`avatar-title bg-${notification.variant}-subtle text-${notification.variant} rounded fs-22`}
                                >
                                    <notification.icon className={`fs-xl fill-${notification.variant}`} />
                                </span>
                                </span>

                                {/* Message and Timestamp */}
                                <span className="flex-grow-1 text-muted">
                                <span className="fw-medium text-body">{notification.message}</span>
                                <br />
                                <span className="fs-xs">{notification.timestamp}</span>
                                </span>

                            </span>
                            </DropdownItem>
                        ))
                        }

                    </SimpleBar>

                    {/* <a href="javascript:void(0);"
                       className="dropdown-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                        View All Alerts
                    </a> */}

                </DropdownMenu>
            </Dropdown>
        </div>
    )
}

export default NotificationDropdown