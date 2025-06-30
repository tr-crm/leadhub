@extends('layouts.vertical', ['title' => 'Idle Timer'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Miscellaneous', 'title' => 'Idle Timer'])

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Idle Timer Plugin</h4>
            </div>
            <div class="card-body">
        
                <!-- Alert placeholder (initially hidden) -->
                <div class="alert alert-danger d-none idle-alert" role="alert">
                    Your session has expired. Please move your mouse to resume your activity.
                </div>
        
                <p class="text-muted">
                    The Idle Timer plugin allows you to monitor user activity on the page. Idle is defined as a lack of mouse movement, scrolling, or keyboard input.
                </p>
        
                <div class="text-center p-3 h-200">
        
                    <i class="ti ti-hand-finger fs-36 mb-3 d-block"></i>
                    <h3 class="fst-italic">Please stay idle for 5 seconds</h3>
        
                </div>
        
                <p class="mb-0">
                    You can instantiate the timer either statically or on a specific element. Element-bound timers will only track activity within that element, whereas global timers will monitor activity on the entire page. To set up page-level activity, you can initialize the timer on <code>document</code>, <code>document.documentElement</code>, or <code>document.body</code>.
                    The initialization returns a jQuery object, allowing for method chaining.
                </p>
        
                <div class="toast-container position-fixed top-0 end-0 p-3">
                    <!-- Success Toast -->
                    <div id="backToast" class="toast shadow-lg text-bg-success border-success" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header text-bg-success border-success">
                            <strong class="me-auto">Welcome Back</strong>
                            <small>Now</small>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body fst-italic">
                            We missed you! Welcome back!
                        </div>
                    </div>
        
                    <!-- Toast container -->
                    <div id="liveToast" class="toast shadow-lg text-bg-warning border-warning" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header text-bg-warning border-warning">
                            <img src="/images/logo-sm.png" class="rounded me-2" height="20" alt="...">
                            <strong class="me-auto">Idle Alert</strong>
                            <small>Just now</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body fst-italic">
                            You've been inactive for too long. Please interact with the page to continue.
                        </div>
                    </div>
                </div> <!-- end toast-container-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>  <!-- end col-->
</div>  <!-- end row-->       

@endsection

@section('scripts')
@vite(['resources/js/pages/misc-idle-timer.js'])
@endsection