@extends('layouts.base', ['title' => '500 Error'])

@section('css')
@endsection

@section('content')

<div class="auth-box p-0 w-100">
    <div class="row w-100 g-0">
        <div class="col">
            <div class="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                <div class="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                    
                </div>
            </div>
        </div>
        <div class="col-xl-auto">
            <!--Auth Box content -->
            <div class="card auth-box-form border-0 mb-0">
                <div class="card-body min-vh-100 d-flex flex-column justify-content-center">
                    <div class="p-2 text-center mt-auto">
                        <img src="/images/svg/500.svg" alt="500" class="img-fluid">
                        <h3 class="fw-bold text-uppercase">Internal Server Error</h3>
                        <p class="text-muted">Something went wrong on our end. Please try again later.</p>

                        <button class="btn btn-primary mt-3 rounded-pill" onclick="window.location.href='{{ route('second', ['dashboards','index'])}}'">Go Home</button>
                    </div>
    
                    <p class="text-center text-muted mt-auto mb-0">
                        © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-bold">WebAppLayers</span>
                    </p>
                </div>
            </div>
            <!-- End Auth Box Content -->
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection
