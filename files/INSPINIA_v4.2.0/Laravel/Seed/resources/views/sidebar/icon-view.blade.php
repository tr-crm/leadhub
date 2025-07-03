@extends('layouts.vertical', ['title' => 'Icon View Sidebar Layout'])

@section('html_attribute')
    data-sidenav-size="condensed"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'data-sidenav-size="condensed"'])

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To enable icon view menu scrolling and see all content, add
                        <code>data-sidenav-size="condensed"</code> to the
                        <code>&lt;html&gt;</code> tag.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
