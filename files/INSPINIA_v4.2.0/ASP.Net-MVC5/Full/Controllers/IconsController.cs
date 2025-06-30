using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class IconsController : Controller
    {
        public IActionResult Flags() => View();
        public IActionResult Lucide() => View();
        public IActionResult Tabler() => View();
    }
}