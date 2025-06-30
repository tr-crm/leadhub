package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/miscellaneous")
public class Miscellaneous {

    @GetMapping("/animation")
    public String animation() {
        return "miscellaneous/animation";
    }

    @GetMapping("/clipboard")
    public String clipboard() {
        return "miscellaneous/clipboard";
    }

    @GetMapping("/gallery")
    public String gallery() {
        return "miscellaneous/gallery";
    }

    @GetMapping("/i18")
    public String i18() {
        return "miscellaneous/i18";
    }

    @GetMapping("/idle-timer")
    public String idleTimer() {
        return "miscellaneous/idle-timer";
    }

    @GetMapping("/live-favicon")
    public String liveFavicon() {
        return "miscellaneous/live-favicon";
    }

    @GetMapping("/loading-buttons")
    public String loadingButtons() {
        return "miscellaneous/loading-buttons";
    }

    @GetMapping("/masonry")
    public String masonry() {
        return "miscellaneous/masonry";
    }

    @GetMapping("/nestable")
    public String nestable() {
        return "miscellaneous/nestable";
    }

    @GetMapping("/pass-meter")
    public String passMeter() {
        return "miscellaneous/pass-meter";
    }

    @GetMapping("/pdf-viewer")
    public String pdfViewer() {
        return "miscellaneous/pdf-viewer";
    }

    @GetMapping("/sweet-alerts")
    public String sweetAlerts() {
        return "miscellaneous/sweet-alerts";
    }

    @GetMapping("/text-diff")
    public String textDiff() {
        return "miscellaneous/text-diff";
    }

    @GetMapping("/tour")
    public String tour() {
        return "miscellaneous/tour";
    }

    @GetMapping("/tree-view")
    public String treeView() {
        return "miscellaneous/tree-view";
    }
}
