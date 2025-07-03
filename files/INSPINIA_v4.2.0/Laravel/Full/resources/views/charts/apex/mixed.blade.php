@extends('layouts.vertical', ['title' => 'Mixed Apexcharts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Mixed Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Line & Column Chart</h4>
            </div>

            <div class="card-body">
                <div dir="ltr">
                    <div id="line-column-mixed" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Multiple Y-Axis Chart</h4>
            </div>

            <div class="card-body">
                <div dir="ltr">
                    <div id="multiple-yaxis-mixed" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Line & Area Chart</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="line-area-mixed" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Line, Column & Area Chart</h4>
            </div>

            <div class="card-body">
                <div dir="ltr">
                    <div id="all-mixed" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col-->
</div>
<!-- end row-->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-apex-mixed.js'])
@endsection
