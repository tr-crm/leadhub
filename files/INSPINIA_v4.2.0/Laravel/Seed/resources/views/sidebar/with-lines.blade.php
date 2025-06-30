@extends('layouts.vertical', ['title' => 'Sidebar with Lines'])

@section('html_attribute')
    class="sidebar-with-line"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Sidebar with Lines'])

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        If you want to display a line with each menu item, add the class
                        <code>"sidebar-with-line"</code> to the
                        <code>&lt;html&gt;</code> tag.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
