@extends('layouts.base', ['title' => 'Verify Email'])

@section('css')
@endsection

@section('content')

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-md-6 col-sm-8">
                    <div class="auth-brand text-center mb-4">
                        <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                            <img src="/images/logo-black.png" alt="dark logo" height="32">
                        </a>
                        <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                            <img src="/images/logo.png" alt="logo" height="32">
                        </a>
                        <h4 class="fw-bold mt-3">Welcome to IN+</h4>
                        <p class="text-muted w-lg-75 mx-auto">Verify your email</p>
                    </div>

                    <div class="card p-4 rounded-4">

                        @if (session('status') == 'verification-link-sent')
                            <p>A new verification link has been sent to the email address you provided during registration.</p>
                        @endif
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Resend Verification
                                    Email
                                </button>
                            </div>
                        </form>
                    </div>

                    <p class="text-center text-muted mt-4 mb-0">
                        © 2014 -
                        <script>document.write(new Date().getFullYear())</script>
                        INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
