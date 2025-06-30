using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class SkinController : Controller
    {
        public IActionResult Minimal() => View();
        public IActionResult Flat() => View();
        public IActionResult Material() => View();
        public IActionResult Classic() => View();
        public IActionResult Modern() => View();
        public IActionResult Saas() => View();
    }
}