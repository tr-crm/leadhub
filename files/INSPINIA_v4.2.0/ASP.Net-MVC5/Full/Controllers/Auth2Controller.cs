using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class Auth2Controller : Controller
    {
        public IActionResult LoginPin() => View();
        public IActionResult LockScreen() => View();
        public IActionResult TwoFactor() => View();
        public IActionResult ResetPass() => View();
        public IActionResult SignUp() => View();
        public IActionResult DeleteAccount() => View();
        public IActionResult NewPass() => View();
        public IActionResult SuccessMail() => View();
        public IActionResult SignIn() => View();
    }
}