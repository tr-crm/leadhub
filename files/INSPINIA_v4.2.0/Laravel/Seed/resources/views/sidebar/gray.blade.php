@extends('layouts.vertical', ['title' => 'Gray Menu'])

@section('html_attribute')
    data-menu-color="gray"
@endsection

@section('content')

    <div class="container-fluid">


        @include('layouts.partials/page-title', ['title' => 'Gray Menu'])

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To switch to a gray sidebar, add
                        <code>data-menu-color="gray"</code> to the
                        <code>&lt;html&gt;</code> tag in your layout.
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
@endsection
