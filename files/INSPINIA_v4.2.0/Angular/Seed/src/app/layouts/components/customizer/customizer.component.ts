import {Component} from '@angular/core';
import {NgbActiveOffcanvas} from '@ng-bootstrap/ng-bootstrap';
import {SimplebarAngularModule} from 'simplebar-angular';
import {NgIcon, provideIcons} from '@ng-icons/core';
import {tablerX} from "@ng-icons/tabler-icons"
import {LayoutStoreService} from '@core/services/layout-store.service';
import {
    LayoutOrientationType,
    LayoutPositionType,
    LayoutSkinType,
    LayoutThemeType,
    SideNavType,
    TopBarType
} from '@/app/types/layout';
import {CommonModule} from '@angular/common';
import {toPascalCase} from '@/app/utils/string-utils';

const classicImg = "assets/images/layouts/themes/theme-classic.png";
const materialImg = "assets/images/layouts/themes/theme-material.png";
const modernImg = "assets/images/layouts/themes/theme-modern.png";
const saasImg = "assets/images/layouts/themes/theme-saas.png";
const flatImg = "assets/images/layouts/themes/theme-flat.png";
const minimalImg = "assets/images/layouts/themes/theme-minimal.png";
const galaxyImg = "assets/images/layouts/themes/theme-galaxy.png";

const light = "assets/images/layouts/light.svg";
const dark = "assets/images/layouts/dark.svg";
const system = "assets/images/layouts/system.svg";

const lightTopBarImg = "assets/images/layouts/topbar-light.svg";
const darkTopBarImg = "assets/images/layouts/topbar-dark.svg";
const grayTopBarImg = "assets/images/layouts/topbar-gray.svg";
const gradientTopBarImg = "assets/images/layouts/topbar-gradient.svg";

const lightSideNavImg = "assets/images/layouts/light.svg";
const darkSideNavImg = "assets/images/layouts/side-dark.svg";
const graySideNavImg = "assets/images/layouts/side-gray.svg";
const gradientSideNavImg = "assets/images/layouts/side-gradient.svg";
const imageSideNavImg = "assets/images/layouts/side-image.svg";

const compactSideNavImg = "assets/images/layouts/sidebar-compact.svg";
const smallSideNavImg = "assets/images/layouts/sidebar-sm.svg";
const fullSideNavImg = "assets/images/layouts/sidebar-full.svg";

type SkinOptionType = {
    skin: LayoutSkinType;
    image: string;
    disabled?: boolean;
};

type ThemeOptionType = {
    theme: LayoutThemeType;
    image: string;
};

type OrientationOptionType = {
    orientation: LayoutOrientationType;
    image: string;
};

type TopBarColorOptionType = {
    color: TopBarType['color'];
    image: string;
};

type SideNavColorOptionType = {
    color: SideNavType['color'];
    image: string;
};

type SideNavSizeOptionType = {
    label: string;
    size: SideNavType['size'];
    image: string;
};

@Component({
    selector: 'app-customizer',
    imports: [SimplebarAngularModule, NgIcon, CommonModule],
    templateUrl: './customizer.component.html',
    viewProviders: [provideIcons({tablerX})]
})
export class CustomizerComponent {
    constructor(public activeOffcanvas: NgbActiveOffcanvas, public layout: LayoutStoreService) {
    }

    close(): void {
        this.activeOffcanvas.close();
    }

    skinOptions: SkinOptionType[] = [
        {skin: "classic", image: classicImg},
        {skin: "material", image: materialImg},
        {skin: "modern", image: modernImg},
        {skin: "saas", image: saasImg},
        {skin: "flat", image: flatImg},
        {skin: "minimal", image: minimalImg},
        {skin: "galaxy", image: galaxyImg, disabled: true}
    ]

    themeOptions: ThemeOptionType[] = [
        {theme: "light", image: light},
        {theme: "dark", image: dark},
        {theme: "system", image: system},
    ];

    orientationOptions: OrientationOptionType[] = [
        {orientation: "vertical", image: darkSideNavImg},
        {orientation: "horizontal", image: fullSideNavImg},
    ];

    topBarColorOptions: TopBarColorOptionType[] = [
        {color: "light", image: lightTopBarImg},
        {color: "dark", image: darkTopBarImg},
        {color: "gray", image: grayTopBarImg},
        {color: "gradient", image: gradientTopBarImg},
    ];

    sidenavColorOptions: SideNavColorOptionType[] = [
        {color: "light", image: lightSideNavImg},
        {color: "dark", image: darkSideNavImg},
        {color: "gray", image: graySideNavImg},
        {color: "gradient", image: gradientSideNavImg},
        {color: "image", image: imageSideNavImg},
    ];

    sidenavSizeOptions: SideNavSizeOptionType[] = [
        {size: "default", image: lightSideNavImg, label: "Default"},
        {size: "compact", image: compactSideNavImg, label: "Compact"},
        {size: "condensed", image: smallSideNavImg, label: "Condensed"},
        {size: "on-hover", image: smallSideNavImg, label: "On Hover"},
        {size: "on-hover-active", image: lightSideNavImg, label: "On Hover - Show"},
        {size: "offcanvas", image: fullSideNavImg, label: "Offcanvas"},
    ];

    layoutPositionOptions: { position: LayoutPositionType }[] = [
        {position: "fixed"},
        {position: "scrollable"},
    ];
    protected readonly toPascalCase = toPascalCase;
}
