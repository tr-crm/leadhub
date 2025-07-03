import {Fragment} from "react";
import {Button, Col, Offcanvas, Row} from "react-bootstrap";
import SimpleBar from 'simplebar-react';
import {useLayoutContext} from "@/context/useLayoutContext";
import Image, {StaticImageData} from "next/image";
import {
    LayoutOrientationType,
    LayoutPositionType,
    LayoutSkinType,
    LayoutThemeType,
    SideNavType,
    TopBarType
} from "@/types/layout";
import {toPascalCase} from "@/helpers/casing";
import {TbX} from "react-icons/tb";


import pattern from "@/assets/images/user-bg-pattern.png"

import classicImg from "@/assets/images/layouts/themes/theme-classic.png";
import materialImg from "@/assets/images/layouts/themes/theme-material.png";
import modernImg from "@/assets/images/layouts/themes/theme-modern.png";
import saasImg from "@/assets/images/layouts/themes/theme-saas.png";
import flatImg from "@/assets/images/layouts/themes/theme-flat.png";
import minimalImg from "@/assets/images/layouts/themes/theme-minimal.png";
import galaxyImg from "@/assets/images/layouts/themes/theme-galaxy.png";

import light from "@/assets/images/layouts/light.svg";
import lightSideNavImg from "@/assets/images/layouts/light.svg";
import dark from "@/assets/images/layouts/dark.svg";
import system from "@/assets/images/layouts/system.svg";

import lightTopBarImg from "@/assets/images/layouts/topbar-light.svg";
import darkTopBarImg from "@/assets/images/layouts/topbar-dark.svg";
import grayTopBarImg from "@/assets/images/layouts/topbar-gray.svg";
import gradientTopBarImg from "@/assets/images/layouts/topbar-gradient.svg";
import darkSideNavImg from "@/assets/images/layouts/side-dark.svg";
import graySideNavImg from "@/assets/images/layouts/side-gray.svg";
import gradientSideNavImg from "@/assets/images/layouts/side-gradient.svg";
import imageSideNavImg from "@/assets/images/layouts/side-image.svg";

import compactSideNavImg from "@/assets/images/layouts/sidebar-compact.svg";
import smallSideNavImg from "@/assets/images/layouts/sidebar-sm.svg";
import fullSideNavImg from "@/assets/images/layouts/sidebar-full.svg";

type SkinOptionType = {
    skin: LayoutSkinType;
    image: StaticImageData;
    disabled?: boolean;
};

type ThemeOptionType = {
    theme: LayoutThemeType;
    image: StaticImageData;
};

type OrientationOptionType = {
    orientation: LayoutOrientationType;
    image: StaticImageData;
};

type TopBarColorOptionType = {
    color: TopBarType['color'];
    image: StaticImageData;
};

type SideNavColorOptionType = {
    color: SideNavType['color'];
    image: StaticImageData;
};

type SideNavSizeOptionType = {
    label: string;
    size: SideNavType['size'];
    image: StaticImageData;
};

const skinOptions: SkinOptionType[] = [
    {skin: "classic", image: classicImg},
    {skin: "material", image: materialImg},
    {skin: "modern", image: modernImg},
    {skin: "saas", image: saasImg},
    {skin: "flat", image: flatImg},
    {skin: "minimal", image: minimalImg},
    {skin: "galaxy", image: galaxyImg, disabled: true}
]

const themeOptions: ThemeOptionType[] = [
    {theme: "light", image: light},
    {theme: "dark", image: dark},
    {theme: "system", image: system},
];

const orientationOptions: OrientationOptionType[] = [
    {orientation: "vertical", image: darkSideNavImg},
    {orientation: "horizontal", image: fullSideNavImg},
];

const topBarColorOptions: TopBarColorOptionType[] = [
    {color: "light", image: lightTopBarImg},
    {color: "dark", image: darkTopBarImg},
    {color: "gray", image: grayTopBarImg},
    {color: "gradient", image: gradientTopBarImg},
];

const sidenavColorOptions: SideNavColorOptionType[] = [
    {color: "light", image: lightSideNavImg},
    {color: "dark", image: darkSideNavImg},
    {color: "gray", image: graySideNavImg},
    {color: "gradient", image: gradientSideNavImg},
    {color: "image", image: imageSideNavImg},
];

const sidenavSizeOptions: SideNavSizeOptionType[] = [
    {size: "default", image: lightSideNavImg, label: "Default"},
    {size: "compact", image: compactSideNavImg, label: "Compact"},
    {size: "condensed", image: smallSideNavImg, label: "Condensed"},
    {size: "on-hover", image: smallSideNavImg, label: "On Hover"},
    {size: "on-hover-active", image: lightSideNavImg, label: "On Hover - Show"},
    {size: "offcanvas", image: fullSideNavImg, label: "Offcanvas"},
];

const layoutPositionOptions: { position: LayoutPositionType }[] = [
    {position: "fixed"},
    {position: "scrollable"},
];

const Customizer = () => {

    const {
        customizer,
        skin,
        changeSkin,
        theme,
        changeTheme,
        orientation,
        changeOrientation,
        topBar,
        changeTopBarColor,
        sidenav,
        changeSideNavColor,
        changeSideNavSize,
        position, changeLayoutPosition, toggleSideNavUser, reset
    } = useLayoutContext()

    return (
        <Offcanvas show={customizer.isOpen} onHide={customizer.toggle} placement="end" className="overflow-hidden">
            <div className="d-flex justify-content-between text-bg-primary gap-2 p-3"
                 style={{backgroundImage: `url(${pattern.src})`}}>
                <div>
                    <h5 className="mb-1 fw-bold text-white text-uppercase">Admin Customizer</h5>
                    <p className="text-white text-opacity-75 fst-italic fw-medium mb-0">Easily configure layout, styles,
                        and preferences for your admin interface.</p>
                </div>

                <div className="flex-grow-0">
                    <button onClick={customizer.toggle} type="button"
                            className="d-block btn btn-sm bg-white bg-opacity-25 text-white rounded-circle btn-icon">
                        <TbX className="fs-lg"/>
                    </button>
                </div>
            </div>

            <SimpleBar className="offcanvas-body p-0 h-100">
                <div className="p-3 border-bottom border-dashed">
                    <h5 className="mb-3 fw-bold">Select Theme</h5>
                    <Row className="g-3">
                        {
                            skinOptions.map((item, idx) => (
                                <Col sm={6} key={idx}>
                                    <div className="form-check card-radio">
                                        <input id={`skin-${item.skin}`} className="form-check-input" type="radio"
                                               name="data-skin"
                                               disabled={item.disabled ?? false}
                                               value={item.skin}
                                               checked={skin === item.skin}
                                               onChange={() => changeSkin(item.skin)}/>
                                        <label className="form-check-label p-0 w-100" htmlFor={`skin-${item.skin}`}>
                                            <Image src={item.image.src} alt="layout-img" className="img-fluid"
                                                   width={167.5} height={111.66}/>
                                        </label>
                                    </div>
                                    <h5 className="text-center text-muted mt-2 mb-0">{toPascalCase(item.skin)}</h5>
                                </Col>
                            ))
                        }
                    </Row>
                </div>

                <div className="p-3 border-bottom border-dashed">
                    <h5 className="mb-3 fw-bold">Color Scheme</h5>
                    <Row className="g-3">
                        {
                            themeOptions.map((item, idx) => (
                                <Col sm={4} key={idx}>
                                    <div className="form-check card-radio">
                                        <input id={`theme-${item.theme}`} className="form-check-input" type="radio"
                                               name="data-bs-theme"
                                               value={item.theme}
                                               checked={theme === item.theme}
                                               onChange={() => changeTheme(item.theme)}/>
                                        <label className="form-check-label p-0 w-100" htmlFor={`theme-${item.theme}`}>
                                            <Image src={item.image.src} alt="layout-img" className="img-fluid"
                                                   width={104.33} height={83.45}/>
                                        </label>
                                    </div>
                                    <h5 className="text-center text-muted mt-2 mb-0">{toPascalCase(item.theme)}</h5>
                                </Col>
                            ))
                        }
                    </Row>
                </div>

                <div className="p-3 border-bottom border-dashed">
                    <h5 className="mb-3 fw-bold">Topbar Color</h5>
                    <Row className="g-3">
                        {
                            topBarColorOptions.map((item, idx) => (
                                <Col sm={4} key={idx}>
                                    <div className="form-check card-radio">
                                        <input id={`topbar-color-${item.color}`} className="form-check-input"
                                               type="radio"
                                               name="data-topbar-color"
                                               value={item.color}
                                               checked={topBar.color === item.color}
                                               onChange={() => changeTopBarColor(item.color)}/>
                                        <label className="form-check-label p-0 w-100"
                                               htmlFor={`topbar-color-${item.color}`}>
                                            <Image src={item.image.src} alt="layout-img" className="img-fluid"
                                                   width={104.33} height={83.45}/>
                                        </label>
                                    </div>
                                    <h5 className="text-center text-muted mt-2 mb-0">{toPascalCase(item.color)}</h5>
                                </Col>
                            ))
                        }
                    </Row>
                </div>

                <div className="p-3 border-bottom border-dashed">
                    <h5 className="mb-3 fw-bold">Orientation</h5>
                    <Row className="g-3">
                        {
                            orientationOptions.map((item, idx) => (
                                <Col sm={4} key={idx}>
                                    <div className="form-check card-radio">
                                        <input id={`layout-${item.orientation}`} className="form-check-input"
                                               type="radio"
                                               name="data-layout"
                                               value={item.orientation}
                                               checked={orientation === item.orientation}
                                               onChange={() => changeOrientation(item.orientation)}/>
                                        <label className="form-check-label p-0 w-100"
                                               htmlFor={`layout-${item.orientation}`}>
                                            <Image src={item.image.src} alt="layout-img" className="img-fluid"
                                                   width={104.33} height={83.45}/>
                                        </label>
                                    </div>
                                    <h5 className="text-center text-muted mt-2 mb-0">{toPascalCase(item.orientation)}</h5>
                                </Col>
                            ))
                        }
                    </Row>
                </div>

                <div className="p-3 border-bottom border-dashed">
                    <h5 className="mb-3 fw-bold">Sidenav Color</h5>
                    <Row className="g-3">
                        {
                            sidenavColorOptions.map((item, idx) => (
                                <Col sm={4} key={idx}>
                                    <div className="form-check card-radio">
                                        <input id={`sidenav-color-${item.color}`} className="form-check-input"
                                               type="radio"
                                               name="data-menu-color"
                                               value={item.color}
                                               checked={sidenav.color === item.color}
                                               onChange={() => changeSideNavColor(item.color)}/>
                                        <label className="form-check-label p-0 w-100"
                                               htmlFor={`sidenav-color-${item.color}`}>
                                            <Image src={item.image.src} alt="layout-img" className="img-fluid"
                                                   width={104.33} height={83.45}/>
                                        </label>
                                    </div>
                                    <h5 className="text-center text-muted mt-2 mb-0">{toPascalCase(item.color)}</h5>
                                </Col>
                            ))
                        }
                    </Row>
                </div>

                <div className="p-3 border-bottom border-dashed">
                    <h5 className="mb-3 fw-bold">Sidebar Size</h5>
                    <Row className="g-3">
                        {
                            sidenavSizeOptions.map((item, idx) => (
                                <Col sm={4} key={idx}>
                                    <div className="form-check card-radio">
                                        <input id={`sidenav-size-${item.size}`} className="form-check-input"
                                               type="radio"
                                               name="data-sidenav-size"
                                               value={item.size}
                                               checked={sidenav.size === item.size}
                                               onChange={() => changeSideNavSize(item.size)}/>
                                        <label className="form-check-label p-0 w-100"
                                               htmlFor={`sidenav-size-${item.size}`}>
                                            <Image src={item.image.src} alt="layout-img" className="img-fluid"
                                                   width={104.33} height={83.45}/>
                                        </label>
                                    </div>
                                    <h5 className="text-center text-muted mt-2 mb-0">{item.label}</h5>
                                </Col>
                            ))
                        }
                    </Row>
                </div>

                <div className="p-3 border-bottom border-dashed">
                    <div className="d-flex justify-content-between align-items-center">
                        <h5 className="fw-bold mb-0">Layout Position</h5>

                        <div className="btn-group radio" role="group">
                            {
                                layoutPositionOptions.map((item, idx) => (
                                    <Fragment key={idx}>
                                        <input type="radio" className="btn-check" name="data-layout-position"
                                               id={`position-${item.position}`}
                                               value={item.position}
                                               checked={position === item.position}
                                               onChange={() => changeLayoutPosition(item.position)}/>
                                        <label className="btn btn-sm btn-soft-warning w-sm"
                                               htmlFor={`position-${item.position}`}>{toPascalCase(item.position)}</label>
                                    </Fragment>
                                ))
                            }
                        </div>
                    </div>
                </div>

                <div className="p-3">
                    <div className="d-flex justify-content-between align-items-center">
                        <h5 className="mb-0"><label className="fw-bold m-0" htmlFor="sidebaruser-check">Sidebar User
                            Info</label></h5>

                        <div className="form-check form-switch fs-lg">
                            <input type="checkbox" className="form-check-input" name="sidebar-user"
                                   checked={sidenav.user}
                                   onChange={toggleSideNavUser}/>
                        </div>
                    </div>
                </div>
            </SimpleBar>

            <div className="offcanvas-footer border-top p-3 text-center">
                <Row>
                    <Col sm={6}>
                        <Button variant="light" type="button" onClick={reset}
                                className="fw-semibold py-2 w-100">Reset</Button>
                    </Col>
                    <Col sm={6}>
                        <a href="https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia"
                           target="_blank" className="btn btn-danger bg-gradient py-2 fw-semibold w-100">Buy Now</a>
                    </Col>
                </Row>
            </div>
        </Offcanvas>
    )
}

export default Customizer