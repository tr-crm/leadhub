import { useEffect, useMemo, useState } from "react";
import { Link, useLocation } from "react-router-dom";
import { Collapse } from "react-bootstrap";
import { TbChevronDown } from "react-icons/tb";
import { useLayoutContext } from "@/context/useLayoutContext";
import { getUserInfo } from "@/utils/auth";
import { scrollToElement } from "@/helpers/layout";
import { menuItems } from "@/layouts/components/data";
import type { MenuItemType } from "@/types/layout";

const MenuItemWithChildren = ({
  item,
  openMenuKey,
  setOpenMenuKey,
  level = 0,
}: {
  item: MenuItemType;
  openMenuKey: string | null;
  setOpenMenuKey: (key: string | null) => void;
  level?: number;
}) => {
  const { pathname } = useLocation();
  const isTopLevel = level === 0;

  const [localOpen, setLocalOpen] = useState(false);
  const [didAutoOpen, setDidAutoOpen] = useState(false);

  const isChildActive = (children: MenuItemType[]): boolean =>
    children.some(
      (child) =>
        (child.url && pathname.startsWith(child.url)) ||
        (child.children && isChildActive(child.children))
    );

  const isActive = isChildActive(item.children || []);
  const isOpen = isTopLevel ? openMenuKey === item.key : localOpen;

  useEffect(() => {
    if (isActive && !didAutoOpen) {
      isTopLevel ? setOpenMenuKey(item.key) : setLocalOpen(true);
      setDidAutoOpen(true);
    }
  }, [isActive, isTopLevel, item.key, setOpenMenuKey, didAutoOpen]);

  const toggleOpen = () => {
    isTopLevel ? setOpenMenuKey(isOpen ? null : item.key) : setLocalOpen(!localOpen);
  };

  return (
    <li className={`side-nav-item ${isOpen ? "active" : ""}`}>
      <button className="side-nav-link" onClick={toggleOpen} aria-expanded={isOpen}>
        {item.icon && <span className="menu-icon"><item.icon /></span>}
        <span className="menu-text">{item.label}</span>
        <span className="menu-arrow"><TbChevronDown /></span>
      </button>
      <Collapse in={isOpen}>
        <div>
          <ul className="sub-menu">
            {(item.children || []).map((child) =>
              child.children ? (
                <MenuItemWithChildren
                  key={child.key}
                  item={child}
                  openMenuKey={openMenuKey}
                  setOpenMenuKey={setOpenMenuKey}
                  level={level + 1}
                />
              ) : (
                <MenuItem key={child.key} item={child} />
              )
            )}
          </ul>
        </div>
      </Collapse>
    </li>
  );
};

const MenuItem = ({ item }: { item: MenuItemType }) => {
  const { pathname } = useLocation();
  const { sidenav, hideBackdrop } = useLayoutContext();
  const isActive = item.url && pathname.startsWith(item.url);

  const handleClick = () => {
    if (sidenav.size === "offcanvas") hideBackdrop();
  };

  return (
    <li className={`side-nav-item ${isActive ? "active" : ""}`}>
      <Link
        to={item.url ?? "/"}
        className={`side-nav-link ${isActive ? "active" : ""} ${item.isDisabled ? "disabled" : ""}`}
        onClick={handleClick}
      >
        {item.icon && <span className="menu-icon"><item.icon /></span>}
        <span className="menu-text">{item.label}</span>
        {item.badge && (
          <span className={`badge bg-${item.badge.variant}`}>{item.badge.text}</span>
        )}
      </Link>
    </li>
  );
};

const AppMenu = () => {
  const [openMenuKey, setOpenMenuKey] = useState<string | null>(null);
  const user = getUserInfo();
  // const userLevel: number = user?.type ?? 0;
  const userLevel = parseInt(user?.type ?? "0", 10);

  const filterMenuItems = (items: MenuItemType[]): MenuItemType[] =>
    items
      .filter(item => {
        const allowedLevels = item.minLevel ?? [];
        return allowedLevels.length === 0 || allowedLevels.includes(userLevel);
      })
      .map(item => ({
        ...item,
        children: item.children ? filterMenuItems(item.children) : undefined,
      }));

  const visibleMenuItems = useMemo(() => filterMenuItems(menuItems), [userLevel]);

  useEffect(() => {
    const activeItem: HTMLElement | null = document.querySelector(".side-nav-link.active");
    if (activeItem) {
      const wrapper = document.querySelector("#sidenav .simplebar-content-wrapper");
      if (wrapper) {
        const offset = activeItem.offsetTop - window.innerHeight * 0.4;
        scrollToElement(wrapper, offset, 500);
      }
    }
  }, []);

  useEffect(() => {
    // console.log("User Level:", userLevel);
    // console.log("Visible Menu Items:", visibleMenuItems);
  }, [userLevel, visibleMenuItems]);

  return (
    <ul className="side-nav">
      {visibleMenuItems.map((item) =>
        item.isTitle ? (
          <li className="side-nav-title" key={item.key}>{item.label}</li>
        ) : item.children ? (
          <MenuItemWithChildren
            key={item.key}
            item={item}
            openMenuKey={openMenuKey}
            setOpenMenuKey={setOpenMenuKey}
          />
        ) : (
          <MenuItem key={item.key} item={item} />
        )
      )}
    </ul>
  );
};

export default AppMenu;
