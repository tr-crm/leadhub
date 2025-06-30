package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/users")
public class Users {

    @GetMapping("/contacts")
    public String contacts() {
        return "users/contacts";
    }

    @GetMapping("/permissions")
    public String permissions() {
        return "users/permissions";
    }

    @GetMapping("/roles")
    public String roles() {
        return "users/roles";
    }
}
