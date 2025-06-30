class WidgetsController < ApplicationController
    def widgets
        render template: 'widgets/index'
    end
end
