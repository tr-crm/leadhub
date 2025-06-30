@extends('layouts.vertical', ['title' => 'Accordions'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Accordions'])

<div class="container-xl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-2">
                        Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/accordion/" target="_blank">
                        Accordions on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Default Accordions</h4>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
                                        &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                                            Accordion Item #1
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                           ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                                            Accordion Item #2
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                                            Accordion Item #3
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!--end preview code-->

                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Flush Accordions</h4>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;accordion accordion-flush&quot; id=&quot;accordionFlushExample&quot;&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingOne&quot;&gt;
                                        &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#flush-collapseOne&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseOne&quot;&gt;
                                            Accordion Item #1
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;flush-collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;flush-headingOne&quot; data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                        ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingTwo&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#flush-collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseTwo&quot;&gt;
                                            Accordion Item #2
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;flush-collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingTwo&quot; data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingThree&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#flush-collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseThree&quot;&gt;
                                            Accordion Item #3
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;flush-collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingThree&quot; data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="m-0">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                                    filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                    happening here in terms of content, but just filling up the space to make it look, at least at first
                                    glance, a bit more representative of how this would look in a real-world application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Always Open Accordions</h4>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;accordion&quot; id=&quot;accordionPanelsStayOpenExample&quot;&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;panelsStayOpen-headingOne&quot;&gt;
                                        &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#panelsStayOpen-collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;panelsStayOpen-collapseOne&quot;&gt;
                                            Accordion Item #1
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;panelsStayOpen-collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;panelsStayOpen-headingOne&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                        ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;panelsStayOpen-headingTwo&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#panelsStayOpen-collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;panelsStayOpen-collapseTwo&quot;&gt;
                                            Accordion Item #2
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;panelsStayOpen-collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;panelsStayOpen-headingTwo&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;panelsStayOpen-headingThree&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#panelsStayOpen-collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;panelsStayOpen-collapseThree&quot;&gt;
                                            Accordion Item #3
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;panelsStayOpen-collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;panelsStayOpen-headingThree&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the
                                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default variables. It's also worth noting that just about any
                                    HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Accordion Without Arrow </h4>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;accordion accordion-arrow-none&quot; id=&quot;withoutarrowaccordionExample&quot;&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;withoutarrowheadingOne&quot;&gt;
                                        &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#withoutarrowcollapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;withoutarrowcollapseOne&quot;&gt;
                                            Accordion Item #1
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;withoutarrowcollapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;withoutarrowheadingOne&quot; data-bs-parent=&quot;#withoutarrowaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;withoutarrowheadingTwo&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#withoutarrowcollapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;withoutarrowcollapseTwo&quot;&gt;
                                            Accordion Item #2
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;withoutarrowcollapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;withoutarrowheadingTwo&quot; data-bs-parent=&quot;#withoutarrowaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;withoutarrowheadingThree&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#withoutarrowcollapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;withoutarrowcollapseThree&quot;&gt;
                                            Accordion Item #3
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;withoutarrowcollapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;withoutarrowheadingThree&quot; data-bs-parent=&quot;#withoutarrowaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <div class="accordion accordion-arrow-none" id="withoutarrowaccordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="withoutarrowheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#withoutarrowcollapseOne" aria-expanded="true" aria-controls="withoutarrowcollapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="withoutarrowcollapseOne" class="accordion-collapse collapse show" aria-labelledby="withoutarrowheadingOne" data-bs-parent="#withoutarrowaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="withoutarrowheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#withoutarrowcollapseTwo" aria-expanded="false" aria-controls="withoutarrowcollapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="withoutarrowcollapseTwo" class="accordion-collapse collapse" aria-labelledby="withoutarrowheadingTwo" data-bs-parent="#withoutarrowaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="withoutarrowheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#withoutarrowcollapseThree" aria-expanded="false" aria-controls="withoutarrowcollapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="withoutarrowcollapseThree" class="accordion-collapse collapse" aria-labelledby="withoutarrowheadingThree" data-bs-parent="#withoutarrowaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bordered Accordions</h4>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;accordion accordion-bordered&quot; id=&quot;BorderedaccordionExample&quot;&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;BorderedheadingOne&quot;&gt;
                                        &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#BorderedcollapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;BorderedcollapseOne&quot;&gt;
                                            Accordion Item #1
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;BorderedcollapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;BorderedheadingOne&quot; data-bs-parent=&quot;#BorderedaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                          ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;BorderedheadingTwo&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#BorderedcollapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;BorderedcollapseTwo&quot;&gt;
                                            Accordion Item #2
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;BorderedcollapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;BorderedheadingTwo&quot; data-bs-parent=&quot;#BorderedaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;BorderedheadingThree&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#BorderedcollapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;BorderedcollapseThree&quot;&gt;
                                            Accordion Item #3
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;BorderedcollapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;BorderedheadingThree&quot; data-bs-parent=&quot;#BorderedaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <div class="accordion accordion-bordered" id="BorderedaccordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="BorderedheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseOne" aria-expanded="true" aria-controls="BorderedcollapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="BorderedcollapseOne" class="accordion-collapse collapse show" aria-labelledby="BorderedheadingOne" data-bs-parent="#BorderedaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="BorderedheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseTwo" aria-expanded="false" aria-controls="BorderedcollapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="BorderedcollapseTwo" class="accordion-collapse collapse" aria-labelledby="BorderedheadingTwo" data-bs-parent="#BorderedaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="BorderedheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseThree" aria-expanded="false" aria-controls="BorderedcollapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="BorderedcollapseThree" class="accordion-collapse collapse" aria-labelledby="BorderedheadingThree" data-bs-parent="#BorderedaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Custom Icon Accordion</h4>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;accordion accordion-custom-icon accordion-arrow-none&quot; id=&quot;CustomIconaccordionExample&quot;&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;CustomIconheadingOne&quot;&gt;
                                        &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#CustomIconcollapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;CustomIconcollapseOne&quot;&gt;
                                            Accordion item with tabler icons
                                            &lt;i class=&quot;ti ti-plus accordion-icon accordion-icon-on&quot;&gt;&lt;/i&gt;
                                            &lt;i class=&quot;ti ti-minus accordion-icon accordion-icon-off&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;CustomIconcollapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;CustomIconheadingOne&quot; data-bs-parent=&quot;#CustomIconaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;CustomIconheadingTwo&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#CustomIconcollapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;CustomIconcollapseTwo&quot;&gt;
                                            Accordion item with lucid icons
                                            &lt;i data-lucide=&quot;plus-circle&quot; class=&quot;accordion-icon accordion-icon-on avatar-xxs me-n1&quot;&gt;&lt;/i&gt;
                                            &lt;i data-lucide=&quot;minus-circle&quot; class=&quot;accordion-icon accordion-icon-off avatar-xxs me-n1&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;CustomIconcollapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;CustomIconheadingTwo&quot; data-bs-parent=&quot;#CustomIconaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;accordion-item&quot;&gt;
                                    &lt;h2 class=&quot;accordion-header&quot; id=&quot;CustomIconheadingThree&quot;&gt;
                                        &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#CustomIconcollapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;CustomIconcollapseThree&quot;&gt;
                                            Accordion item with tabler icons
                                            &lt;i class=&quot;ti ti-arrow-down accordion-icon accordion-icon-on&quot;&gt;&lt;/i&gt;
                                            &lt;i class=&quot;ti ti-arrow-up accordion-icon accordion-icon-off&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/h2&gt;
                                    &lt;div id=&quot;CustomIconcollapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;CustomIconheadingThree&quot; data-bs-parent=&quot;#CustomIconaccordionExample&quot;&gt;
                                        &lt;div class=&quot;accordion-body&quot;&gt;
                                            ...
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div>

                <div class="card-body">
                    <div class="accordion accordion-custom-icon accordion-arrow-none" id="CustomIconaccordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="CustomIconheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#CustomIconcollapseOne" aria-expanded="true" aria-controls="CustomIconcollapseOne">
                                    Accordion item with tabler icons
                                    <i class="ti ti-plus accordion-icon accordion-icon-on"></i>
                                    <i class="ti ti-minus accordion-icon accordion-icon-off"></i>
                                </button>
                            </h2>
                            <div id="CustomIconcollapseOne" class="accordion-collapse collapse show" aria-labelledby="CustomIconheadingOne" data-bs-parent="#CustomIconaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="CustomIconheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CustomIconcollapseTwo" aria-expanded="false" aria-controls="CustomIconcollapseTwo">
                                    Accordion item with lucid icons
                                    <i data-lucide="plus-circle" class="accordion-icon accordion-icon-on avatar-xxs me-n1"></i>
                                    <i data-lucide="minus-circle" class="accordion-icon accordion-icon-off avatar-xxs me-n1"></i>
                                </button>
                            </h2>
                            <div id="CustomIconcollapseTwo" class="accordion-collapse collapse" aria-labelledby="CustomIconheadingTwo" data-bs-parent="#CustomIconaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="CustomIconheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CustomIconcollapseThree" aria-expanded="false" aria-controls="CustomIconcollapseThree">
                                    Accordion item with tabler icons
                                    <i class="ti ti-arrow-down accordion-icon accordion-icon-on"></i>
                                    <i class="ti ti-arrow-up accordion-icon accordion-icon-off"></i>
                                </button>
                            </h2>
                            <div id="CustomIconcollapseThree" class="accordion-collapse collapse" aria-labelledby="CustomIconheadingThree" data-bs-parent="#CustomIconaccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>

</div> <!-- container -->

@endsection

@section('scripts')
@endsection
