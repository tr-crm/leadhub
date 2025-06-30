@extends('layouts.vertical', ['title' => 'Ajax Datatables'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'DataTables', 'title' => 'Ajax'])

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div class="card">
            <div class="card-header justify-content-between">
                <h4 class="card-title"> Example </h4>
                <a href="https://datatables.net/examples/ajax/" target="_blank" class="icon-link icon-link-hover link-primary fw-semibold">View Docs <i class="ti ti-arrow-right bi align-middle fs-lg"></i></a>
            </div>

            <div class="card-body">
                <table id="datatables-ajax" class="table table-striped dt-responsive align-middle mb-0">
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
    </div>
</div>

@endsection

@section('scripts')
@vite(['resources/js/pages/datatables-ajax.js'])
@endsection
