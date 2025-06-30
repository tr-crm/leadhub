class EcommerceController < ApplicationController
    def product
        render template: "ecommerce/products/index"
    end

    def product_grid
        render template: "ecommerce/products/grid"
    end

    def product_details
        render template: "ecommerce/products/details"
    end

    def product_add
        render template: "ecommerce/products/add"
    end

    def categories 
    end

    def order
        render template: "ecommerce/order/index"
    end

    def order_detail
        render template: "ecommerce/order/detail"
    end

    def customers
    end

    def seller 
       render template: "ecommerce/seller/index" 
    end

    def seller_detail
        render template: "ecommerce/seller/details" 
    end

    def review 
    end

    def product_view
        render template: "ecommerce/reports/product_view" 
    end

    def sales
        render template: "ecommerce/reports/sales" 
    end
end
