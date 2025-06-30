package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/projects")
public class Projects {

    @GetMapping("/projects")
    public String index() {
        return "projects/index";
    }

    @GetMapping("/activity")
    public String activity() {
        return "projects/activity";
    }

    @GetMapping("/details")
    public String details() {
        return "projects/details";
    }

    @GetMapping("/kanban")
    public String kanban() {
        return "projects/kanban";
    }

    @GetMapping("/list")
    public String list() {
        return "projects/list";
    }

    @GetMapping("/team-board")
    public String teamBoard() {
        return "projects/team-board";
    }
}
