@extends('layouts.base', ['title' => 'Confirm Password'])

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
                        <h4 class="fw-bold mt-3">Confirm Password ! | IN+</h4>
                        <p class="text-muted w-lg-75 mx-auto">We've emailed you a 6-digit verification code. Please
                            enter it below to confirm your email address</p>
                    </div>

                    <div class="card p-4 rounded-4">
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="mb-3" data-password="bar">
                                <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" id="userPassword"
                                           placeholder="••••••••" required>
                                </div>
                                <div class="password-bar my-2"></div>
                                <p class="text-muted fs-xs mb-0">Use 8+ characters with letters, numbers & symbols.</p>
                                @if ($errors->get('password'))
                                    <ul class="list-unstyled ps-0 mt-1">
                                        @foreach ((array) $errors->get('password') as $message)
                                            <li class="text-danger mb-1">{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Update Password</button>
                            </div>

                        </form>

                        <p class="mt-4 text-muted text-center mb-4">Don’t have a code? <a href="#"
                                                                                          class="text-decoration-underline link-offset-2 fw-semibold">Resend</a>
                            or <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Call Us</a></p>
                        <p class="text-muted text-center mb-0">
                            Return to <a href="{{ route('login') }}"
                                         class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                        </p>
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
    @vite(['resources/js/pages/auth-two-factor.js','resources/js/pages/auth-password.js'])
@endsection
