@extends('layouts.vertical', ['title' => 'Preloader Layout'])

@section('css')
@endsection

@section('content')

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="container-fluid">

        @include('layouts.partials/page-title', ['title' => 'Preloader'])

    </div>

@endsection

@section('scripts')
@endsection
