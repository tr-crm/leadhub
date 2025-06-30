using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class MiscellaneousController : Controller
    {
        public IActionResult Animation() => View();
        public IActionResult Clipboard() => View();
        public IActionResult Gallery() => View();
        public IActionResult I18() => View();
        public IActionResult IdleTimer() => View();
        public IActionResult LiveFavicon() => View();
        public IActionResult LoadingButtons() => View();
        public IActionResult Masonry() => View();
        public IActionResult Nestable() => View();
        public IActionResult PassMeter() => View();
        public IActionResult PdfViewer() => View();
        public IActionResult SweetAlerts() => View();
        public IActionResult TextDiff() => View();
        public IActionResult Tour() => View();
        public IActionResult TreeView() => View();
    }
}