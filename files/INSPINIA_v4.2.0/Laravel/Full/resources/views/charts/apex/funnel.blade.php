@extends('layouts.vertical', ['title' => 'Funnel Apexcharts'])

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Funnel Apexcharts'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Funnel</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-funnel" class="apex-charts"></div>
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
                <h4 class="card-title">Pyramid Funnel</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="pyramid-funnel" class="apex-charts"></div>
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
@vite(['resources/js/pages/chart-apex-funnel.js'])
@endsection
