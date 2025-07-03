package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class Landing {
    @GetMapping("/landing")
    public String index() {
        return "landing/index";
    }
}
