package com.inspinia.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/tables")
public class Tables {

    @GetMapping("/static")
    public String staticTable() {
        return "tables/static";
    }

    @GetMapping("/custom")
    public String custom() {
        return "tables/custom";
    }

    @GetMapping("/datatables/add-rows")
    public String datatableAddRows() {
        return "tables/datatables/add-rows";
    }

    @GetMapping("/datatables/ajax")
    public String datatableAjax() {
        return "tables/datatables/ajax";
    }

    @GetMapping("/datatables/basic")
    public String datatableBasic() {
        return "tables/datatables/basic";
    }

    @GetMapping("/datatables/checkbox-select")
    public String datatableCheckboxSelect() {
        return "tables/datatables/checkbox-select";
    }

    @GetMapping("/datatables/child-rows")
    public String datatableChildRows() {
        return "tables/datatables/child-rows";
    }

    @GetMapping("/datatables/columns")
    public String datatableColumns() {
        return "tables/datatables/columns";
    }

    @GetMapping("/datatables/column-searching")
    public String datatableColumnSearching() {
        return "tables/datatables/column-searching";
    }

    @GetMapping("/datatables/export-data")
    public String datatableExportData() {
        return "tables/datatables/export-data";
    }

    @GetMapping("/datatables/fixed-header")
    public String datatableFixedHeader() {
        return "tables/datatables/fixed-header";
    }

    @GetMapping("/datatables/javascript")
    public String datatableJavascript() {
        return "tables/datatables/javascript";
    }

    @GetMapping("/datatables/range-search")
    public String datatableRangeSearch() {
        return "tables/datatables/range-search";
    }

    @GetMapping("/datatables/rendering")
    public String datatableRendering() {
        return "tables/datatables/rendering";
    }

    @GetMapping("/datatables/scroll")
    public String datatableScroll() {
        return "tables/datatables/scroll";
    }

    @GetMapping("/datatables/select")
    public String datatableSelect() {
        return "tables/datatables/select";
    }
}
