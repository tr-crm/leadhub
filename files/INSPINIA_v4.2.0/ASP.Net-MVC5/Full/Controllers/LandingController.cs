using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class LandingController : Controller
    {
        public IActionResult Index() => View();
    }
}