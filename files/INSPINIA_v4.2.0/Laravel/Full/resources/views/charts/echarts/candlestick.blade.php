@extends('layouts.vertical', ['title' => 'Echart Candlestick Chart'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'Candlestick Echart'])

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Candlestick Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-basic-candlestick" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Mixed Candlestick Chart</h4>
            </div>
            <div class="card-body">
                <div id="chart-mixed-candlestick" style="min-height:400px"></div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-echart-candlestick.js'])
@endsection
