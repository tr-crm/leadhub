@extends('layouts.vertical', ['title' => 'Flat Skin'])

@section('html_attribute')
    data-skin="flat"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Flat Skin'])

        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2 mb-3">
                    <i class="ti ti-info-circle fs-20"></i>
                    <div>
                        Set <code>data-skin="flat"</code> in the <code>&lt;html&gt;</code> tag to use the Flat theme.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
