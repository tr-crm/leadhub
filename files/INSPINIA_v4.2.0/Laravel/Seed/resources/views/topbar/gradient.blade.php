@extends('layouts.vertical', ['title' => 'Gradient Topbar'])

@section('html_attribute')
    data-topbar-color="gradient" data-menu-color="light"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Gradient Topbar'])

        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-warning alert-bordered border-start border-warning d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To enable the gradient topbar, add
                        <code>data-topbar-color="gradient"</code> to the
                        <code>&lt;html&gt;</code> tag in your layout.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
