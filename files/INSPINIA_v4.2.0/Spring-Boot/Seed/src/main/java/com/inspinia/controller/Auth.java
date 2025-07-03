package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class Auth {

    @GetMapping("/auth-1/delete-account")
    public String auth1DeleteAccount() {
        return "auth/auth-1/delete-account";
    }

    @GetMapping("/auth-1/lock-screen")
    public String auth1LockScreen() {
        return "auth/auth-1/lock-screen";
    }

    @GetMapping("/auth-1/login-pin")
    public String auth1LoginPin() {
        return "auth/auth-1/login-pin";
    }

    @GetMapping("/auth-1/new-pass")
    public String auth1NewPass() {
        return "auth/auth-1/new-pass";
    }

    @GetMapping("/auth-1/reset-pass")
    public String auth1ResetPass() {
        return "auth/auth-1/reset-pass";
    }

    @GetMapping("/auth-1/sign-in")
    public String auth1SignIn() {
        return "auth/auth-1/sign-in";
    }

    @GetMapping("/auth-1/sign-up")
    public String auth1SignUp() {
        return "auth/auth-1/sign-up";
    }

    @GetMapping("/auth-1/success-mail")
    public String auth1SuccessMail() {
        return "auth/auth-1/success-mail";
    }

    @GetMapping("/auth-1/two-factor")
    public String auth1TwoFactor() {
        return "auth/auth-1/two-factor";
    }

    @GetMapping("/auth-2/delete-account")
    public String auth2DeleteAccount() {
        return "auth/auth-2/delete-account";
    }

    @GetMapping("/auth-2/lock-screen")
    public String auth2LockScreen() {
        return "auth/auth-2/lock-screen";
    }

    @GetMapping("/auth-2/login-pin")
    public String auth2LoginPin() {
        return "auth/auth-2/login-pin";
    }

    @GetMapping("/auth-2/new-pass")
    public String auth2NewPass() {
        return "auth/auth-2/new-pass";
    }

    @GetMapping("/auth-2/reset-pass")
    public String auth2ResetPass() {
        return "auth/auth-2/reset-pass";
    }

    @GetMapping("/auth-2/sign-in")
    public String auth2SignIn() {
        return "auth/auth-2/sign-in";
    }

    @GetMapping("/auth-2/sign-up")
    public String auth2SignUp() {
        return "auth/auth-2/sign-up";
    }

    @GetMapping("/auth-2/success-mail")
    public String auth2SuccessMail() {
        return "auth/auth-2/success-mail";
    }

    @GetMapping("/auth-2/two-factor")
    public String auth2TwoFactor() {
        return "auth/auth-2/two-factor";
    }

    @GetMapping("/auth-3/delete-account")
    public String auth3DeleteAccount() {
        return "auth/auth-3/delete-account";
    }

    @GetMapping("/auth-3/lock-screen")
    public String auth3LockScreen() {
        return "auth/auth-3/lock-screen";
    }

    @GetMapping("/auth-3/login-pin")
    public String auth3LoginPin() {
        return "auth/auth-3/login-pin";
    }

    @GetMapping("/auth-3/new-pass")
    public String auth3NewPass() {
        return "auth/auth-3/new-pass";
    }

    @GetMapping("/auth-3/reset-pass")
    public String auth3ResetPass() {
        return "auth/auth-3/reset-pass";
    }

    @GetMapping("/auth-3/sign-in")
    public String auth3SignIn() {
        return "auth/auth-3/sign-in";
    }

    @GetMapping("/auth-3/sign-up")
    public String auth3SignUp() {
        return "auth/auth-3/sign-up";
    }

    @GetMapping("/auth-3/success-mail")
    public String auth3SuccessMail() {
        return "auth/auth-3/success-mail";
    }

    @GetMapping("/auth-3/two-factor")
    public String auth3TwoFactor() {
        return "auth/auth-3/two-factor";
    }
}

