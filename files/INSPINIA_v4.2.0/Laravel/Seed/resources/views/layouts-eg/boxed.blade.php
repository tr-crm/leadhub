@extends('layouts.vertical', ['title' => 'Boxed Layout'])

@section('html_attribute')
    data-layout-width="boxed" data-sidenav-size="on-hover"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Boxed'])

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To enable the boxed layout, add
                        <code>data-layout-width="boxed"</code> to the
                        <code>&lt;html&gt;</code> tag. For optimal spacing and usability, we also recommend adding
                        <code>data-sidenav-size="on-hover"</code> to make the sidebar compact while keeping more room
                        for content.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
