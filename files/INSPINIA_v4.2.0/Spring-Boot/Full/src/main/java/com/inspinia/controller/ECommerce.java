package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/ecommerce")
public class ECommerce {

    @GetMapping("/add-product")
    public String addProduct() {
        return "ecommerce/add-product";
    }

    @GetMapping("/categories")
    public String categories() {
        return "ecommerce/categories";
    }

    @GetMapping("/customers")
    public String customers() {
        return "ecommerce/customers";
    }

    @GetMapping("/order-details")
    public String orderDetails() {
        return "ecommerce/order-details";
    }

    @GetMapping("/orders")
    public String orders() {
        return "ecommerce/orders";
    }

    @GetMapping("/product-details")
    public String productDetails() {
        return "ecommerce/product-details";
    }

    @GetMapping("/products")
    public String products() {
        return "ecommerce/products";
    }

    @GetMapping("/products-grid")
    public String productsGrid() {
        return "ecommerce/products-grid";
    }

    @GetMapping("/product-views")
    public String productViews() {
        return "ecommerce/product-views";
    }

    @GetMapping("/reviews")
    public String reviews() {
        return "ecommerce/ecommerce/reviews";
    }

    @GetMapping("/sales")
    public String sales() {
        return "ecommerce/sales";
    }

    @GetMapping("/seller-details")
    public String sellerDetails() {
        return "ecommerce/seller-details";
    }

    @GetMapping("/sellers")
    public String sellers() {
        return "ecommerce/sellers";
    }
}
