class LayoutsEgController < ApplicationController
    layout :choose_layout

    def choose_layout
       action_name == "horizontal" ? "horizontal" : "vertical"
    end

    def scrollable
    end

    def compact
    end

    def boxed
    end

    def horizontal
    end

    def outlook
    end

    def preloader
    end
    
end
