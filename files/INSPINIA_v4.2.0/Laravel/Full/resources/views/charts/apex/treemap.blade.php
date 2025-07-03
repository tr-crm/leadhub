@extends('layouts.vertical', ['title' => 'Treemap Apexchart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Treemap Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Treemap</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="basic-treemap" class="apex-charts"></div>
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
                <h4 class="card-title">Treemap Multiple Series</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="multiple-treemap" class="apex-charts"></div>
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
                <h4 class="card-title">Distributed Treemap</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="distributed-treemap" class="apex-charts"></div>
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
                <h4 class="card-title">Color Range Treemap</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="color-range-treemap" class="apex-charts"></div>
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
@vite(['resources/js/pages/chart-apex-treemap.js'])
@endsection
