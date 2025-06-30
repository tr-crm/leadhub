@extends('layouts.vertical', ['title' => 'Light Menu'])

@section('html_attribute')
    data-menu-color="light"
@endsection

@section('content')

    <div class="container-fluid">
        @include('layouts.partials/page-title', ['title' => 'Light Menu'])

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To switch to a light sidebar, add
                        <code>data-menu-color="light"</code> to the
                        <code>&lt;html&gt;</code> tag in your layout.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
