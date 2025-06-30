using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class ErrorController : Controller
    {
        public IActionResult Error400() => View();
        public IActionResult Error401() => View();
        public IActionResult Error403() => View();
        public IActionResult Error404() => View();
        public IActionResult Error408() => View();
        public IActionResult Error500() => View();
        public IActionResult Maintenance() => View();
    }
}