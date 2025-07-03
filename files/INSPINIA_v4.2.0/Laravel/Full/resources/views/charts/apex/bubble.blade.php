@extends('layouts.vertical', ['title' => 'Apex Bubble Charts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Bubble Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Simple Bubble Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="simple-bubble" class="apex-charts"></div>
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
                <h4 class="card-title">3D Bubble Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="threed-bubble" class="apex-charts"></div>
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
                <h4 class="card-title">Bubble Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="three-bubble" class="apex-charts"></div>
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
@vite(['resources/js/pages/chart-apex-bubble.js'])
@endsection