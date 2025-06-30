@extends('layouts.vertical', ['title' => 'Utilities'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Utilities'])

<div class="container-xl">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-2">
                        The utility API is a Sass-based tool to generate utility classes.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank">
                        Utilities on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Color & Background</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                                            
                            &lt;div class=&quot;text-bg-primary p-2&quot;&gt;Primary with contrasting color (.text-bg-primary)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-secondary p-2&quot;&gt;Secondary with contrasting color (.text-bg-secondary)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-success p-2&quot;&gt;Success with contrasting color (.text-bg-success)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-danger p-2&quot;&gt;Danger with contrasting color (.text-bg-danger)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-warning p-2&quot;&gt;Warning with contrasting color (.text-bg-warning)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-info p-2&quot;&gt;Info with contrasting color (.text-bg-info)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-light p-2&quot;&gt;Light with contrasting color (.text-bg-light)&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-dark p-2&quot;&gt;Dark with contrasting color (.text-bg-dark)&lt;/div&gt;
                        </code>    
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-bg-dark p-2&quot;&gt;Purple with contrasting color (.text-bg-dark)&lt;/div&gt;
                        </code>   
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Color and background helpers combine the power of our
                        <code>.text-*</code> utilities and <code>.bg-*</code> utilities in one class. Using
                        our Sass <code>color-contrast()</code> function, we automatically determine a
                        contrasting <code>color</code> for a particular <code>background-color</code>.
                    </p>

                    <div class="d-flex flex-column gap-2">
                        <div class="text-bg-primary p-2">Primary with contrasting color
                            (.text-bg-primary)</div>
                        <div class="text-bg-secondary p-2">Secondary with contrasting color
                            (.text-bg-secondary)</div>
                        <div class="text-bg-success p-2">Success with contrasting color
                            (.text-bg-success)</div>
                        <div class="text-bg-danger p-2">Danger with contrasting color
                            (.text-bg-danger)</div>
                        <div class="text-bg-warning p-2">Warning with contrasting color
                            (.text-bg-warning)</div>
                        <div class="text-bg-info p-2">Info with contrasting color (.text-bg-info)
                        </div>
                        <div class="text-bg-light p-2">Light with contrasting color (.text-bg-light)
                        </div>
                        <div class="text-bg-dark p-2">Dark with contrasting color (.text-bg-dark)
                        </div>
                        <div class="text-bg-purple p-2">Purple with contrasting color (.text-bg-purple)
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Background Opacity</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;bg-primary p-2 text-white&quot;&gt;This is default primary background&lt;/div&gt;
                            &lt;div class=&quot;bg-primary p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity primary
                                background&lt;/div&gt;
                            &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity primary
                                background&lt;/div&gt;
                            &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity primary
                                background&lt;/div&gt;
                            &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success
                                background&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;bg-dark p-2 mt-4 text-white&quot;&gt;This is default dark background&lt;/div&gt;
                            &lt;div class=&quot;bg-dark p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity dark
                                background&lt;/div&gt;
                            &lt;div class=&quot;bg-dark p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity dark
                                background&lt;/div&gt;
                            &lt;div class=&quot;bg-dark p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity dark
                                background&lt;/div&gt;
                            &lt;div class=&quot;bg-dark p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success
                                background&lt;/div&gt;
                        </code>
                             
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <p class="text-muted"><code>background-color</code> utilities are generated with Sass
                        using CSS variables. This
                        allows for real-time color changes without compilation and dynamic alpha
                        transparency changes.</p>

                    <div class="bg-primary p-2 text-white">This is default primary background</div>
                    <div class="bg-primary p-2 text-white bg-opacity-75">This is 75% opacity primary
                        background</div>
                    <div class="bg-primary p-2 text-dark bg-opacity-50">This is 50% opacity primary
                        background</div>
                    <div class="bg-primary p-2 text-dark bg-opacity-25">This is 25% opacity primary
                        background</div>
                    <div class="bg-primary p-2 text-dark bg-opacity-10">This is 10% opacity success
                        background</div>


                    <div class="bg-dark p-2 mt-4 text-white">This is default dark background</div>
                    <div class="bg-dark p-2 text-white bg-opacity-75">This is 75% opacity dark
                        background</div>
                    <div class="bg-dark p-2 text-dark bg-opacity-50">This is 50% opacity dark
                        background</div>
                    <div class="bg-dark p-2 text-dark bg-opacity-25">This is 25% opacity dark
                        background</div>
                    <div class="bg-dark p-2 text-dark bg-opacity-10">This is 10% opacity success
                        background</div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Text Opacity Color</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;text-primary&quot;&gt;This is default primary text&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-primary text-opacity-75&quot;&gt;This is 75% opacity primary text&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-primary text-opacity-50&quot;&gt;This is 50% opacity primary text&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;text-primary text-opacity-25&quot;&gt;This is 25% opacity primary text&lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->

                <div class="card-body">
                    <p class="text-muted">Text color utilities are generated with Sass using CSS variables.
                        This allows for real-time color
                        changes without compilation and dynamic alpha transparency changes.</p>

                    <div class="text-primary">This is default primary text</div>
                    <div class="text-primary text-opacity-75">This is 75% opacity primary text</div>
                    <div class="text-primary text-opacity-50">This is 50% opacity primary text</div>
                    <div class="text-primary text-opacity-25">This is 25% opacity primary text</div>
                </div> <!-- end card-body -->

            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Opacity</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;opacity-100 p-2 bg-primary text-light fw-bold rounded&quot;&gt;100%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;opacity-75 p-2 bg-primary text-light fw-bold rounded&quot;&gt;75%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;opacity-50 p-2 bg-primary text-light fw-bold rounded&quot;&gt;50%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;opacity-25 p-2 bg-primary text-light fw-bold rounded&quot;&gt;25%&lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">The <code>opacity</code> property sets the opacity level for an
                        element. The opacity level describes the transparency
                        level, where <code>1</code> is not transparent at all, <code>.5</code> is 50%
                        visible, and <code>0</code> is
                        completely transparent. Set the <code>opacity</code> of an element using
                        <code>.opacity-{value}</code> utilities.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <div class="opacity-100 p-2 bg-primary text-light fw-bold rounded">100%
                        </div>
                        <div class="opacity-75 p-2 bg-primary text-light fw-bold rounded">75%</div>
                        <div class="opacity-50 p-2 bg-primary text-light fw-bold rounded">50%</div>
                        <div class="opacity-25 p-2 bg-primary text-light fw-bold rounded">25%</div>
                    </div>
                </div> <!--end card body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Border Radius</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                                               
                            &lt;img src=&quot;/images/users/user-2.jpg&quot; class=&quot;avatar-lg rounded&quot; alt=&quot;rounded&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-2.jpg&quot; class=&quot;avatar-lg rounded-top&quot; alt=&quot;rounded-top&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-2.jpg&quot; class=&quot;avatar-lg rounded-end&quot; alt=&quot;rounded-end&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-2.jpg&quot; class=&quot;avatar-lg rounded-bottom&quot; alt=&quot;rounded-bottom&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-2.jpg&quot; class=&quot;avatar-lg rounded-start&quot; alt=&quot;rounded-start&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-2.jpg&quot; class=&quot;avatar-lg rounded-circle&quot; alt=&quot;rounded-circle&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/stock/small-2.jpg&quot; class=&quot;avatar-lg w-auto rounded-pill&quot; alt=&quot;rounded-pill&quot;&gt;                                                
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Add classes to an element to easily round its corners.</p>

                    <div class="d-flex align-items-start flex-wrap gap-2">
                        <img src="/images/users/user-2.jpg" class="avatar-lg rounded" alt="rounded">
                        <img src="/images/users/user-2.jpg" class="avatar-lg rounded-top" alt="rounded-top">
                        <img src="/images/users/user-2.jpg" class="avatar-lg rounded-end" alt="rounded-end">
                        <img src="/images/users/user-2.jpg" class="avatar-lg rounded-bottom" alt="rounded-bottom">
                        <img src="/images/users/user-2.jpg" class="avatar-lg rounded-start" alt="rounded-start">
                        <img src="/images/users/user-2.jpg" class="avatar-lg rounded-circle" alt="rounded-circle">
                        <img src="/images/stock/small-3.jpg" class="w-auto rounded-pill" alt="rounded-pill" width="80">
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Pointer Events</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-none&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt;
                            can not be clicked.&lt;/p&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;This link&lt;/a&gt; can be clicked (this is default
                            behavior).&lt;/p&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;p class=&quot;pe-none&quot;&gt;&lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt;
                                can not be clicked because the
                                &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However,
                                &lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;this
                                    link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.
                            &lt;/p&gt;
                        </code>       
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Bootstrap provides <code>.pe-none</code> and <code>.pe-auto</code>
                        classes to prevent or add element interactions.</p>


                    <p><a href="#" class="pe-none" tabindex="-1">This link</a>
                        can not be clicked.</p>
                    <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default
                        behavior).</p>
                    <p class="pe-none"><a href="#" tabindex="-1">This link</a>
                        can not be clicked because the
                        <code>pointer-events</code> property is inherited from its parent. However,
                        <a href="#" class="pe-auto">this
                            link</a> has a <code>pe-auto</code> class and can be clicked.
                    </p>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Border Radius Size</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                                               
                            &lt;img src=&quot;/images/users/user-4.jpg&quot; class=&quot;avatar-lg rounded-0&quot; alt=&quot;rounded-0&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-4.jpg&quot; class=&quot;avatar-lg rounded-1&quot; alt=&quot;rounded-1&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-4.jpg&quot; class=&quot;avatar-lg rounded-2&quot; alt=&quot;rounded-2&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-4.jpg&quot; class=&quot;avatar-lg rounded-3&quot; alt=&quot;rounded-3&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-4.jpg&quot; class=&quot;avatar-lg rounded-4&quot; alt=&quot;rounded-4&quot;&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;img src=&quot;/images/users/user-4.jpg&quot; class=&quot;avatar-lg rounded-5&quot; alt=&quot;rounded-5&quot;&gt;                                             
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Use the scaling classes for larger or smaller rounded corners.
                        Sizes range from <code>0</code> to <code>5</code>.</p>

                    <div class="d-flex align-items-start flex-wrap gap-2">
                        <img src="/images/users/user-4.jpg" class="avatar-lg rounded-0" alt="rounded-0">
                        <img src="/images/users/user-4.jpg" class="avatar-lg rounded-1" alt="rounded-1">
                        <img src="/images/users/user-4.jpg" class="avatar-lg rounded-2" alt="rounded-2">
                        <img src="/images/users/user-4.jpg" class="avatar-lg rounded-3" alt="rounded-3">
                        <img src="/images/users/user-4.jpg" class="avatar-lg rounded-4" alt="rounded-4">
                        <img src="/images/users/user-4.jpg" class="avatar-lg rounded-5" alt="rounded-5">
                    </div>
                </div> <!--end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Text Selection</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;p class=&quot;text-muted&quot;&gt;Use &lt;code&gt;user-select-all&lt;/code&gt;, &lt;code&gt;user-select-auto&lt;/code&gt;,
                                or
                                &lt;code&gt;user-select-none&lt;/code&gt; class to the content which is selected when the user
                                interacts with it.
                            &lt;/p&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;p class=&quot;user-select-all&quot;&gt;...&lt;/p&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;p class=&quot;user-select-auto&quot;&gt;...&lt;/p&gt;
                        </code>    
                        
                        <code class="language-markup">
                            &lt;p class=&quot;user-select-none mb-0&quot;&gt;...&lt;/p&gt;
                        </code>  
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Use <code>user-select-all</code>, <code>user-select-auto</code>,
                        or
                        <code>user-select-none</code> class to the content which is selected when the user
                        interacts with it.
                    </p>

                    <p class="user-select-all">This paragraph will be entirely selected when clicked
                        by the user.</p>
                    <p class="user-select-auto">This paragraph has default select behavior.</p>
                    <p class="user-select-none mb-0">This paragraph will not be selectable when
                        clicked by the user.</p>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Overflow</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                                               
                            &lt;div class=&quot;overflow-auto p-3 bg-light&quot; style=&quot;max-width: 260px; max-height: 100px;&quot;&gt;
                                This is an example of using &lt;code&gt;.overflow-auto&lt;/code&gt; on an element
                                with set width and height dimensions. By
                                design, this content will vertically scroll.
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;overflow-hidden p-3 bg-light&quot; style=&quot;max-width: 260px; max-height: 100px;&quot;&gt;
                                This is an example of using &lt;code&gt;.overflow-hidden&lt;/code&gt; on an element
                                with set width and height dimensions.
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;overflow-visible p-3 bg-light&quot; style=&quot;max-width: 260px; max-height: 100px;&quot;&gt;
                                This is an example of using &lt;code&gt;.overflow-visible&lt;/code&gt; on an element
                                with set width and height dimensions.
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;overflow-scroll p-3 bg-light&quot; style=&quot;max-width: 260px; max-height: 100px;&quot;&gt;
                                This is an example of using &lt;code&gt;.overflow-scroll&lt;/code&gt; on an element
                                with set width and height dimensions.
                            &lt;/div&gt;                                             
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Adjust the <code>overflow</code> property on the fly with four
                        default values and classes. These classes are not
                        responsive by default.</p>
                    <div class="d-flex flex-wrap gap-4">
                        <div class="overflow-auto p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                            This is an example of using <code>.overflow-auto</code> on an element
                            with set width and height dimensions. By
                            design, this content will vertically scroll.
                        </div>
                        <div class="overflow-hidden p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                            This is an example of using <code>.overflow-hidden</code> on an element
                            with set width and height dimensions.
                        </div>
                        <div class="overflow-visible p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                            This is an example of using <code>.overflow-visible</code> on an element
                            with set width and height add more text dimensions inspinia admin dashboard template.
                        </div>
                        <div class="overflow-scroll p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                            This is an example of using <code>.overflow-scroll</code> on an element
                            with set width and height dimensions.
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Position in Arrange</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                    <code class="language-markup">                                                
                        &lt;div class=&quot;position-absolute top-0 start-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                    </code>
                    
                    <code class="language-markup">
                        &lt;div class=&quot;position-absolute top-0 end-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                    </code>
                    
                    <code class="language-markup">
                        &lt;div class=&quot;position-absolute top-50 start-50 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                    </code>
                    
                    <code class="language-markup">
                        &lt;div class=&quot;position-absolute bottom-50 end-50 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                    </code>
                    
                    <code class="language-markup">
                        &lt;div class=&quot;position-absolute bottom-0 start-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                    </code>
                    
                    <code class="language-markup">
                        &lt;div class=&quot;position-absolute bottom-0 end-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;                                                
                    </code>            
                </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Arrange elements easily with the edge positioning utilities. The
                        format is <code>{property}-{position}</code>.</p>

                    <!-- Arrange elements -->
                    <div class="position-relative p-5 bg-light bg-opacity-50 m-3 border rounded" style="height: 180px;">
                        <div class="position-absolute top-0 start-0 avatar-xs bg-dark rounded"> </div>
                        <div class="position-absolute top-0 end-0 avatar-xs bg-dark rounded"></div>
                        <div class="position-absolute top-50 start-50 avatar-xs bg-dark rounded"></div>
                        <div class="position-absolute bottom-50 end-50 avatar-xs bg-dark rounded"> </div>
                        <div class="position-absolute bottom-0 start-0 avatar-xs bg-dark rounded"> </div>
                        <div class="position-absolute bottom-0 end-0 avatar-xs bg-dark rounded"> </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Position in Center</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-0 start-0 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-0 start-50 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-0 start-100 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">

                            &lt;div class=&quot;position-absolute top-50 start-0 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-50 start-100 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">

                            &lt;div class=&quot;position-absolute top-100 start-0 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-100 start-50 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-100 start-100 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">In addition, you can also center the elements with the transform
                        utility class <code>.translate-middle</code>.</p>

                    <!-- Center elements -->
                    <div class="position-relative m-3 bg-light bg-opacity-50 border rounded" style="height: 180px;">
                        <div class="position-absolute top-0 start-0 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-0 start-50 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-0 start-100 translate-middle avatar-xs bg-dark rounded">
                        </div>

                        <div class="position-absolute top-50 start-0 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-50 start-100 translate-middle avatar-xs bg-dark rounded">
                        </div>

                        <div class="position-absolute top-100 start-0 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-100 start-50 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-100 start-100 translate-middle avatar-xs bg-dark rounded">
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Position in Axis</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;position-absolute top-0 start-0 avatar-xs bg-dark rounded &quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;position-absolute top-0 start-50 translate-middle-x avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;position-absolute top-0 end-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 

                            &lt;div class=&quot;position-absolute top-50 start-0 translate-middle-y avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;position-absolute top-50 end-0 translate-middle-y avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 

                            &lt;div class=&quot;position-absolute bottom-0 start-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;position-absolute bottom-0 start-50 translate-middle-x avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;position-absolute bottom-0 end-0 avatar-xs bg-dark rounded&quot;&gt;&lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">By adding <code>.translate-middle-x</code> or
                        <code>.translate-middle-y</code> classes, elements can be positioned only in
                        horizontal or vertical direction.
                    </p>

                    <!-- Center elements -->
                    <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                        <div class="position-absolute top-0 start-0 avatar-xs bg-dark rounded ">
                        </div>
                        <div class="position-absolute top-0 start-50 translate-middle-x avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-0 end-0 avatar-xs bg-dark rounded"></div>

                        <div class="position-absolute top-50 start-0 translate-middle-y avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y avatar-xs bg-dark rounded">
                        </div>

                        <div class="position-absolute bottom-0 start-0 avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute bottom-0 start-50 translate-middle-x avatar-xs bg-dark rounded">
                        </div>
                        <div class="position-absolute bottom-0 end-0 avatar-xs bg-dark rounded">
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Shadows</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;shadow-none p-2 mb-2 bg-light rounded&quot;&gt;No shadow&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">   
                            &lt;div class=&quot;shadow-sm p-2 mb-2 rounded&quot;&gt;Small shadow&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup"> 
                            &lt;div class=&quot;shadow p-2 mb-2 rounded&quot;&gt;Regular shadow&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">  
                            &lt;div class=&quot;shadow-lg p-2 mb-2 rounded&quot;&gt;Larger shadow&lt;/div&gt;
                        </code>         
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">While shadows on components are disabled by default in Bootstrap
                        and can be enabled via
                        <code>$enable-shadows</code>, you can also quickly add or remove a shadow with our
                        <code>box-shadow</code> utility
                        classes. Includes support for <code>.shadow-none</code> and three default sizes
                        (which have associated variables to
                        match).
                    </p>

                    <div class="shadow-none p-2 mb-2 bg-light rounded">No shadow</div>
                    <div class="shadow-sm p-2 mb-2 rounded">Small shadow</div>
                    <div class="shadow p-2 mb-2 rounded">Regular shadow</div>
                    <div class="shadow-lg p-2 mb-2 rounded">Larger shadow</div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Width</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body" id="width-utilities-code">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;w-25 p-2 bg-light&quot;&gt;Width 25%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;w-50 p-2 bg-light&quot;&gt;Width 50%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;w-75 p-2 bg-light&quot;&gt;Width 75%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;w-100 p-2 bg-light&quot;&gt;Width 100%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;w-auto p-2 bg-light&quot;&gt;Width auto&lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Width utilities are generated from the utility API in
                        <code>_utilities.scss</code>. Includes support for
                        <code>25%</code>, <code>50%</code>, <code>75%</code>, <code>100%</code>, and
                        <code>auto</code> by default. Modify
                        those values as you need to generate different utilities here.
                    </p>

                    <!-- Width -->
                    <div class="w-25 p-2 bg-light">Width 25%</div>

                    <div class="w-50 p-2 bg-light">Width 50%</div>

                    <div class="w-75 p-2 bg-light">Width 75%</div>

                    <div class="w-100 p-2 bg-light">Width 100%</div>

                    <div class="w-auto p-2 bg-light">Width auto</div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Height</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body" id="height-utilities-code">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;h-25 p-2 bg-light&quot;&gt;Height25%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;h-50 p-2 bg-light&quot;&gt;Height50%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;h-75 p-2 bg-light&quot;&gt;Height75%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;h-100 p-2 bg-light&quot;&gt;Height100%&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;h-auto p-2 bg-light&quot;&gt;Height auto&lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Height utilities are generated from the utility API in
                        <code>_utilities.scss</code>. Includes support for
                        <code>25%</code>, <code>50%</code>, <code>75%</code>, <code>100%</code>, and
                        <code>auto</code> by default. Modify
                        those values as you need to generate different utilities here.
                    </p>

                    <div class="d-flex flex-wrap gap-3 align-items-start" style="height: 255px;">
                        <!-- Height -->
                        <div class="h-25 p-2 bg-light">Height25%</div>

                        <div class="h-50 p-2 bg-light">Height50%</div>

                        <div class="h-75 p-2 bg-light">Height75%</div>

                        <div class="h-100 p-2 bg-light">Height100%</div>

                        <div class="h-auto p-2 bg-light">Height auto</div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Object Fit</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                                               
                            &lt;div&gt;
                                &lt;img src=&quot;/images/stock/small-1.jpg&quot; class=&quot;object-fit-contain border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-contain&lt;/code&gt;&lt;/p&gt;
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div&gt;
                                &lt;img src=&quot;/images/stock/small-1.jpg&quot; class=&quot;object-fit-cover border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-cover&lt;/code&gt;&lt;/p&gt;
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div&gt;
                                &lt;img src=&quot;/images/stock/small-1.jpg&quot; class=&quot;object-fit-fill border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-fill&lt;/code&gt;&lt;/p&gt;
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div&gt;
                                &lt;img src=&quot;/images/stock/small-1.jpg&quot; class=&quot;object-fit-scale border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-scale&lt;/code&gt;&lt;/p&gt;
                            &lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div&gt;
                                &lt;img src=&quot;/images/stock/small-1.jpg&quot; class=&quot;object-fit-none border rounded avatar-xl&quot; alt=&quot;...&quot;&gt;
                                &lt;p class=&quot;mt-1 mb-0&quot;&gt;&lt;code class=&quot;user-select-all&quot;&gt;.object-fit-none&lt;/code&gt;&lt;/p&gt;
                            &lt;/div&gt;                                                
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Change the value of the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit" target="_blank"><code>object-fit</code>
                            property</a> with our responsive <code>object-fit</code> utility classes. This
                        property tells the content to fill the parent container in a variety of ways, such
                        as preserving the aspect ratio or stretching to take up as much space as possible.
                    </p>

                    <div class="d-flex align-items-start flex-wrap gap-3 text-center">
                        <div>
                            <img src="/images/stock/small-1.jpg" class="object-fit-contain border rounded avatar-xl" alt="...">
                            <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-contain</code></p>
                        </div>
                        <div>
                            <img src="/images/stock/small-1.jpg" class="object-fit-cover border rounded avatar-xl" alt="...">
                            <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-cover</code></p>
                        </div>
                        <div>
                            <img src="/images/stock/small-1.jpg" class="object-fit-fill border rounded avatar-xl" alt="...">
                            <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-fill</code></p>
                        </div>
                        <div>
                            <img src="/images/stock/small-1.jpg" class="object-fit-scale border rounded avatar-xl" alt="...">
                            <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-scale</code></p>
                        </div>
                        <div>
                            <img src="/images/stock/small-1.jpg" class="object-fit-none border rounded avatar-xl" alt="...">
                            <p class="mt-1 mb-0"><code class="user-select-all">.object-fit-none</code></p>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Z-index</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">                    
                            &lt;div class=&quot;z-3 position-absolute p-5 rounded-3 bg-primary-subtle&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;z-2 position-absolute p-5 m-2 rounded-3 bg-success-subtle&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;z-1 position-absolute p-5 m-3 rounded-3 bg-secondary-subtle&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;z-0 position-absolute p-5 m-4 rounded-3 bg-danger-subtle&quot;&gt;&lt;/div&gt;
                        </code>
                        
                        <code class="language-markup">
                            &lt;div class=&quot;z-n1 position-absolute p-5 m-5 rounded-3 bg-info-subtle&quot;&gt;&lt;/div&gt;                                                
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Use <code>z-index</code> utilities to stack elements on top of one
                        another. Requires a <code>position</code> value other than <code>static</code>,
                        which can be set with custom styles or using our <a href="https://getbootstrap.com/docs/5.3/utilities/position/" target="_blank">position utilities</a>.</p>

                    <div class="position-relative" style="height: 220px;z-index: 1;">
                        <div class="z-3 position-absolute p-5 rounded-3 bg-primary-subtle"></div>
                        <div class="z-2 position-absolute p-5 m-2 rounded-3 bg-success-subtle">
                        </div>
                        <div class="z-1 position-absolute p-5 m-3 rounded-3 bg-secondary-subtle">
                        </div>
                        <div class="z-0 position-absolute p-5 m-4 rounded-3 bg-danger-subtle"></div>
                        <div class="z-n1 position-absolute p-5 m-5 rounded-3 bg-info-subtle"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div><!-- end end -->

</div> <!-- container -->

@endsection

@section('scripts')
@endsection
