@extends('layouts.vertical', ['title' => 'Echart Gauge Chart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Gauge Echart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Gauge Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-basic-gauge" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Speed Stage Gauge Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-speed-stage-gauge" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ring Gauge Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-ring-gauge" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Temperature Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-temperature-gauge" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Multi Ring Gauge Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-multiring-gauge" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Multi Gauge Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-multi-gauge" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    
</div>
<!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-gauge.js'])
@endsection
