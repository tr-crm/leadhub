import Link from "next/link";
import {Fragment} from "react";
import {TbSettings} from "react-icons/tb";
import {Dropdown, DropdownDivider, DropdownItem, DropdownMenu, DropdownToggle} from "react-bootstrap";
import {userDropdownItems} from "@/layouts/components/data";

import user2 from "@/assets/images/users/user-2.jpg"
import Image from "next/image";


const UserProfile = () => {
    return (
        <div className="sidenav-user">
            <div className="d-flex justify-content-between align-items-center">
                <div>
                    <Link href="/" className="link-reset">
                        <Image src={user2.src} alt="user-image" width="36" height="36"
                               className="rounded-circle mb-2 avatar-md"/>
                        <span className="sidenav-user-name fw-bold">Damian D.</span>
                        <span className="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
                    </Link>
                </div>
                <Dropdown>
                    <DropdownToggle as={'a'} role="button" aria-label="profile dropdown"
                                    className="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon">
                        <TbSettings className="fs-24 align-middle ms-1"/>
                    </DropdownToggle>

                    <DropdownMenu>
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
        </div>
    )
}

export default UserProfile