using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class AppsController : Controller
    {
        public IActionResult Calendar() => View();
        public IActionResult Chat() => View();
        public IActionResult FileManager() => View();
        public IActionResult Email() => View();
        public IActionResult EmailDetails() => View();
        public IActionResult EmailCompose() => View();
        public IActionResult Invoice() => View();
        public IActionResult InvoiceCreate() => View();
        public IActionResult InvoiceDetails() => View();
    }
}