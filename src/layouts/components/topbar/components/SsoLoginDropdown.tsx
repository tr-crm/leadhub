import React from 'react';
import {
  Dropdown,
  DropdownMenu,
  DropdownToggle,
  DropdownItem,
  Row,
  Col,
} from 'react-bootstrap';
import { LuLogIn } from 'react-icons/lu';
import './SsoLoginDropdown.css';
import { getUserInfo } from '@/utils/auth';
const hubs = [
  { name: 'TestPrep Hub', baseUrl: 'https://tphub.thetrcrm.com', disabled: false },
  { name: 'ACS Hub', baseUrl: 'https://acshub.thetrcrm.com', disabled: false },
  { name: 'Immigration Hub', baseUrl: 'https://imghub.thetrcrm.com', disabled: true },
];
const SsoLoginDropdown: React.FC = () => {
   const user = getUserInfo();
   console.log(user);
   const currentUser = {
    username: user?.email_address || '', 
  };
  const redirectToHub = (baseUrl: string) => {
    const url = `${baseUrl}/login/sso?username=${encodeURIComponent(currentUser.username)}`;
    window.location.href = url;
  };
  return (
    <div className="topbar-item">
      <Dropdown align="end">
        <DropdownToggle as="button" className="topbar-link dropdown-toggle drop-arrow-none">
          <LuLogIn className="fs-xxl blink" />
          <span className="badge badge-square text-bg-warning topbar-badge">
            {hubs.length}
          </span>
        </DropdownToggle>
        <DropdownMenu className="p-0 dropdown-menu-end dropdown-menu-md">
          <div className="px-3 py-2 border-bottom">
            <Row className="align-items-center">
              <Col>
                <h6 className="m-0 fs-md fw-semibold">TRCRM Products</h6>
              </Col>
            </Row>
          </div>
          {hubs.map((hub, index) => (
            <DropdownItem
              key={index}
              as="button"
              onClick={() => !hub.disabled && redirectToHub(hub.baseUrl)}
              disabled={hub.disabled}
            >
              <LuLogIn className="me-2" />
              Go to {hub.name}
              {hub.disabled && ' (Disabled)'}
            </DropdownItem>
          ))}
        </DropdownMenu>
      </Dropdown>
    </div>
  );
};
export default SsoLoginDropdown;