@extends('layouts.vertical', ['title' => 'ApexSankey Apexcharts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Charts', 'title' => 'ApexSankey'])

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Sankey</h4>
            </div>

            <div class="card-body">
                <div id="basic-sankey" style="margin: 0 auto;"></div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Node Customization</h4>
            </div>

            <div class="card-body">
                <div dir="ltr">
                    <div id="node-sankey" style="margin: 0 auto;"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edge Customization</h4>
            </div>

            <div class="card-body">
                <div dir="ltr">
                    <div id="edge-sankey" style="margin: 0 auto;"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Font Options</h4>
            </div>

            <div class="card-body">
                <div id="font-sankey" style="margin: 0 auto;"></div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
</div>

@endsection

@section('scripts')
@vite(['resources/js/pages/chart-apexsankey.js'])
@endsection