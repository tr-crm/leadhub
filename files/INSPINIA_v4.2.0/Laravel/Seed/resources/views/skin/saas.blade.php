@extends('layouts.vertical', ['title' => 'SaaS Skin'])

@section('html_attribute')
    data-skin="saas"
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Saas Skin'])

        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2 mb-3">
                    <i class="ti ti-info-circle fs-20"></i>
                    <div>
                        Set <code>data-skin="saas"</code> in the <code>&lt;html&gt;</code> tag to use the SaaS theme.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
