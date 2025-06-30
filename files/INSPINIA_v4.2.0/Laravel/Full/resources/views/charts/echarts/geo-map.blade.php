@extends('layouts.vertical', ['title' => 'Echart GEO Map'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'GEO Maps'])

<div class="row">    
    <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">USA Map</h4>
            </div>
            <div class="card-body">
                <div id="usa-map" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Morphing between Map and Bar Chart</h4>
            </div>
            <div class="card-body">
                <div id="map-bar-morphing" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>


<div class="row">
    

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Pie Chart on Geo Map </h4>
            </div>
            <div class="card-body">
                <div id="pie-chart-on-map" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">GEO SVG Scatter</h4>
            </div>
            <div class="card-body">
                <div id="geo-svg-scatter-map" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

</div>
<!-- end row -->


@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-geo-map.js'])
@endsection
