@extends('layouts.vertical', ['title' => 'Scatter Apexchart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Scatter Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Scatter (XY) Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-scatter" class="apex-charts"></div>
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
                <h4 class="card-title">Scatter Chart - Datetime</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="datetime-scatter" class="apex-charts"></div>
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
                <h4 class="card-title">Scatter - Images</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="scatter-images" class="apex-charts scatter-images-chart"></div>
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
@vite(['resources/js/pages/chart-apex-scatter.js'])
@endsection
