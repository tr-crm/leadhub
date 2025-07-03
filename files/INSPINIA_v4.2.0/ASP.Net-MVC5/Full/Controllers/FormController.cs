using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class FormController : Controller
    {
        public IActionResult Elements() => View();
        public IActionResult Fileuploads() => View();
        public IActionResult Layouts() => View();
        public IActionResult OtherPlugins() => View();
        public IActionResult Pickers() => View();
        public IActionResult RangeSlider() => View();
        public IActionResult Select() => View();
        public IActionResult TextEditors() => View();
        public IActionResult Validation() => View();
        public IActionResult Wizard() => View();
    }
}