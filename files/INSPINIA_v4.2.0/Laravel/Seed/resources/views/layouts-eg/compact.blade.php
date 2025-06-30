@extends('layouts.vertical', ['title' => 'Compact Layout'])

@section('content')

    <div class="container-fluid">
        @include('layouts.partials/page-title', ['title' => 'Compact'])
    </div>

    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                    <i class="ti ti-info-circle fs-xxl"></i>
                    <div>
                        To use the compact layout, follow this structure: wrap your page title in
                        <code>&lt;div class="container-fluid"&gt;</code> and place your main content inside
                        <code>&lt;div class="container-xl"&gt;</code>. This ensures proper spacing and alignment.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
