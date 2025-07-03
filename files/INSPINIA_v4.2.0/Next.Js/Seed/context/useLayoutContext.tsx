'use client';

import {createContext, use, useCallback, useEffect, useMemo, useState} from 'react';
import {useLocalStorage} from 'usehooks-ts';
import {
    LayoutOffcanvasStatesType,
    LayoutOrientationType,
    LayoutState,
    LayoutType,
    SideNavType,
    OffcanvasControlType,
    LayoutThemeType, TopBarType, LayoutSkinType, LayoutPositionType, LayoutWidthType,
} from '@/types/layout';
import {ChildrenType} from "@/types";
import {toggleAttribute} from "@/helpers/layout";


const INIT_STATE: LayoutState = {
    skin: 'classic',
    theme: 'light',
    orientation: 'vertical',
    sidenav: {
        size: 'default',
        color: 'dark',
        user: true,
        isMobileMenuOpen: false,
    },
    topBar: {
        color: 'light'
    },
    position: 'fixed',
    width: 'fluid',
};

const LayoutContext = createContext<LayoutType | undefined>(undefined);

const useLayoutContext = () => {
    const context = use(LayoutContext);
    if (!context) {
        throw new Error('useLayoutContext can only be used within LayoutProvider');
    }
    return context;
};

const LayoutProvider = ({children}: ChildrenType) => {

        const [settings, setSettings] = useLocalStorage<LayoutState>('__INSPINIA_NEXT_CONFIG__', INIT_STATE);

        const [offcanvasStates, setOffcanvasStates] = useState<LayoutOffcanvasStatesType>({
            showCustomizer: false,
        });

        // update settings
        const updateSettings = useCallback(
            (_newSettings: Partial<LayoutState>) => {
                setSettings((prevSettings) => ({
                    ...prevSettings,
                    ..._newSettings,
                    sidenav: {
                        ...prevSettings.sidenav,
                        ...(_newSettings.sidenav || {}),
                    },
                    topBar: {
                        ...prevSettings.topBar,
                        ...(_newSettings.topBar || {}),
                    },
                }));
            },
            [setSettings]
        );

        const changeSkin = useCallback((nSkin: LayoutSkinType, persist = true) => {
            toggleAttribute('data-skin', nSkin)
            if (persist) updateSettings({skin: nSkin});
        }, [updateSettings]);

        const changeTheme = useCallback((nTheme: LayoutThemeType, persist = true) => {
            toggleAttribute('data-bs-theme', nTheme)
            if (persist) updateSettings({theme: nTheme});
        }, [updateSettings]);

        const changeOrientation = useCallback(
            (nOrientation: LayoutOrientationType, persist = true) => {
                toggleAttribute('data-layout', nOrientation === 'horizontal' ? 'topnav' : '')
                if (persist) updateSettings({orientation: nOrientation});
            }, [updateSettings]);

        const changeTopBarColor = useCallback(
            (nColor: TopBarType['color'], persist = true) => {
                toggleAttribute('data-topbar-color', nColor)
                if (persist) updateSettings({topBar: {color: nColor}});
            }, [updateSettings]);

        const changeSideNavSize = useCallback(
            (nSize: SideNavType['size'], persist = true) => {
                toggleAttribute('data-sidenav-size', nSize)
                if (persist) updateSettings({sidenav: {...settings.sidenav, size: nSize}});
            }, [settings.sidenav, updateSettings]);

        const changeSideNavColor = useCallback(
            (nColor: SideNavType['color'], persist = true) => {
                toggleAttribute('data-menu-color', nColor)
                if (persist) updateSettings({sidenav: {...settings.sidenav, color: nColor}});
            }, [settings.sidenav, updateSettings]);

        const toggleSideNavUser = () => {
            toggleAttribute('data-sidenav-user', (!settings.sidenav.user).toString())
            updateSettings({sidenav: {...settings.sidenav, user: !settings.sidenav.user}});
        };

        const toggleMobileMenu = () => {
            updateSettings({sidenav: {...settings.sidenav, isMobileMenuOpen: !settings.sidenav.isMobileMenuOpen}});
        };

        const changeLayoutPosition = useCallback(
            (nPosition: LayoutPositionType, persist = true) => {
                toggleAttribute('data-layout-position', nPosition)
                if (persist) updateSettings({position: nPosition});
            }, [updateSettings]);

        const changeLayoutWidth = useCallback(
            (nWidth: LayoutWidthType, persist = true) => {
                toggleAttribute('data-layout-width', nWidth)
                if (persist) updateSettings({width: nWidth});
            }, [updateSettings]);

        const toggleCustomizer: OffcanvasControlType['toggle'] = () => {
            setOffcanvasStates({
                ...offcanvasStates,
                showCustomizer: !offcanvasStates.showCustomizer,
            });
        };

        const customizer: LayoutType['customizer'] = {
            isOpen: offcanvasStates.showCustomizer,
            toggle: toggleCustomizer,
        };

        const reset = useCallback(() => {
            setSettings(INIT_STATE);
        }, [setSettings]);


        const showBackdrop = () => {
            const backdrop = document.createElement('div');
            backdrop.id = 'custom-backdrop';
            backdrop.className = 'offcanvas-backdrop fade show';
            document.body.appendChild(backdrop);
            document.body.style.overflow = 'hidden';
            if (window.innerWidth > 767) {
                document.body.style.paddingRight = '15px';
            }
            backdrop.addEventListener('click', () => {
                const html = document.documentElement;
                html.classList.remove('sidebar-enable');
                hideBackdrop();
            })
        }

        const hideBackdrop = () => {
            const backdrop = document.getElementById('custom-backdrop');
            if (backdrop) {
                document.body.removeChild(backdrop);
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
            }
        }

        useEffect(() => {

            const getSystemTheme = (): "light" | "dark" => {
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : "light";
            };

            toggleAttribute('data-skin', settings.skin)
            toggleAttribute('data-bs-theme', settings.theme === 'system' ? getSystemTheme() : settings.theme)
            toggleAttribute('data-topbar-color', settings.topBar.color)
            toggleAttribute('data-menu-color', settings.sidenav.color)
            toggleAttribute('data-sidenav-size', settings.sidenav.size)
            toggleAttribute('data-sidenav-user', (settings.sidenav.user).toString())
            toggleAttribute('data-layout-position', settings.position)
            toggleAttribute('data-layout-width', settings.width)
            toggleAttribute('data-layout', settings.orientation === 'horizontal' ? 'topnav' : '')

        }, [settings])

        useEffect(() => {
            if (settings.orientation === 'vertical') {
                window.addEventListener('resize', () => {

                    const width = window.innerWidth;

                    if (width <= 767.98) {
                        changeSideNavSize('offcanvas', false);
                    } else if (width <= 1140 && settings.sidenav.size !== 'offcanvas') {
                        changeSideNavSize(settings.sidenav.size === 'on-hover' ? 'condensed' : 'condensed', false);
                    } else {
                        changeSideNavSize(settings.sidenav.size);
                    }
                })
            }

            if (settings.orientation === 'horizontal') {
                window.addEventListener('resize', () => {
                    const width = window.innerWidth;
                    if (width < 992) {
                        changeSideNavSize('offcanvas');
                    } else {
                        changeSideNavSize('default');
                    }
                })
            }
        }, [])

        return (
            <LayoutContext.Provider
                value={useMemo(
                    () => ({
                        ...settings,
                        changeSkin,
                        changeTheme,
                        changeOrientation,
                        changeTopBarColor,
                        changeSideNavSize,
                        changeSideNavColor,
                        toggleSideNavUser,
                        toggleMobileMenu,
                        changeLayoutPosition,
                        changeLayoutWidth,
                        customizer,
                        reset,
                        showBackdrop,
                        hideBackdrop,
                    }), [settings, changeSkin, changeTheme, changeOrientation, changeTopBarColor, changeSideNavSize, changeSideNavColor, changeLayoutPosition, changeLayoutWidth, customizer]
                )}
            >
                {children}
            </LayoutContext.Provider>
        );
    }
;

export {LayoutProvider, useLayoutContext};