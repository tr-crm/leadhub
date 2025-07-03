class TablesController < ApplicationController
    def static
    end

    def custom
    end

    def basic
        render template: "tables/datatables/basic"
    end
    
    def export_data
        render template: "tables/datatables/export_data"
    end
    
    def select 
        render template: "tables/datatables/select"
    end

    def ajax
        render template: "tables/datatables/ajax"
    end

    def javascript
        render template: "tables/datatables/javascript"         
    end
    
    def data_rendering
        render template: "tables/datatables/data_rendering"
    end    

    def scroll
        render template: "tables/datatables/scroll"
    end
    
    def column
        render template: "tables/datatables/column"
    end
    
    def child_rows
        render template: "tables/datatables/child_rows"
    end

    def column_searching
        render template: "tables/datatables/column_searching"
    end

    def range_search
        render template: "tables/datatables/range_search"
    end

    def fixed_header
        render template: "tables/datatables/fixed_header"
    end

    def add_rows
        render template: "tables/datatables/add_rows"
    end

    def checkbox_select
        render template: "tables/datatables/checkbox_select"
    end
end
