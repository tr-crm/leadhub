using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class UsersController : Controller
    {
        public IActionResult Permissions() => View();
        public IActionResult Contacts() => View();
        public IActionResult Roles() => View();
    }
}