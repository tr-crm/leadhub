package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/other-apps")
public class OtherApps {

    @GetMapping("/api-keys")
    public String apiKeys() {
        return "other-apps/api-keys";
    }

    @GetMapping("/article")
    public String article() {
        return "other-apps/article";
    }

    @GetMapping("/blog")
    public String blog() {
        return "other-apps/blog";
    }

    @GetMapping("/clients")
    public String clients() {
        return "other-apps/clients";
    }

    @GetMapping("/companies")
    public String companies() {
        return "other-apps/companies";
    }

    @GetMapping("/forum-post")
    public String forumPost() {
        return "other-apps/forum-post";
    }

    @GetMapping("/forum-view")
    public String forumView() {
        return "other-apps/forum-view";
    }

    @GetMapping("/issue-tracker")
    public String issueTracker() {
        return "other-apps/issue-tracker";
    }

    @GetMapping("/outlook")
    public String outlook() {
        return "other-apps/outlook";
    }

    @GetMapping("/pin-board")
    public String pinBoard() {
        return "other-apps/pin-board";
    }

    @GetMapping("/vote-list")
    public String voteList() {
        return "other-apps/vote-list";
    }
}
