@extends('layouts.vertical', ['title' => 'Apex Candlestick Charts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Candlestick Apexchart'])

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Simple Candlestick Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="simple-candlestick" class="apex-charts"></div>
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
                <h4 class="card-title">Combo Candlestick Charts</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="combo-candlestick" class="apex-charts"></div>
                    <div id="combo-bar-candlestick" class="apex-charts"></div>
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
                <h4 class="card-title">Category X-Axis</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="x-axis-candlestick" class="apex-charts"></div>
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
                <h4 class="card-title">Candlestick with Line</h4>
            </div>
            <div class="card-body">
                <div dir="ltr">
                    <div id="candlestick-with-line" class="apex-charts"></div>
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
<script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>
@vite(['resources/js/pages/chart-apex-candlestick.js'])
@endsection