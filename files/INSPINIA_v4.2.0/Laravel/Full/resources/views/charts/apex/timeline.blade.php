@extends('layouts.vertical', ['title' => 'Timeline Apexchart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Timeline Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Timeline</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-timeline" class="apex-charts"></div>
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
                <h4 class="card-title">Distributed Timeline</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="distributed-timeline" class="apex-charts"></div>
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
                <h4 class="card-title">Multi Series Timeline</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="multi-series-timeline" class="apex-charts"></div>
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
                <h4 class="card-title">Advanced Timeline</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="advanced-timeline" class="apex-charts"></div>
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
                <h4 class="card-title">Multiple Series - Group Rows</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="group-rows-timeline" class="apex-charts"></div>
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
@vite(['resources/js/pages/chart-apex-timeline.js'])
@endsection
