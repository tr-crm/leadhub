@extends('layouts.base', ['title' => 'Two Factor Authentication'])

@section('content')

<div class="auth-box d-flex align-items-center">
    <div class="container-xxl">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10">
                <div class="card rounded-4">
                    <div class="row justify-content-between g-0">
                        <div class="col-lg-6">
                            <div class="card-body">
                                <div class="auth-brand text-center mb-4">
                                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                                        <img src="/images/logo-black.png" alt="dark logo" height="32">
                                    </a>
                                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                                        <img src="/images/logo.png" alt="logo" height="32">
                                    </a>
                                    <h4 class="fw-bold mt-4">Request sent Successfully ! | IN+</h4>
                                </div>

                                <div class="text-center mb-4">
                                    <h5 class="text-muted fs-base mb-3">We've emailed you a 6-digit verification code we sent to</h5>

                                    <div class="fw-bold fs-3">******6789</div>
                                </div>

                                <form>
                                    <label class="form-label">Enter your 6-digit code <span class="text-danger">*</span></label>
                                    <div class="d-flex gap-2 two-factor mb-3">
                                        <input type="password" class="form-control text-center" required>
                                        <input type="password" class="form-control text-center" required>
                                        <input type="password" class="form-control text-center" required>
                                        <input type="password" class="form-control text-center" required>
                                        <input type="password" class="form-control text-center" required>
                                        <input type="password" class="form-control text-center" required>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary fw-semibold py-2">Confirm</button>
                                    </div>
                                </form>

                                <p class="mt-4 text-muted text-center mb-4">Don’t have a code? <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Resend</a> or <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Call Us</a></p>
                                <p class="text-muted text-center mb-0">
                                    Return to <a href="{{ route('second', ['auth1', 'login'])}}" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                                </p>

                                <p class="text-center text-muted mt-4 mb-0">
                                    © 2014 -
                                    <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                <div class="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center"></div>
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
@vite(['resources/js/pages/auth-two-factor.js'])
@endsection