@extends('layouts.vertical', ['title' => 'On Hover Menu'])

@section('html_attribute')
    data-sidenav-size="on-hover-active"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'On Hover Active'])

        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-warning alert-bordered border-start border-warning d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To enable the full menu on hover after minimizing the sidebar, add
                        <code>data-sidenav-size="on-hover-active"</code> to the
                        <code>&lt;html&gt;</code> tag in your layout.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
