@extends('layouts.vertical', ['title' => 'Collapse'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Collapse'])

<div class="container-xl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-2">
                        Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/collapse/" target="_blank">
                        Collapse on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- end row -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Collapse</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
                                Link with href
                            &lt;/a&gt;
                            &lt;button class=&quot;btn btn-primary ms-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
                                Button with data-bs-target
                            &lt;/button&gt;    

                            &lt;div class=&quot;collapse show&quot; id=&quot;collapseExample&quot;&gt;
                                &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                    ...
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                        </a>
                        <button class="btn btn-primary ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                        </button>
                    </p>
                    <div class="collapse show" id="collapseExample">
                        <div class="card card-body mb-0">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry
                            richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
                            labore wes
                            anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Multiple Targets</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
                
                            &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
                                &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                    ...
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
                                &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                    ...
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->


                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body mb-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body mb-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->


        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Collapse Horizontal</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body" id="collapse-horizontal-code">
                    <pre>
                        <code class="language-markup">
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseWidthExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseWidthExample&quot;&gt;
                                Toggle width collapse
                            &lt;/button&gt;

                            &lt;div class=&quot;collapse collapse-horizontal&quot; id=&quot;collapseWidthExample&quot;&gt;
                                &lt;div class=&quot;card card-body mb-0&quot; style=&quot;width: 300px;&quot;&gt;
                                    ...
                                &lt;/div&gt;
                            &lt;/div&gt;    
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                            Toggle width collapse
                        </button>
                    </p>
                    <div style="height: 100px;">
                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                            <div class="card card-body mb-0" style="width: 300px;">
                                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row-->

</div> <!-- container -->

@endsection

@section('scripts')
@endsection
