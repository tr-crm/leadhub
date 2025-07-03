package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/pages")
public class Pages {

    @GetMapping("/coming-soon")
    public String comingSoon() {
        return "pages/coming-soon";
    }

    @GetMapping("/empty")
    public String empty() {
        return "pages/empty";
    }

    @GetMapping("/faq")
    public String faq() {
        return "pages/faq";
    }

    @GetMapping("/pricing")
    public String pricing() {
        return "pages/pricing";
    }

    @GetMapping("/profile")
    public String profile() {
        return "pages/profile";
    }

    @GetMapping("/search-results")
    public String searchResults() {
        return "pages/search-results";
    }

    @GetMapping("/terms-conditions")
    public String termsConditions() {
        return "pages/terms-conditions";
    }

    @GetMapping("/timeline")
    public String timeline() {
        return "pages/timeline";
    }
}
