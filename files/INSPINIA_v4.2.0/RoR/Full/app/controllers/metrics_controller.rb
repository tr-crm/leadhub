class MetricsController < ApplicationController
    def metrics
        render template: 'metrics/index'
    end        
end
