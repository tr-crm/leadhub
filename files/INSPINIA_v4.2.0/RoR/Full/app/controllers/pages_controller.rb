class PagesController < ApplicationController
    layout :choose_layout

    def choose_layout
       action_name.in?(%w[maintenance coming_soon]) ? "base" : "vertical"
    end

    def profile
    end

    def faq
    end 

    def pricing
    end

    def empty_page
    end

    def timeline
    end

    def search_results
    end

    def coming_soon
    end

    def terms_conditions
    end
end
