package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/layouts")
public class Layouts {

    @GetMapping("/boxed")
    public String boxed() {
        return "layouts-eg/boxed";
    }

    @GetMapping("/compact")
    public String compact() {
        return "layouts-eg/compact";
    }

    @GetMapping("/horizontal")
    public String horizontal() {
        return "layouts-eg/horizontal";
    }

    @GetMapping("/preloader")
    public String preloader() {
        return "layouts-eg/preloader";
    }

    @GetMapping("/scrollable")
    public String scrollable() {
        return "layouts-eg/scrollable";
    }

    // Sidebars
    @GetMapping("/sidebars/compact")
    public String sidebarCompact() {
        return "layouts-eg/sidebars/compact";
    }

    @GetMapping("/sidebars/gradient")
    public String sidebarGradient() {
        return "layouts-eg/sidebars/gradient";
    }

    @GetMapping("/sidebars/gray")
    public String sidebarGray() {
        return "layouts-eg/sidebars/gray";
    }

    @GetMapping("/sidebars/icon-view")
    public String sidebarIconView() {
        return "layouts-eg/sidebars/icon-view";
    }

    @GetMapping("/sidebars/image")
    public String sidebarImage() {
        return "layouts-eg/sidebars/image";
    }

    @GetMapping("/sidebars/light")
    public String sidebarLight() {
        return "layouts-eg/sidebars/light";
    }

    @GetMapping("/sidebars/no-icons")
    public String sidebarNoIcons() {
        return "layouts-eg/sidebars/no-icons";
    }

    @GetMapping("/sidebars/offcanvas")
    public String sidebarOffcanvas() {
        return "layouts-eg/sidebars/offcanvas";
    }

    @GetMapping("/sidebars/on-hover")
    public String sidebarOnHover() {
        return "layouts-eg/sidebars/on-hover";
    }

    @GetMapping("/sidebars/on-hover-active")
    public String sidebarOnHoverActive() {
        return "layouts-eg/sidebars/on-hover-active";
    }

    @GetMapping("/sidebars/with-lines")
    public String sidebarWithLines() {
        return "layouts-eg/sidebars/with-lines";
    }

    // Topbars
    @GetMapping("/topbars/dark")
    public String topbarDark() {
        return "layouts-eg/topbars/dark";
    }

    @GetMapping("/topbars/gradient")
    public String topbarGradient() {
        return "layouts-eg/topbars/gradient";
    }

    @GetMapping("/topbars/gray")
    public String topbarGray() {
        return "layouts-eg/topbars/gray";
    }

    @GetMapping("/topbars/sub-items")
    public String topbarSubItems() {
        return "layouts-eg/topbars/sub-items";
    }

    @GetMapping("/topbars/tools")
    public String topbarTools() {
        return "layouts-eg/topbars/tools";
    }
}
