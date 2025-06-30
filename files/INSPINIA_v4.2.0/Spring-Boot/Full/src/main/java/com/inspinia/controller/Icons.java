package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/icons")
public class Icons {
    @GetMapping("/flags")
    public String flags() {
        return "icons/flags";
    }

    @GetMapping("/lucide")
    public String lucide() {
        return "icons/lucide";
    }

    @GetMapping("/tabler")
    public String tabler() {
        return "icons/tabler";
    }
}
