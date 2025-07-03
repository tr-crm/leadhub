class ErrorController < ApplicationController
    layout :choose_layout

    def choose_layout
      action_name == "error_404_alt" ? "vertical" : "base"
    end

    def error_400
    end

    def error_401
    end

    def error_403
    end

    def error_404
    end

    def error_408
    end

    def erro_500
    end

    def maintenance
    end
end
