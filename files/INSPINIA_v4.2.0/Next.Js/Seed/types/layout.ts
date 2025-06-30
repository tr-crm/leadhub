import {IconType} from "react-icons";

export type LayoutSkinType = 'classic' | 'material' | 'modern' | 'saas' | 'flat' | 'minimal' | 'galaxy';

export type LayoutThemeType = 'light' | 'dark' | 'system';

export type LayoutOrientationType = 'vertical' | 'horizontal'

export type TopBarType = {
    color: 'light' | 'dark' | 'gray' | 'gradient';
};

export type SideNavType = {
    size: 'default' | 'compact' | 'condensed' | 'on-hover' | 'on-hover-active' | 'offcanvas';
    color: 'light' | 'dark' | 'gray' | 'gradient' | 'image';
    user: boolean;
    isMobileMenuOpen: boolean;
};

export type LayoutPositionType = 'fixed' | 'scrollable'

export type LayoutWidthType = 'fluid' | 'boxed'

export type LayoutState = {
    skin: LayoutSkinType
    theme: LayoutThemeType;
    orientation: LayoutOrientationType;
    topBar: TopBarType;
    sidenav: SideNavType;
    position: LayoutPositionType;
    width: LayoutWidthType;
};

export type LayoutOffcanvasStatesType = {
    showCustomizer: boolean;
};

export type OffcanvasControlType = {
    isOpen: boolean;
    toggle: () => void;
};

export interface LayoutType extends LayoutState {
    changeSkin: (skin: LayoutSkinType, persist?: boolean) => void;
    changeTheme: (theme: LayoutThemeType, persist?: boolean) => void;
    changeOrientation: (orientation: LayoutOrientationType, persist?: boolean) => void;
    changeTopBarColor: (color: TopBarType['color'], persist?: boolean) => void;
    changeSideNavSize: (size: SideNavType['size'], persist?: boolean) => void;
    changeSideNavColor: (color: SideNavType['color'], persist?: boolean) => void;
    toggleSideNavUser: () => void;
    toggleMobileMenu: (isMobileMenuOpen: SideNavType['isMobileMenuOpen']) => void;
    changeLayoutPosition: (position: LayoutPositionType, persist?: boolean) => void;
    changeLayoutWidth: (width: LayoutWidthType, persist?: boolean) => void;
    customizer: OffcanvasControlType;
    reset: () => void;
    showBackdrop: () => void;
    hideBackdrop: () => void;
}

export type MenuItemType = {
    key: string
    label: string
    isTitle?: boolean
    icon?: IconType
    url?: string
    badge?: {
        variant: string
        text: string
    }
    parentKey?: string
    target?: string
    isDisabled?: boolean
    isSpecial?: boolean
    children?: MenuItemType[]
}