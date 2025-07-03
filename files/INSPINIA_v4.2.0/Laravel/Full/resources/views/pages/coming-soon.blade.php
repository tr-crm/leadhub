@extends('layouts.base', ['title' => 'Coming Soon!'])

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
                            <div class="col-lg-7">
                                <div class="card mb-0 border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="auth-brand text-center mb-3">
                                            <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                                                <img src="/images/logo-black.png" alt="dark logo" height="32">
                                            </a>
                                            <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                                                <img src="/images/logo.png" alt="logo" height="32">
                                            </a>
                                        </div>
                        
                                        <div class="p-2 text-center">

                                            <h3 class="fw-bold my-2">Big things are on the Way</h3>
                                            <p class="text-muted mb-0">We're crafting something awesome. Stay tuned!</p>

                                            <div class="row text-center justify-content-center my-4 g-2">
                                                <div class="col-6 col-sm-4 col-md-3 col-lg">
                                                    <div class="bg-light bg-opacity-10 px-2 py-4 rounded shadow-inner">
                                                        <h2 id="days" class="fw-bold text-primary fs-36">00</h2>
                                                        <p class="fw-semibold fs-xs mb-0">Days</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-3 col-lg">
                                                    <div class="bg-light bg-opacity-10 px-2 py-4 rounded shadow-inner">
                                                        <h3 id="hours" class="fw-bold text-primary fs-36">00</h3>
                                                        <p class="fw-semibold fs-xs mb-0">Hours</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-3 col-lg">
                                                    <div class="bg-light bg-opacity-10 px-2 py-4 rounded shadow-inner">
                                                        <h3 id="minutes" class="fw-bold text-primary fs-36">00</h3>
                                                        <p class="fw-semibold fs-xs mb-0">Minutes</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-md-3 col-lg">
                                                    <div class="bg-light bg-opacity-10 px-2 py-4 rounded shadow-inner">
                                                        <h3 id="seconds" class="fw-bold text-primary fs-36">00</h3>
                                                        <p class="fw-semibold fs-xs mb-0">Seconds</p>
                                                    </div>
                                                </div>
                                            </div>  
                                            
                                            <div class="error-glitch fs-xl" data-text="Stay tunned!">Stay tunned!</div>

                                            <div class="app-search app-search-pill w-xl-75 mx-auto input-group mt-3 rounded-pill">
                                                <input type="text" class="form-control py-2" placeholder="Enter email...">
                                                <i data-lucide="mail" class="app-search-icon text-muted"></i>
                                                <button class="btn btn-secondary" type="button">Notify me!</button>
                                            </div>

                                        </div>
                        
                                        <p class="text-center text-muted mt-5 mb-0">
                                            © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-bold">WebAppLayers</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
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
@vite(['resources/js/pages/coming-soon.js'])
@endsection

