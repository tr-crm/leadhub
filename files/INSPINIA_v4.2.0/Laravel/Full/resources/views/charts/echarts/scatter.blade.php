@extends('layouts.vertical', ['title' => 'Echart Scatter Chart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Scatter Echart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Scatter Chart</h4>
            </div>
            <div class="card-body">
                <div id="echart-scatter-basic" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Bubble Chart</h4>
            </div>
            <div class="card-body">
                <div id="echart-bubble-chart" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Quartet Scatter Chart</h4>
            </div>
            <div class="card-body">
                <div id="echart-quartet-scatter" style="min-height:600px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Single Axis Scatter chart</h4>
            </div>
            <div class="card-body">
                <div id="echart-single-axis-scatter" style="min-height:450px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-scatter.js'])
@endsection
