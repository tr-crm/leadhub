using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class PagesController : Controller
    {
        public IActionResult ComingSoon() => View();
        public IActionResult EmptyPage() => View();
        public IActionResult Faq() => View();
        public IActionResult Pricing() => View();
        public IActionResult Profile() => View();
        public IActionResult SearchResults() => View();
        public IActionResult TermsConditions() => View();
        public IActionResult Timeline() => View();
    }
}