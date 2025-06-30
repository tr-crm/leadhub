class GraphsController < ApplicationController
    def apextree
    end

    def apexsankey
    end

    def area
      render template: "graphs/apex/area"
    end

    def bar
      render template: "graphs/apex/bar"
    end

    def bubble
      render template: "graphs/apex/bubble"
    end

    def candlestick
      render template: "graphs/apex/candlestick"
    end

    def column
      render template: "graphs/apex/column"
    end

    def heatmap
      render template: "graphs/apex/heatmap"
    end

    def line
      render template: "graphs/apex/line"
    end

    def mixed
      render template: "graphs/apex/mixed"
    end

    def timeline
      render template: "graphs/apex/timeline"
    end

    def boxplot
      render template: "graphs/apex/boxplot"
    end

    def treemap
      render template: "graphs/apex/treemap"
    end

    def pie
      render template: "graphs/apex/pie"
    end

    def radar
      render template: "graphs/apex/radar"
    end

    def radialbar
      render template: "graphs/apex/radialbar"
    end

    def scatter
      render template: "graphs/apex/scatter"
    end

    def polar_area
      render template: "graphs/apex/polar_area"
    end

    def sparkline
      render template: "graphs/apex/sparkline"
    end

    def range
      render template: "graphs/apex/range"
    end

    def funnel
      render template: "graphs/apex/funnel"
    end

    def slope
      render template: "graphs/apex/slope"
    end

    def echart_line
      render template: "graphs/echart/line"
    end      

    def echart_bar
      render template: "graphs/echart/bar"
    end      

    def echart_pie
      render template: "graphs/echart/pie"
    end      

    def echart_scatter
      render template: "graphs/echart/scatter"
    end      

    def echart_geo_map
      render template: "graphs/echart/geo_map"
    end      

    def echart_gauge
      render template: "graphs/echart/gauge"
    end    

    def echart_candlestick
      render template: "graphs/echart/candlestick"
    end    

    def echart_area
      render template: "graphs/echart/area"
    end    

    def echart_radar
      render template: "graphs/echart/radar"
    end    

    def echart_heatmap
      render template: "graphs/echart/heatmap"
    end   

    def echart_other
      render template: "graphs/echart/other"
    end   
end
