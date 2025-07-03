using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class SidebarsController : Controller
    {
        public IActionResult Image() => View();
        public IActionResult WithLines() => View();
        public IActionResult Compact() => View();
        public IActionResult IconView() => View();
        public IActionResult Offcanvas() => View();
        public IActionResult OnHoverActive() => View();
        public IActionResult OnHover() => View();
        public IActionResult NoIcons() => View();
        public IActionResult Light() => View();
        public IActionResult Gradient() => View();
        public IActionResult Gray() => View();
    }
}