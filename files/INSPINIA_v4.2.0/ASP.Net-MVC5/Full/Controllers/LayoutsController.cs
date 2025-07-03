using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class LayoutsController : Controller
    {
        public IActionResult Boxed() => View();
        public IActionResult Compact() => View();
        public IActionResult Horizontal() => View();
        public IActionResult Preloader() => View();
        public IActionResult Scrollable() => View();
    }
}