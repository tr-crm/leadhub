@extends('layouts.vertical', ['title' => 'Live Favicon'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Miscellaneous', 'title' => 'Live Favicon'])

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Favicon Notification (Tinycon Alternative)</h5>

                <div class="card-action">
                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                </div>
            </div>

            <div class="code-body">
                <pre>
<code class="language-javascript">
// Set the badge number
Tinycon.setBubble(6);

// Customize appearance
Tinycon.setOptions({
    width: 7,
    height: 9,
    font: '10px Arial',
    colour: '#ffffff',
    background: '#549A2F',
    fallback: true
});
</code>
                </pre>
            </div>

            <div class="card-body">

                <strong>Display Notifications on Favicon</strong>
                <p>
                    Tinycon is a small library that lets you add dynamic notifications to the browser tab favicon.
                    You can show badge counts, change icon colors, and provide visual alerts when the user’s attention is needed.
                </p>

                <p>
                    For browsers that don’t support canvas or dynamic favicons, Tinycon automatically falls back to updating the document title with a count.
                </p>

                <div class="text-center p-3">
                    <a href="#" class="btn btn-light" id="iconExample1">Set Icon to 1</a>
                    <a href="#" class="btn btn-light" id="iconExample2">Set Icon to 1000</a>
                    <a href="#" class="btn btn-light" id="iconExample3">Set Icon to "In"</a>
                    <a href="#" class="btn btn-primary" id="iconExample4">Set Icon with Custom Color</a>
                </div>

                <h4> Options </h4>
                <p>Tinycon supports the following customization options:</p>
                <ul>
                    <li><strong>width</strong>: Width of the badge bubble</li>
                    <li><strong>height</strong>: Height of the badge bubble</li>
                    <li><strong>font</strong>: CSS font style for the badge text</li>
                    <li><strong>colour</strong>: Text color inside the badge</li>
                    <li><strong>background</strong>: Background color of the badge</li>
                    <li><strong>fallback</strong>: Show count in page title if favicon updates aren't supported</li>
                    <li><strong>abbreviate</strong>: Shorten large numbers (e.g., 1000 → 1k)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@vite(['resources/js/pages/misc-tinycon.js'])
@endsection