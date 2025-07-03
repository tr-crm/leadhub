package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/ui")
public class Ui {

    @GetMapping("/accordions")
    public String accordions() {
        return "ui/accordions";
    }

    @GetMapping("/alerts")
    public String alerts() {
        return "ui/alerts";
    }

    @GetMapping("/badges")
    public String badges() {
        return "ui/badges";
    }

    @GetMapping("/breadcrumb")
    public String breadcrumb() {
        return "ui/breadcrumb";
    }

    @GetMapping("/buttons")
    public String buttons() {
        return "ui/buttons";
    }

    @GetMapping("/cards")
    public String cards() {
        return "ui/cards";
    }

    @GetMapping("/carousel")
    public String carousel() {
        return "ui/carousel";
    }

    @GetMapping("/collapse")
    public String collapse() {
        return "ui/collapse";
    }

    @GetMapping("/colors")
    public String colors() {
        return "ui/colors";
    }

    @GetMapping("/dropdowns")
    public String dropdowns() {
        return "ui/dropdowns";
    }

    @GetMapping("/grid")
    public String grid() {
        return "ui/grid";
    }

    @GetMapping("/images")
    public String images() {
        return "ui/images";
    }

    @GetMapping("/links")
    public String links() {
        return "ui/links";
    }

    @GetMapping("/list-group")
    public String listGroup() {
        return "ui/list-group";
    }

    @GetMapping("/modals")
    public String modals() {
        return "ui/modals";
    }

    @GetMapping("/notifications")
    public String notifications() {
        return "ui/notifications";
    }

    @GetMapping("/offcanvas")
    public String offcanvas() {
        return "ui/offcanvas";
    }

    @GetMapping("/pagination")
    public String pagination() {
        return "ui/pagination";
    }

    @GetMapping("/placeholders")
    public String placeholders() {
        return "ui/placeholders";
    }

    @GetMapping("/popovers")
    public String popovers() {
        return "ui/popovers";
    }

    @GetMapping("/progress")
    public String progress() {
        return "ui/progress";
    }

    @GetMapping("/scrollspy")
    public String scrollspy() {
        return "ui/scrollspy";
    }

    @GetMapping("/spinners")
    public String spinners() {
        return "ui/spinners";
    }

    @GetMapping("/tabs")
    public String tabs() {
        return "ui/tabs";
    }

    @GetMapping("/tooltips")
    public String tooltips() {
        return "ui/tooltips";
    }

    @GetMapping("/typography")
    public String typography() {
        return "ui/typography";
    }

    @GetMapping("/utilities")
    public String utilities() {
        return "ui/utilities";
    }

    @GetMapping("/videos")
    public String videos() {
        return "ui/videos";
    }
}
