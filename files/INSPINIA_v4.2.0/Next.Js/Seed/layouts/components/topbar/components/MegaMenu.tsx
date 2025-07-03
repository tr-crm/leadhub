import {Col, Dropdown, DropdownMenu, DropdownToggle, Row} from "react-bootstrap";
import {TbChevronDown} from "react-icons/tb";
import SimpleBar from "simplebar-react";
import Link from "next/link";

type MegaMenuType = {
    title: string;
    links: {
        label: string;
        url: string;
    }[];
};

const megaMenuItems: MegaMenuType[] = [
    {
        title: 'Dashboard & Analytics',
        links: [
            {label: 'Sales Dashboard', url: '#;'},
            {label: 'Marketing Dashboard', url: '#;'},
            {label: 'Finance Overview', url: '#;'},
            {label: 'User Analytics', url: '#;'},
            {label: 'Traffic Insights', url: '#;'},
            {label: 'Performance Metrics', url: '#;'},
            {label: 'Conversion Tracking', url: '#;'}
        ]
    },
    {
        title: 'Project Management',
        links: [
            {label: 'Task Overview', url: '#;'},
            {label: 'Kanban Board', url: '#;'},
            {label: 'Gantt Chart', url: '#;'},
            {label: 'Team Collaboration', url: '#;'},
            {label: 'Project Milestones', url: '#;'},
            {label: 'Workflow Automation', url: '#;'},
            {label: 'Timesheets & Reports', url: '#;'}
        ]
    },
    {
        title: 'User Management',
        links: [
            {label: 'User Profiles', url: '#;'},
            {label: 'Access Control', url: '#;'},
            {label: 'Role Permissions', url: '#;'},
            {label: 'Activity Logs', url: '#;'},
            {label: 'Security Settings', url: '#;'},
            {label: 'User Groups', url: '#;'},
            {label: 'Authentication & Login', url: '#;'}
        ]
    }
];

const MegaMenu = () => {
    return (
        <div className="topbar-item d-none d-md-flex">
            <Dropdown>
                <DropdownToggle as={'button'}
                                className="topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none">
                    Boom Boom! 😍<TbChevronDown className="ms-1"/>
                </DropdownToggle>
                <DropdownMenu className="dropdown-menu-xxl p-0">
                    <SimpleBar className="h-100" style={{maxHeight: '380px'}}>
                        <Row className="g-0">
                            <Col className="col-12">
                                <div className="p-3 text-center bg-light bg-opacity-50">
                                    <h4 className="mb-0 fs-lg fw-semibold">Welcome to <span
                                        className="text-primary">INSPINIA+</span> Admin Theme.</h4>
                                </div>
                            </Col>
                        </Row>
                        <Row className="g-0">
                            {
                                megaMenuItems.map((item, idx) => (
                                    <Col md={4} key={idx}>
                                        <div className="p-3">
                                            <h5 className="mb-2 fw-semibold fs-sm dropdown-header">{item.title}</h5>
                                            <ul className="list-unstyled megamenu-list">

                                                {
                                                    item.links.map((link, index) => (
                                                        <li key={index}>
                                                            <Link href={link.url}
                                                                  className="dropdown-item">{link.label}</Link>
                                                        </li>
                                                    ))
                                                }
                                            </ul>
                                        </div>
                                    </Col>
                                ))
                            }
                        </Row>
                    </SimpleBar>
                </DropdownMenu>
            </Dropdown>

        </div>
    )
}

export default MegaMenu;