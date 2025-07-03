@extends('layouts.vertical', ['title' => 'Data Rendering Datatables'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'DataTables', 'title' => 'Data Rendering'])

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div class="card">
            <div class="card-header justify-content-between">
                <h4 class="card-title"> Example </h4>
                <a href="https://datatables.net/examples/basic_init/data_rendering.html" target="_blank"
                   class="icon-link icon-link-hover link-primary fw-semibold">View Docs <i
                        class="ti ti-arrow-right bi align-middle fs-lg"></i></a>
            </div>

            <div class="card-body">
                <table id="datatable-rendering" class="table table-striped dt-responsive align-middle mb-0">
                    <thead class="thead-sm text-uppercase fs-xxs">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Progress</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                </table>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

@endsection

@section('scripts')
@vite(['resources/js/pages/datatables-rendering.js'])
@endsection