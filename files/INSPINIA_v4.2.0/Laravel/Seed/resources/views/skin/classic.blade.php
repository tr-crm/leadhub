@extends('layouts.vertical', ['title' => 'Classic Skin'])

@section('css')
@endsection

@section('content')

    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Classic Skin'])

        <div class="row">
            <div class="col-12">
                <div
                    class="alert alert-primary alert-bordered border-start border-primary d-flex align-items-center gap-2 mb-3">
                    <i class="ti ti-info-circle fs-20"></i>
                    <div class="fw-bold text-decoration-underline">
                        INSPINIA comes with the Classic Theme set as the Default.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
