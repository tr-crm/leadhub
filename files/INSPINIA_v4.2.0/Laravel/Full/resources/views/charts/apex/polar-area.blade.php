@extends('layouts.vertical', ['title' => 'Polar Area Apexcharts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Ploar Area Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Polar Area Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-polar-area" class="apex-charts"></div>
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
                <h4 class="card-title">Monochrome Polar Area</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="monochrome-polar-area" class="apex-charts"></div>
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
@vite(['resources/js/pages/chart-apex-polar-area.js'])
@endsection
