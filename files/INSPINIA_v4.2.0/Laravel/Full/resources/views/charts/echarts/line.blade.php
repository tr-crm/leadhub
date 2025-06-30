@extends('layouts.vertical', ['title' => 'Echart Line Chart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Line Echart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-line" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Stacked Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-line-stacked" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Marker</h4>
            </div>
            <div class="card-body">
                <div id="chart-line-marker" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Dynamic Line</h4>
            </div>
            <div class="card-body">
                <div id="chart-dynamic-line" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Step Line</h4>
            </div>
            <div class="card-body">
                <div id="chart-step-line" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Y Category</h4>
            </div>
            <div class="card-body">
                <div id="chart-line-y-category" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-line.js'])
@endsection
