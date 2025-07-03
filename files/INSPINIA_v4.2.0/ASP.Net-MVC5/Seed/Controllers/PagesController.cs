using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class PagesController : Controller
    {
        public IActionResult Index() => View();
    }
}