import {MenuItemType} from "@/types/layout";
import {Dropdown, DropdownMenu, DropdownToggle} from "react-bootstrap";
import {Fragment} from "react";
import Link from "next/link";
import {horizontalMenuItems} from "@/layouts/components/data";
import {TbChevronDown} from "react-icons/tb";
import {usePathname} from "next/navigation";


const MenuItemWithChildren = ({item, wrapperClass, togglerClass, level}: {
    item: MenuItemType,
    wrapperClass?: string,
    togglerClass?: string,
    level?: number,
}) => {

    const menuLevel = level ?? 1
    const pathname = usePathname();

    const isChildActive = (items: MenuItemType[]): boolean =>
        items.some(child => {
            if (child.url && pathname.endsWith(child.url)) return true;
            if (child.children) return isChildActive(child.children);
            return false;
        });

    const isActive = isChildActive(item.children || []);

    return (
        <Dropdown as={menuLevel > 1 ? 'div' : 'li'} drop={menuLevel > 1 ? 'end' : 'down'}
                  className={`${wrapperClass ?? ''} ${isActive ? 'active' : ''}`}>
            <DropdownToggle as={'a'} className={`${togglerClass} dropdown-toggle drop-arrow-none ${isActive ? 'active' : ''}`}>
                {item.icon && <span className="menu-icon"><item.icon/></span>}
                <span className="menu-text"> {item.label} </span>
                {!item.badge && <div className="menu-arrow"><TbChevronDown/></div>}
            </DropdownToggle>
            <DropdownMenu>
                {
                    (item.children || []).map((child, idx) => (
                        <Fragment key={idx}>
                            {
                                child.children ?
                                    <MenuItemWithChildren item={child} togglerClass="dropdown-item"
                                                          level={menuLevel + 1}/> :
                                    <MenuItem item={child} linkClass="dropdown-item" level={menuLevel + 1}/>
                            }
                        </Fragment>
                    ))
                }
            </DropdownMenu>
        </Dropdown>
    )
}

const MenuItem = ({item, linkClass, wrapperClass, level}: {
    item: MenuItemType,
    linkClass?: string,
    wrapperClass?: string,
    level?: number,
}) => {

    const menuLevel = level ?? 1
    const pathname = usePathname();
    const isActive = item.url && pathname.endsWith(item.url);

    const link = (
        <Link href={item.url ?? '/'} className={`${linkClass ?? ''} ${isActive ? 'active' : ''}`}>
            {item.icon && <span className="menu-icon"><item.icon/></span>}
            <span className="menu-text">{item.label}</span>
            {item.badge && (
                <span className={`badge text-bg-${item.badge.variant} opacity-50`}>
                      {item.badge.text}
                </span>
            )}
        </Link>
    );

    return menuLevel > 1 ? link : <li className={`${wrapperClass ?? ''} ${isActive ? 'active' : ''}`}>{link}</li>
}


const AppMenu = () => {
    return (
        <div className="collapse navbar-collapse">
            <ul className="navbar-nav">
                {
                    horizontalMenuItems.map((item, idx) => (
                        <Fragment key={idx}>
                            {
                                item.children ? <MenuItemWithChildren item={item} wrapperClass="nav-item"
                                                                      togglerClass="nav-link"/> :
                                    <MenuItem item={item} linkClass="nav-link" wrapperClass="nav-item"/>
                            }
                        </Fragment>
                    ))
                }
            </ul>
        </div>
    )
}

export default AppMenu