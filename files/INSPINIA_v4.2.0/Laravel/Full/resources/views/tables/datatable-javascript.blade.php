@extends('layouts.vertical', ['title' => 'Javascript Source Datatables'])

@section('css')
@vite(['node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css'])
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'DataTables', 'title' => 'Javascript Source'])

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div class="card">
            <div class="card-header justify-content-between">
                <h4 class="card-title"> Example </h4>
                <a href="https://datatables.net/examples/data_sources/js_array.html" target="_blank" class="icon-link icon-link-hover link-primary fw-semibold">View Docs <i class="ti ti-arrow-right bi align-middle fs-lg"></i></a>
            </div>

            <div class="card-body">
                <table id="datatables-javascript-source" class="table table-striped dt-responsive align-middle mb-0">
                    <thead class="thead-sm text-uppercase fs-xxs">
                        <tr>
                            <th>Company</th>
                            <th>Symbol</th>
                            <th>Price</th>
                            <th>Change</th>
                            <th>Volume</th>
                            <th>Market Cap</th>
                            <th>Rating</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div> <!-- end row-->

@endsection

@section('scripts')
@vite(['resources/js/pages/datatables-javascript-source.js'])
@endsection