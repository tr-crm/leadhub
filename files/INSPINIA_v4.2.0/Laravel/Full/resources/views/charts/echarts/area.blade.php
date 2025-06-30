@extends('layouts.vertical', ['title' => 'Echart Area Chart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Area Echart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Area Chart</h4>
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
                <h4 class="card-title mb-0">Stacked Area Chart</h4>
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
                <h4 class="card-title mb-0">Area with Marker</h4>
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
                <h4 class="card-title mb-0">Dynamic Area</h4>
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
                <h4 class="card-title mb-0">Step Area</h4>
            </div>
            <div class="card-body">
                <div id="chart-step-line" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-area.js'])
@endsection
