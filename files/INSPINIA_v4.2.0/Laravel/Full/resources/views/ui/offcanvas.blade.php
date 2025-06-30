@extends('layouts.vertical', ['title' => 'Offcanvas'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Offcanvas'])

<div class="container-xl">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-2">
                        Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/offcanvas/" target="_blank">
                        Offcanvas on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Offcanvas</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                                          
                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;offcanvas&quot; href=&quot;#offcanvasExample&quot; role=&quot;button&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
                                Link with href
                            &lt;/a&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasExample&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
                                Button with data-bs-target
                            &lt;/button&gt;

                            &lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasExample&quot; aria-labelledby=&quot;offcanvasExampleLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasExampleLabel&quot;&gt;Offcanvas&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;

                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;
                        </code>
                    </pre>
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted fs-base">You can trigger an offcanvas using a link with <code>href</code> or a button with <code>data-bs-target</code>, but both must include <code>data-bs-toggle="offcanvas"</code>.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            Link with href
                        </a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Button with data-bs-target
                        </button>
                    </div> <!-- end d-flex flex-wrap gap-2-->

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div> <!-- end offcanvas-header-->

                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                images, lists, etc.
                            </div>
                            <h5 class="mt-3">List</h5>
                            <ul class="ps-3">
                                <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                <li class="">Neque porro quisquam est, qui dolorem</li>
                                <li class="">Quis autem vel eum iure qui in ea</li>
                            </ul>

                            <ul class="ps-3">
                                <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                <li class="">Et harum quidem rerum facilis</li>
                                <li class="">Temporibus autem quibusdam et aut officiis</li>
                            </ul>
                        </div> <!-- end offcanvas-body-->
                    </div> <!-- end offcanvas-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Offcanvas Backdrop</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Enable body scrolling --&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasScrolling&quot; aria-controls=&quot;offcanvasScrolling&quot;&gt;Enable body scrolling&lt;/button&gt;
                            &lt;!-- Enable backdrop (default) --&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBackdrop&quot; aria-controls=&quot;offcanvasWithBackdrop&quot;&gt;Enable backdrop (default)&lt;/button&gt;
                            &lt;!-- Enable both scrolling &amp; backdrop --&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBothOptions&quot; aria-controls=&quot;offcanvasWithBothOptions&quot;&gt;Enable both scrolling &amp; backdrop&lt;/button&gt;
                            
                            &lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; data-bs-backdrop=&quot;false&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasScrolling&quot; aria-labelledby=&quot;offcanvasScrollingLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasScrollingLabel&quot;&gt;Colored with scrolling&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;
                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;

                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;

                            &lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBackdrop&quot; aria-labelledby=&quot;offcanvasWithBackdropLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBackdropLabel&quot;&gt;Offcanvas with backdrop&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;

                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;

                            &lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBothOptions&quot; aria-labelledby=&quot;offcanvasWithBothOptionsLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBothOptionsLabel&quot;&gt;Backdroped with scrolling&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;

                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;At vero eos et accusamus et iusto odio dignissimos&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Et harum quidem rerum facilis&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Temporibus autem quibusdam et aut officiis&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;
                        </code>
                    </pre>
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted fs-base">When an offcanvas and its backdrop are visible, <code>&lt;body&gt;</code> scrolling is disabled. Use <code>data-bs-scroll</code> to enable scrolling and <code>data-bs-backdrop</code> to control the backdrop visibility.</p>

                    <div class="d-flex flex-wrap gap-2">
                        <!-- Enable body scrolling -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>

                        <!-- Enable backdrop (default) -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>

                        <!-- Enable both scrolling & backdrop -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

                    </div> <!-- end d-flex flex-wrap gap-2-->

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div> <!-- end offcanvas-header-->
                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                images, lists, etc.
                            </div>
                            <h5 class="mt-3">List</h5>
                            <ul class="ps-3">
                                <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                <li class="">Neque porro quisquam est, qui dolorem</li>
                                <li class="">Quis autem vel eum iure qui in ea</li>
                            </ul>

                            <ul class="ps-3">
                                <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                <li class="">Et harum quidem rerum facilis</li>
                                <li class="">Temporibus autem quibusdam et aut officiis</li>
                            </ul>
                        </div> <!-- end offcanvas-body-->
                    </div> <!-- end offcanvas-->

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div> <!-- end offcanvas-header-->

                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                images, lists, etc.
                            </div>
                            <h5 class="mt-3">List</h5>
                            <ul class="ps-3">
                                <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                <li class="">Neque porro quisquam est, qui dolorem</li>
                                <li class="">Quis autem vel eum iure qui in ea</li>
                            </ul>

                            <ul class="ps-3">
                                <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                <li class="">Et harum quidem rerum facilis</li>
                                <li class="">Temporibus autem quibusdam et aut officiis</li>
                            </ul>
                        </div> <!-- end offcanvas-body-->
                    </div> <!-- end offcanvas-->

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div> <!-- end offcanvas-header-->

                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                images, lists, etc.
                            </div>
                            <h5 class="mt-3">List</h5>
                            <ul class="ps-3">
                                <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                <li class="">Neque porro quisquam est, qui dolorem</li>
                                <li class="">Quis autem vel eum iure qui in ea</li>
                            </ul>

                            <ul class="ps-3">
                                <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                                <li class="">Et harum quidem rerum facilis</li>
                                <li class="">Temporibus autem quibusdam et aut officiis</li>
                            </ul>
                        </div> <!-- end offcanvas-body-->
                    </div> <!-- end offcanvas-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Offcanvas Placement</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Toggle Top offcanvas --&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot; aria-controls=&quot;offcanvasTop&quot;&gt;Toggle Top offcanvas&lt;/button&gt;
                            &lt;!-- Toggle right offcanvas --&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasRight&quot; aria-controls=&quot;offcanvasRight&quot;&gt;Toggle right offcanvas&lt;/button&gt;
                            &lt;!-- Toggle bottom offcanvas --&gt;
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot; aria-controls=&quot;offcanvasBottom&quot;&gt;Toggle bottom offcanvas&lt;/button&gt;
                            &lt;!-- Toggle Left offcanvas --&gt;
                            &lt;button class=&quot;btn btn-primary mt-2 mt-lg-0&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasLeft&quot; aria-controls=&quot;offcanvasLeft&quot;&gt;Toggle Left offcanvas&lt;/button&gt;
                       
                            &lt;div class=&quot;offcanvas offcanvas-end&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasRight&quot; aria-labelledby=&quot;offcanvasRightLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 id=&quot;offcanvasRightLabel&quot;&gt;Offcanvas right&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;

                            &lt;div class=&quot;offcanvas offcanvas-bottom&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasBottom&quot; aria-labelledby=&quot;offcanvasBottomLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasBottomLabel&quot;&gt;Offcanvas bottom&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;

                            &lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasLeft&quot; aria-labelledby=&quot;offcanvasLeftLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 id=&quot;offcanvasLeftLabel&quot;&gt;Offcanvas Left&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close text-reset&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;
                        </code>
                    </pre>
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted fs-sm">
                        <code>.offcanvas-start</code> positions the offcanvas on the left, <code>.offcanvas-end</code> on the right, <code>.offcanvas-top</code> displays it from the top, and <code>.offcanvas-bottom</code> displays it from the bottom of the viewport.
                    </p>

                    <div>
                        <div class="d-flex flex-wrap gap-2">
                            <!-- Toggle Top offcanvas -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle Top offcanvas</button>
                            <!-- Toggle right offcanvas -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
                            <!-- Toggle bottom offcanvas -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
                            <!-- Toggle Left offcanvas -->
                            <button class="btn btn-primary mt-2 mt-lg-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Toggle Left offcanvas</button>
                        </div> <!-- end d-flex flex-wrap gap-2-->

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasTopLabel">Offcanvas Top</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div> <!-- end offcanvas-header-->

                            <div class="offcanvas-body">
                                <div>
                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                    images, lists, etc.
                                </div>
                                <h5 class="mt-3">List</h5>
                                <ul class="ps-3">
                                    <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                    <li class="">Neque porro quisquam est, qui dolorem</li>
                                    <li class="">Quis autem vel eum iure qui in ea</li>
                                </ul>
                            </div> <!-- end offcanvas-body-->
                        </div> <!-- end offcanvas-->

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div> <!-- end offcanvas-header-->

                            <div class="offcanvas-body">
                                <div>
                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                    images, lists, etc.
                                </div>
                                <h5 class="mt-3">List</h5>
                                <ul class="ps-3">
                                    <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                    <li class="">Neque porro quisquam est, qui dolorem</li>
                                    <li class="">Quis autem vel eum iure qui in ea</li>
                                </ul>
                            </div> <!-- end offcanvas-body-->
                        </div> <!-- end offcanvas-->

                        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div> <!-- end offcanvas-header-->

                            <div class="offcanvas-body">
                                <div>
                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                    images, lists, etc.
                                </div>
                                <h5 class="mt-3">List</h5>
                                <ul class="ps-3">
                                    <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                    <li class="">Neque porro quisquam est, qui dolorem</li>
                                    <li class="">Quis autem vel eum iure qui in ea</li>
                                </ul>
                            </div> <!-- end offcanvas-body-->
                        </div> <!-- end offcanvas-->

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasLeftLabel">Offcanvas Left</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div> <!-- end offcanvas-header-->

                            <div class="offcanvas-body">
                                <div>
                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                    images, lists, etc.
                                </div>
                                <h5 class="mt-3">List</h5>
                                <ul class="ps-3">
                                    <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                    <li class="">Neque porro quisquam est, qui dolorem</li>
                                    <li class="">Quis autem vel eum iure qui in ea</li>
                                </ul>
                            </div> <!-- end offcanvas-body-->
                        </div> <!-- end offcanvas-->
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Dark Offcanvas</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasDark&quot; aria-controls=&quot;offcanvasDark&quot;&gt;Dark offcanvas&lt;/button&gt;

                            &lt;div class=&quot;offcanvas offcanvas-start text-bg-dark&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasDark&quot; aria-labelledby=&quot;offcanvasDarkLabel&quot;&gt;
                                &lt;div class=&quot;offcanvas-header&quot;&gt;
                                    &lt;h5 id=&quot;offcanvasDarkLabel&quot;&gt;Dark Offcanvas&lt;/h5&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-header--&gt;

                                &lt;div class=&quot;offcanvas-body&quot;&gt;
                                    &lt;div&gt;
                                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                        images, lists, etc.
                                    &lt;/div&gt;
                                    &lt;h5 class=&quot;mt-3&quot;&gt;List&lt;/h5&gt;
                                    &lt;ul class=&quot;ps-3&quot;&gt;
                                        &lt;li class=&quot;&quot;&gt;Nemo enim ipsam voluptatem quia aspernatur&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Neque porro quisquam est, qui dolorem&lt;/li&gt;
                                        &lt;li class=&quot;&quot;&gt;Quis autem vel eum iure qui in ea&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt; &lt;!-- end offcanvas-body--&gt;
                            &lt;/div&gt; &lt;!-- end offcanvas--&gt;
                        </code>
                    </pre>
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted fs-sm">Customize the look of offcanvases using utility classes to suit different themes, such as dark navbars. Add <code>.text-bg-dark</code> to <code>.offcanvas</code> and <code>.btn-close-white</code> to <code>.btn-close</code> for dark styling.</p>

                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">Dark offcanvas</button>

                    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasDarkLabel">Dark Offcanvas</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div> <!-- end offcanvas-header-->

                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                images, lists, etc.
                            </div>
                            <h5 class="mt-3">List</h5>
                            <ul class="ps-3">
                                <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                                <li class="">Neque porro quisquam est, qui dolorem</li>
                                <li class="">Quis autem vel eum iure qui in ea</li>
                            </ul>
                        </div> <!-- end offcanvas-body-->
                    </div> <!-- end offcanvas-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row -->

</div> <!-- container -->

@endsection

@section('scripts')
@endsection
