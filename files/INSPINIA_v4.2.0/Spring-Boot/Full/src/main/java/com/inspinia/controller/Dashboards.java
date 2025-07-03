package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class Dashboards {
    @GetMapping("/")
    public String dashboard1() {
        return "dashboards/dashboard-1";
    }

    @GetMapping("/dashboard-2")
    public String dashboard2() {
        return "dashboards/dashboard-2";
    }

    @GetMapping("/dashboard-3")
    public String dashboard3() {
        return "dashboards/dashboard-3";
    }
}
