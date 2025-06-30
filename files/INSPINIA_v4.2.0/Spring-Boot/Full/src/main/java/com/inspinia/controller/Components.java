package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class Components {
    @GetMapping("/metrics")
    public String metrics() {
        return "components/metrics";
    }

    @GetMapping("/widgets")
    public String widgets() {
        return "components/widgets";
    }
}
