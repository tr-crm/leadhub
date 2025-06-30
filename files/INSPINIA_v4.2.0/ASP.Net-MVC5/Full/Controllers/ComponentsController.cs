using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class ComponentsController : Controller
    {
        public IActionResult Metrics() => View();
        public IActionResult Widgets() => View();
    }
}