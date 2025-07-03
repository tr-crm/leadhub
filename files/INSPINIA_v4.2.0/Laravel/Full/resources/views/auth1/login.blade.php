@extends('layouts.base', ['title' => 'Login'])

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
                    <p class="text-muted w-lg-75 mx-auto">Let’s get you signed in. Enter your email and password to continue.</p>
                </div>

                <div class="card p-4 rounded-4">
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="userEmail" name="email" value="inspinia@user.com">
                            </div>
                            @if ($errors->get('email'))
                                <ul class="list-unstyled ps-0 mt-1">
                                    @foreach ((array) $errors->get('email') as $message)
                                        <li class="text-danger mb-1">{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="userPassword" name="password" value="password">
                            </div>
                            @if ($errors->get('password'))
                                <ul class="list-unstyled ps-0 mt-1">
                                    @foreach ((array) $errors->get('password') as $message)
                                        <li class="text-danger mb-1">{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" id="rememberMe" name="remember">
                                <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold py-2">Login</button>
                        </div>
                    </form>

                    <p class="text-muted text-center mt-4 mb-0">
                        New here? <a href="{{ route('register') }}" class="text-decoration-underline link-offset-3 fw-semibold">Create an account</a>
                    </p>
                </div>

                <p class="text-center text-muted mt-4 mb-0">
                    © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection
