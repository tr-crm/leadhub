package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/forms")
public class Forms {

    @GetMapping("/elements")
    public String elements() {
        return "forms/elements";
    }

    @GetMapping("/fileuploads")
    public String fileuploads() {
        return "forms/fileuploads";
    }

    @GetMapping("/layouts")
    public String layouts() {
        return "forms/layouts";
    }

    @GetMapping("/other-plugins")
    public String otherPlugins() {
        return "forms/other-plugins";
    }

    @GetMapping("/pickers")
    public String pickers() {
        return "forms/pickers";
    }

    @GetMapping("/range-slider")
    public String rangeSlider() {
        return "forms/range-slider";
    }

    @GetMapping("/select")
    public String select() {
        return "forms/select";
    }

    @GetMapping("/text-editors")
    public String textEditors() {
        return "forms/text-editors";
    }

    @GetMapping("/validation")
    public String validation() {
        return "forms/validation";
    }

    @GetMapping("/wizard")
    public String wizard() {
        return "forms/wizard";
    }
}
