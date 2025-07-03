using Microsoft.AspNetCore.Mvc;

namespace Inspinia.Controllers
{
    public class ChartsController : Controller
    {
        public IActionResult ApexMixed() => View();
        public IActionResult ApexRadar() => View();
        public IActionResult ApexBubble() => View();
        public IActionResult ApexCandlestick() => View();
        public IActionResult ApexRadialbar() => View();
        public IActionResult ApexArea() => View();
        public IActionResult ApexBoxplot() => View();
        public IActionResult ApexTreemap() => View();
        public IActionResult Apextree() => View();
        public IActionResult ApexRange() => View();
        public IActionResult ApexScatter() => View();
        public IActionResult ApexHeatmap() => View();
        public IActionResult ApexPie() => View();
        public IActionResult ApexPolarArea() => View();
        public IActionResult Apexsankey() => View();
        public IActionResult ApexFunnel() => View();
        public IActionResult ApexSparklines() => View();
        public IActionResult ApexSlope() => View();
        public IActionResult ApexColumn() => View();
        public IActionResult ApexLine() => View();
        public IActionResult ApexBar() => View();
        public IActionResult ApexTimeline() => View();
        public IActionResult EChartArea() => View();
        public IActionResult EChartBar() => View();
        public IActionResult EChartCandlestick() => View();
        public IActionResult EChartGauge() => View();
        public IActionResult EChartGeoMap() => View();
        public IActionResult EChartHeatmap() => View();
        public IActionResult EChartLine() => View();
        public IActionResult EChartOther() => View();
        public IActionResult EChartPie() => View();
        public IActionResult EChartRadar() => View();
        public IActionResult EChartScatter() => View();
    }
}