// import {Link} from "react-router";
import { useNavigate, Link } from 'react-router-dom';
import {Fragment} from "react";
import {Dropdown, DropdownDivider, DropdownItem, DropdownMenu, DropdownToggle} from "react-bootstrap";
import {userDropdownItems} from "@/layouts/components/data";
import {TbChevronDown} from "react-icons/tb";
import { capitalizeWords } from '@/utils/stringUtils'; // adjust path if needed
import { getUserInfo } from '@/utils/auth';
import user2 from "@/assets/images/users/user-2.jpg"
import Cookies from 'js-cookie';
import type { logoutpayload } from '@/services/userlogsservice';
import { logoutService } from '@/services/userlogsservice';


const UserProfile = () => {
    const navigate = useNavigate();
    const user = getUserInfo();
    const handleLogout = async () => {
      const payload: logoutpayload = {
        userIdVal: user.id,
        tokenVal: user.access_token,
        typeVal: user.type,
        multiLoginVal : user.multi_login_status
      };

      try {
      const response = await logoutService(payload);
      const d = response.data[0];

      if (!d) {
        console.warn("Logout response missing expected data");
      }
      } catch (error) {
        console.error("Logout API failed:", error);
      } finally {
        Cookies.remove("accessToken");
        Cookies.remove("LeadHubLoginAccess");
        navigate("/login");
      }
    };
    return (
        <div className="topbar-item nav-user">
            <Dropdown align="end">
                <DropdownToggle as={'a'} className="topbar-link dropdown-toggle drop-arrow-none px-2">
                    <img src={user2} width="32" height="32" className="rounded-circle me-lg-2 d-flex"
                         alt="user-image"/>
                    <div className="d-lg-flex align-items-center gap-1 d-none">
                        <h5 className="my-0">{user?.full_name ? capitalizeWords(user.full_name) : ''}</h5>
                        <TbChevronDown className="align-middle"/>
                    </div>
                </DropdownToggle>
                {/* <DropdownMenu className="dropdown-menu-end">
                    {
                        userDropdownItems.map((item, idx) => (
                            <Fragment key={idx}>
                                {
                                    item.isHeader ?
                                        <div className="dropdown-header noti-title">
                                            <h6 className="text-overflow m-0">{item.label}</h6>
                                        </div> :
                                        item.isDivider ? <DropdownDivider/> :
                                            <DropdownItem as={Link} to={item.url ?? '#'} className={item.class}>
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
                </DropdownMenu> */}
                <DropdownMenu className="dropdown-menu-end">
                  {userDropdownItems.map((item, idx) => (
                    <Fragment key={idx}>
                      {item.isHeader ? (
                        <div className="dropdown-header noti-title">
                          <h6 className="text-overflow m-0">{capitalizeWords(item.label || '')}</h6>
                        </div>
                      ) : item.isDivider ? (
                        <DropdownDivider />
                      ) : (
                        <DropdownItem
                          as={item.isLogout ? 'button' : Link}
                          // to={item.url ?? '#'}
                          className={item.class}
                          onClick={item.isLogout ? handleLogout : undefined}
                        >
                          {item.icon && <item.icon className="me-2 fs-17 align-middle" />}
                          <span className="align-middle">{capitalizeWords(item.label || '')}</span>
                        </DropdownItem>
                      )}
                    </Fragment>
                  ))}
                </DropdownMenu>


            </Dropdown>
        </div>
    )
}

export default UserProfile;