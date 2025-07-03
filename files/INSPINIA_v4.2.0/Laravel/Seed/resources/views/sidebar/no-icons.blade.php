@extends('layouts.vertical', ['title' => 'Sidebar without Icons with Lines'])

@section('html_attribute')
    class="sidebar-no-icons sidebar-with-line"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'No Icons with Lines'])

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        If you want to remove icons and display sidebar items in line style, add the class
                        <code>"sidebar-no-icons sidebar-with-line"</code> to the
                        <code>&lt;html&gt;</code> tag.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
