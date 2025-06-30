@extends('layouts.vertical', ['title' => 'Text Diff'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Miscellaneous', 'title' => 'Text Diff'])

<div class="card">
    <div class="card-header">
        <h4 class="card-title">jsdiff</h4>

        <div class="card-action" data-tg-order="2" data-tg-fixed data-tg-tour="<p class='mb-3'>Sync the website theme to your system defaults as well as toggle your preference.</p><p class='opacity-50 text-xs'>This also shows how tourGuide can focus on fixed position elements.</p>" data-tg-title="Code Example">
            <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
            <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
        </div>
    </div> <!-- end card-header -->

    <div class="code-body">
        <pre>
           <code class="language-markup">
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-md-4&quot;&gt;
                    &lt;h4 class=&quot;mb-2&quot;&gt;Oryginal text&lt;/h4&gt;
                    &lt;textarea class=&quot;diff-original form-control&quot; rows=&quot;8&quot;&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1800s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only centuries, but also the leap into electronic typesetting.
                    &lt;/textarea&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-md-4&quot;&gt;
                    &lt;h4 class=&quot;mb-2&quot;&gt;Changed text&lt;/h4&gt;
                    &lt;textarea class=&quot;diff-changed form-control&quot; rows=&quot;8&quot;&gt;Lorem Ipsum is simply typesetting dummy text of the printing and has been the industry's typesetting. Lorem Ipsum has been the industry's standard dummy text ever the 1800s, when an printer took a galley of type and simply it to make a type. It has survived not only five centuries, but survived not also the leap into electronic typesetting.&lt;/textarea&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-md-4&quot;&gt;
                    &lt;h4 class=&quot;mb-2&quot;&gt;Diff results&lt;/h4&gt;
                    &lt;div class=&quot;diff-output diff&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Find Javascript in File: /js/pages/misc-text-diff.js --&gt;

            &lt;!-- Check Docs here:https://github.com/kpdecker/jsdiff --&gt;
           </code>
        </pre>
    </div> <!-- end code view -->

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-2 text-uppercase">Oryginal Text</h5>
                <textarea class="diff-original form-control" rows="8">On a rainy Monday morning in a small town, Emma walked into her favorite café, her umbrella dripping and her hair slightly frizzy from the storm. She always ordered the same thing: black coffee, two sugars, and a blueberry muffin. But today, someone was already sitting at her usual table by the window. It was Jack — a quiet man with a book in hand and headphones around his neck. Their eyes met for a second. He smiled and motioned for her to join him. Hesitant but intrigued, Emma accepted.
                </textarea>
            </div> <!-- end col -->

            <div class="col-md-6">
                <h5 class="mb-2 text-uppercase">Changed Text</h5>
                <textarea class="diff-changed form-control" rows="8">On a rainy Monday morning in a small town, Emma stepped into her favorite café, her umbrella dripping and her hair slightly frizzy from the damp weather. She always ordered the same thing: black coffee with two sugars and a blueberry muffin. But today, someone was already seated at her usual window table. It was Jack — a quiet man with a book in one hand and headphones resting around his neck. Their eyes met briefly. He smiled and gestured for her to join him. Hesitant but curious, Emma agreed.</textarea>
            </div> <!-- end col -->

            <div class="col-md-12">
                <h5 class="mb-2 mt-3 text-uppercase">Results</h5>
                <div class="p-3 bg-light-subtle border border-dashed rounded lh-lg">
                    <div class="diff-output diff"></div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end card-body -->
</div> <!-- end card -->

@endsection

@section('scripts')
@vite(['resources/js/pages/misc-text-diff.js'])
@endsection