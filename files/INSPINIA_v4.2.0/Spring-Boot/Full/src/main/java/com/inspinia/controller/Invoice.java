package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/invoice")
public class Invoice {
    @GetMapping("/invoice")
    public String index() {
        return "invoice/index";
    }

    @GetMapping("/create")
    public String create() {
        return "invoice/create";
    }

    @GetMapping("/details")
    public String details() {
        return "invoice/details";
    }
}
