@extends('layouts.base', ['title' => '408 Error'])

@section('css')
@endsection

@section('content')

<div class="auth-box d-flex align-items-center">
    <div class="container-xxl">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10">
                <div class="card rounded-3 p-0 rounded-4">
                    <div class="card-body p-0">
                        <div class="row justify-content-between g-0">
                            <div class="col-lg-6">
                                <div class="card mb-0 border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="auth-brand text-center mb-3">
                                            <a href="{{ route('second', ['dashboards','index'])}}" class="logo-dark">
                                                <img src="/images/logo-black.png" alt="dark logo" height="32">
                                            </a>
                                            <a href="{{ route('second', ['dashboards','index'])}}" class="logo-light">
                                                <img src="/images/logo.png" alt="logo" height="32">
                                            </a>
                                        </div>
                        
                                        <div class="p-2 text-center">
                                            <div class="error-wave-container error-text-alt justify-content-center gap-1">
                                                <span class="error-wave-char">4</span>
                                                <span class="error-wave-char">0</span>
                                                <span class="error-wave-char">8</span>
                                            </div>

                                            <h3 class="fw-bold text-uppercase">Request Timeout</h3>
                                            <p class="text-muted">Your request took too long, and the server timed out. Please try again later.</p>

                                            <button class="btn btn-primary mt-3 rounded-pill" onclick="window.location.href='{{ route('second', ['dashboards','index'])}}'">Back to Safety</button>
                                        </div>
                        
                                        <p class="text-center text-muted mt-5 mb-0">
                                            © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-bold">WebAppLayers</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                    <div class="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection
