using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class OtherAppsController : Controller
    {
        public IActionResult ApiKeys() => View();
        public IActionResult Article() => View();
        public IActionResult Blog() => View();
        public IActionResult Clients() => View();
        public IActionResult Companies() => View();
        public IActionResult ForumPost() => View();
        public IActionResult ForumView() => View();
        public IActionResult IssueTracker() => View();
        public IActionResult Outlook() => View();
        public IActionResult PinBoard() => View();
        public IActionResult VoteList() => View();
    }
}