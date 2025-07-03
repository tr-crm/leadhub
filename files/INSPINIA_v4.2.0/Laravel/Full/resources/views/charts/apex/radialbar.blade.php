@extends('layouts.vertical', ['title' => 'RadialBar Apexcharts'])

@section('css')
@endsection

@section('content')
@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'RadialBar Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic RadialBar Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-radialbar" class="apex-charts"></div>
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
                <h4 class="card-title">Multiple RadialBars</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="multiple-radialbar" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Circle Chart - Custom Angle</h4>
            </div>
            <div class="card-body">
                <div class="text-center" dir="ltr">
                    <div id="circle-angle-radial" class="apex-charts"></div>
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
                <h4 class="card-title">Circle Chart with Image</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="image-radial" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Stroked Circular Guage</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="stroked-guage-radial" class="apex-charts"></div>
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
                <h4 class="card-title">Gradient Circular Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="gradient-chart" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Semi Circle Gauge</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="semi-circle-gauge" class="apex-charts"></div>
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
@vite(['resources/js/pages/chart-apex-radialbar.js'])
@endsection
