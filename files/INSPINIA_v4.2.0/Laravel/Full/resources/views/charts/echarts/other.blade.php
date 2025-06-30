@extends('layouts.vertical', ['title' => 'Echart Other Chart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Other Echart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="card-title mb-0">Pictorialbar Dotted Chart</h4>
            </div>
            <div class="card-body p-2 pt-0">
                <div id="echart-pictorialbar-dotted" class="rounded-3 overflow-hidden" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Sunburst Chart</h4>
            </div>
            <div class="card-body p-2 pt-0">
                <div id="echar-basic-sunburst" style="min-height:399px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Nested Pie Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-pie-nest" style="min-height:600px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    
</div>
<!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-other.js'])
@endsection
