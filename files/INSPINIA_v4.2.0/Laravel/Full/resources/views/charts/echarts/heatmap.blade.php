@extends('layouts.vertical', ['title' => 'Echart Heatmap Chart'])

@section('css')
@endsection

@section('content')
@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Heatmap Echart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Heatmap Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-heatmap" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
     
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Heatmap Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-heatmap3" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Heatmap - 20K Data Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-heatmap4" style="min-height:300px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    
</div>

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-heatmap.js'])
@endsection
