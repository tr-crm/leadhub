package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/apps")
public class Apps {

    @GetMapping("/calendar")
    public String calendar() {
        return "apps/calendar";
    }

    @GetMapping("/chat")
    public String chat() {
        return "apps/chat";
    }

    @GetMapping("/file-manager")
    public String fileManager() {
        return "apps/file-manager";
    }

    @GetMapping("/email")
    public String email() {
        return "apps/email/index";
    }

    @GetMapping("/email/details")
    public String emailDetails() {
        return "apps/email/details";
    }

    @GetMapping("/email/compose")
    public String emailCompose() {
        return "apps/email/compose";
    }
}
