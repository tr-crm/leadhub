using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class TablesController : Controller
    {
        public IActionResult Custom() => View();
        public IActionResult Static() => View();
        public IActionResult DataTableAddRows() => View();
        public IActionResult DataTableSelect() => View();
        public IActionResult DataTableJavascript() => View();
        public IActionResult DataTableAjax() => View();
        public IActionResult DataTableColumnSearching() => View();
        public IActionResult DataTableBasic() => View();
        public IActionResult DataTableChildRows() => View();
        public IActionResult DataTableRangeSearch() => View();
        public IActionResult DataTableScroll() => View();
        public IActionResult DataTableCheckboxSelect() => View();
        public IActionResult DataTableRendering() => View();
        public IActionResult DataTableExportData() => View();
        public IActionResult DataTableColumns() => View();
        public IActionResult DataTableFixedHeader() => View();
    }
}