class AuthController < ApplicationController
    layout "base"

    def signin
        render template: "auth/auth1/signin"
    end

    def signup
        render template: "auth/auth1/signup"
    end

    def reset_pass
        render template: "auth/auth1/reset_pass"
    end

    def new_pass
        render template: "auth/auth1/new_pass"
    end

    def two_factor
        render template: "auth/auth1/two_factor"
    end

    def lock_screen
        render template: "auth/auth1/lock_screen"
    end

    def success_mail
        render template: "auth/auth1/success_mail"
    end

    def login_with_pin
        render template: "auth/auth1/login_with_pin"
    end

    def delete_account
        render template: "auth/auth1/delete_account"
    end

    # auth2

    def auth2_signin
        render template: "auth/auth2/signin"
    end

    def auth2_signup
        render template: "auth/auth2/signup"
    end

    def auth2_reset_pass
        render template: "auth/auth2/reset_pass"
    end

    def auth2_new_pass
        render template: "auth/auth2/new_pass"
    end

    def auth2_two_factor
        render template: "auth/auth2/two_factor"
    end

    def auth2_lock_screen
        render template: "auth/auth2/lock_screen"
    end

    def auth2_success_mail
        render template: "auth/auth2/success_mail"
    end

    def auth2_login_with_pin
        render template: "auth/auth2/login_with_pin"
    end

    def auth2_delete_account
        render template: "auth/auth2/delete_account"
    end

    # auth3

    def auth3_signin
        render template: "auth/auth3/signin"
    end

    def auth3_signup
        render template: "auth/auth3/signup"
    end

    def auth3_reset_pass
        render template: "auth/auth3/reset_pass"
    end

    def auth3_new_pass
        render template: "auth/auth3/new_pass"
    end

    def auth3_two_factor
        render template: "auth/auth3/two_factor"
    end

    def auth3_lock_screen
        render template: "auth/auth3/lock_screen"
    end

    def auth3_success_mail
        render template: "auth/auth3/success_mail"
    end

    def auth3_login_with_pin
        render template: "auth/auth3/login_with_pin"
    end

    def auth3_delete_account
        render template: "auth/auth3/delete_account"
    end
end
