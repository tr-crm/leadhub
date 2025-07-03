using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class EcommerceController : Controller
    {
        public IActionResult AddProduct() => View();
        public IActionResult Categories() => View();
        public IActionResult Customers() => View();
        public IActionResult OrderDetails() => View();
        public IActionResult Orders() => View();
        public IActionResult ProductDetails() => View();
        public IActionResult Products() => View();
        public IActionResult ProductsGrid() => View();
        public IActionResult ProductViews() => View();
        public IActionResult Reviews() => View();
        public IActionResult Sales() => View();
        public IActionResult SellerDetails() => View();
        public IActionResult Sellers() => View();
    }
}