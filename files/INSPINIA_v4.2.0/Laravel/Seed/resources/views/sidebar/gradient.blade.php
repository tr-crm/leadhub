@extends('layouts.vertical', ['title' => 'Gradient Menu'])

@section('html_attribute')
    data-menu-color="gradient"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', [ 'title' => 'Gradient'])

        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-warning alert-bordered border-start border-warning d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To enable a gradient sidebar style, add
                        <code>data-menu-color="gradient"</code> to the
                        <code>&lt;html&gt;</code> tag in your layout.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
