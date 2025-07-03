import Link from "next/link";
import {Fragment} from "react";
import {Dropdown, DropdownDivider, DropdownItem, DropdownMenu, DropdownToggle} from "react-bootstrap";
import {userDropdownItems} from "@/layouts/components/data";
import {TbChevronDown} from "react-icons/tb";
import Image from "next/image";

import user2 from "@/assets/images/users/user-2.jpg"

const UserProfile = () => {
    return (
        <div className="topbar-item nav-user">
            <Dropdown align="end">
                <DropdownToggle as={'a'} className="topbar-link dropdown-toggle drop-arrow-none px-2">
                    <Image src={user2.src} width="32" height="32" className="rounded-circle me-lg-2 d-flex"
                           alt="user-image"/>
                    <div className="d-lg-flex align-items-center gap-1 d-none">
                        <h5 className="my-0">Damian D.</h5>
                        <TbChevronDown className="align-middle"/>
                    </div>
                </DropdownToggle>
                <DropdownMenu className="dropdown-menu-end">
                    {
                        userDropdownItems.map((item, idx) => (
                            <Fragment key={idx}>
                                {
                                    item.isHeader ?
                                        <div className="dropdown-header noti-title">
                                            <h6 className="text-overflow m-0">{item.label}</h6>
                                        </div> :
                                        item.isDivider ? <DropdownDivider/> :
                                            <DropdownItem as={Link} href={item.url} className={item.class}>
                                                {
                                                    item.icon &&
                                                    <item.icon className="me-2 fs-17 align-middle"/>
                                                }
                                                <span className="align-middle">{item.label}</span>
                                            </DropdownItem>
                                }
                            </Fragment>
                        ))
                    }
                </DropdownMenu>

            </Dropdown>
        </div>
    )
}

export default UserProfile;