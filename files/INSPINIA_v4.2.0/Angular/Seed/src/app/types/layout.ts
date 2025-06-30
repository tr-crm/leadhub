export type LayoutSkinType = 'classic' | 'material' | 'modern' | 'saas' | 'flat' | 'minimal' | 'galaxy';

export type LayoutThemeType = 'light' | 'dark' | 'system';

export type LayoutOrientationType = 'vertical' | 'horizontal'

export type LayoutWidthType = 'fluid' | 'boxed';

export type TopBarType = {
    color: 'light' | 'dark' | 'gray' | 'gradient';
};

export type SideNavType = {
    size: 'default' | 'compact' | 'condensed' | 'on-hover' | 'on-hover-active' | 'offcanvas';
    color: 'light' | 'dark' | 'gray' | 'gradient' | 'image';
    user: boolean;
};

export type LayoutPositionType = 'fixed' | 'scrollable'

export interface LayoutState {
    skin: LayoutSkinType;
    theme: LayoutThemeType;
    orientation: LayoutOrientationType;
    position: LayoutPositionType;
    width: LayoutWidthType;
    topbar: TopBarType;
    sidenav: SideNavType;
    isLoading: boolean
}

export type MenuItemType = {
    label: string
    isTitle?: boolean
    icon?: string
    url?: string
    badge?: {
        variant: string
        text: string
    }
    target?: string
    isDisabled?: boolean
    isSpecial?: boolean
    children?: MenuItemType[]
    isCollapsed?: boolean
}

export type LanguageOptionType = {
    code: string;
    name: string;
    nativeName: string;
    flag: string;
}
