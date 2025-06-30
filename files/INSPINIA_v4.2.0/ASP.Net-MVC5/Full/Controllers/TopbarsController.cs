using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class TopbarsController : Controller
    {
        public IActionResult SubItems() => View();
        public IActionResult Tools() => View();
        public IActionResult Dark() => View();
        public IActionResult Gradient() => View();
        public IActionResult Gray() => View();
    }
}