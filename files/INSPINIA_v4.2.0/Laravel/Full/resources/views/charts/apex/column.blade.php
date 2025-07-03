@extends('layouts.vertical', ['title' => 'Apex Column Charts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Column Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Column Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Column Chart with Datalabels</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="datalabels-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Stacked Column Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="stacked-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">100% Stacked Column Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="full-stacked-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Grouped Stacked Columns Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="grouped-stacked-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dumbbell Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="dumbbell-chart" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Column with Markers</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="column-with-markers" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Column with Group Label</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="column-with-group-label" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Column Chart with rotated labels & Annotations</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="rotate-labels-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Column Chart with negative values</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="negative-value-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Distributed Column Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="distributed-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Range Column Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="range-column" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-12">
        <div class="card">
            <div class="card-header justify-content-between border-dashed">
                <h4 class="card-title">Dynamic Loaded Chart</h4>
                <div class="flex-shrink-0">
                    <select id="model" class="form-select form-select-sm">
                        <option value="iphone5">iPhone 5</option>
                        <option value="iphone6">iPhone 6</option>
                        <option value="iphone7">iPhone 7</option>
                    </select>
                </div>
            </div>

            <div class="card-body pt-0">
                <h4 class="header-title"></h4>
                <div dir="ltr">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="chart-year"></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="chart-quarter"></div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

@endsection

@section('scripts')
<!-- Apex Chart Column Demo js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>
@vite(['resources/js/pages/chart-apex-column.js'])
@endsection