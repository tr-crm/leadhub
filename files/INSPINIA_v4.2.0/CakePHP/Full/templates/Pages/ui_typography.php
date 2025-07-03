<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Typography']) ?>

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Typography']) ?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/content/typography/" target="_blank">
                                    Typography on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Display Headings</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;h1 class=&quot;display-1&quot;&gt;Display 1&lt;/h1&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h1 class=&quot;display-2&quot;&gt;Display 2&lt;/h1&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h1 class=&quot;display-3&quot;&gt;Display 3&lt;/h1&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h1 class=&quot;display-4&quot;&gt;Display 4&lt;/h1&gt;                                                
                                    </code>

                                    <code class="language-markup">
                                        &lt;h1 class=&quot;display-5&quot;&gt;Display 5&lt;/h1&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h1 class=&quot;display-6&quot;&gt;Display 6&lt;/h1&gt;                                               
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <h1 class="display-1">Display 1</h1>
                                <h1 class="display-2">Display 2</h1>
                                <h1 class="display-3">Display 3</h1>
                                <h1 class="display-4">Display 4</h1>
                                <h1 class="display-5">Display 5</h1>
                                <h1 class="display-6">Display 6</h1>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Headings</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;h1&gt;Heading 1 <small>Sub Heading</small>&lt;/h1&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h2&gt;Heading 2 <small>Sub Heading</small>&lt;/h2&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h3&gt;Heading 3 <small>Sub Heading</small>&lt;/h3&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h4&gt;Heading 4 <small>Sub Heading</small>&lt;/h4&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h5&gt;Heading 5 <small>Sub Heading</small>&lt;/h5&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;h6&gt;Heading 6 <small>Sub Heading</small>&lt;/h6&gt;                                                        
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <h1>Heading 1 <small>Sub Heading</small></h1>
                                <h2>Heading 2 <small>Sub Heading</small></h2>
                                <h3>Heading 3 <small>Sub Heading</small></h3>
                                <h4>Heading 4 <small>Sub Heading</small></h4>
                                <h5>Heading 5 <small>Sub Heading</small></h5>
                                <h6>Heading 6 <small>Sub Heading</small></h6>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Naming a Source</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;figure&gt;
                                            &lt;blockquote class=&quot;blockquote&quot;&gt;
                                            &lt;p&gt;A well-known quote, contained in a blockquote element.&lt;/p&gt;
                                            &lt;/blockquote&gt;
                                            &lt;figcaption class=&quot;blockquote-footer&quot;&gt;
                                            Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                            &lt;/figcaption&gt;
                                        &lt;/figure&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">A well-known quote, contained in a blockquote element. </p>

                                <figure>
                                    <blockquote class="blockquote">
                                        <p>"Design is not just what it looks like and feels like. Design is how it works."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Steve Jobs in <cite title="Design Philosophy">Design Philosophy</cite>
                                    </figcaption>
                                </figure>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Inline Text Elements</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;p class=&quot;lead&quot;&gt;Your title goes here&lt;/p&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;
                                    </code>

                                    <code class="language-markup">
                                        Nulla &lt;abbr title=&quot;attribute&quot;&gt;attr&lt;/abbr&gt; vitae elit libero, a pharetra augue.
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Styling for common inline HTML5 elements.</p>

                                <p class="lead">Your title goes here</p>

                                <p>You can use the mark tag to <mark>highlight</mark> text.</p>

                                <p><del>This line of text is meant to be treated as deleted text.</del></p>

                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>

                                <p><ins>This line of text is meant to be treated as an addition to thedocument.</ins></p>
                                <p><u>This line of text will render as underlined</u></p>

                                <p><small>This line of text is meant to be treated as fine print.</small></p>

                                <p><strong>This line rendered as bold text.</strong></p>

                                <p><em>This line rendered as italicized text.</em></p>

                                <p class="mb-0">Nulla <abbr title="attribute">attr</abbr> vitae elit libero, a pharetra augue.</p>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Unordered</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                Fully responsive design
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Built with Bootstrap 5 framework
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Clean and modern UI components
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Cross-browser compatibility
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Multiple form elements and validations
                                                &lt;ul&gt;
                                                    &lt;li&gt;
                                                        Rich input controls
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        Step-based form wizards
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        Real-time validation
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        Customizable styles
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Advanced chart and graph libraries
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Integrated data tables and sorting
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Developer-friendly code structure
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">A list of items in which the order does not explicitly matter.</p>

                                <ul>
                                    <li>
                                        Fully responsive design
                                    </li>
                                    <li>
                                        Built with Bootstrap 5 framework
                                    </li>
                                    <li>
                                        Clean and modern UI components
                                    </li>
                                    <li>
                                        Cross-browser compatibility
                                    </li>
                                    <li>
                                        Multiple form elements and validations
                                        <ul>
                                            <li>
                                                Rich input controls
                                            </li>
                                            <li>
                                                Step-based form wizards
                                            </li>
                                            <li>
                                                Real-time validation
                                            </li>
                                            <li>
                                                Customizable styles
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Advanced chart and graph libraries
                                    </li>
                                    <li>
                                        Integrated data tables and sorting
                                    </li>
                                    <li>
                                        Developer-friendly code structure
                                    </li>
                                </ul>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Ordered</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ol&gt;
                                            &lt;li&gt;
                                                Install all dependencies
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Configure project environment settings
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Set up folder structure and routing
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Integrate UI components and layout
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Implement core modules
                                                &lt;ol&gt;
                                                    &lt;li&gt;
                                                        Authentication &amp; Authorization
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        Dashboard widgets and metrics
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        User profile management
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        Notification &amp; messaging systems
                                                    &lt;/li&gt;
                                                &lt;/ol&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Connect backend APIs and test data flow
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Optimize performance and responsive design
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Final testing and deployment
                                            &lt;/li&gt;
                                        &lt;/ol&gt;      
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">A list of items in which the order does explicitly matter.</p>

                                <ol>
                                    <li>
                                        Install all dependencies
                                    </li>
                                    <li>
                                        Configure project environment settings
                                    </li>
                                    <li>
                                        Set up folder structure and routing
                                    </li>
                                    <li>
                                        Integrate UI components and layout
                                    </li>
                                    <li>
                                        Implement core modules
                                        <ol>
                                            <li>
                                                Authentication & Authorization
                                            </li>
                                            <li>
                                                Dashboard widgets and metrics
                                            </li>
                                            <li>
                                                User profile management
                                            </li>
                                            <li>
                                                Notification & messaging systems
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Connect backend APIs and test data flow
                                    </li>
                                    <li>
                                        Optimize performance and responsive design
                                    </li>
                                    <li>
                                        Final testing and deployment
                                    </li>
                                </ol>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Unstyled</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-unstyled&quot;&gt;
                                            &lt;li&gt;
                                                Install project dependencies
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Configure build settings
                                                &lt;ul&gt;
                                                    &lt;li&gt;
                                                        Update environment variables
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Setup project structure and routes
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                Launch local development server
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                        
                                        &lt;h5 class=&quot;fw-semibold&quot;&gt;Inline List&lt;/h5&gt;
                                        &lt;p class=&quot;text-muted m-b-15&quot;&gt;
                                            Display list items horizontally using &lt;code&gt;display: inline-block;&lt;/code&gt; and appropriate spacing.
                                        &lt;/p&gt;
                                        
                                        &lt;ul class=&quot;list-inline&quot;&gt;
                                            &lt;li class=&quot;list-inline-item&quot;&gt;
                                                HTML
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-inline-item&quot;&gt;
                                                CSS
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-inline-item&quot;&gt;
                                                JavaScript
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted"><strong>This only applies to immediate children
                                        list items</strong>, meaning you will need to add the class for any nested lists
                                    as well.</p>

                                <ul class="list-unstyled">
                                    <li>
                                        Install project dependencies
                                    </li>
                                    <li>
                                        Configure build settings
                                        <ul>
                                            <li>
                                                Update environment variables
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Setup project structure and routes
                                    </li>
                                    <li>
                                        Launch local development server
                                    </li>
                                </ul>

                                <h5>Inline List</h5>
                                <p class="text-muted m-b-15">
                                    Display list items horizontally using <code>display: inline-block;</code> and appropriate spacing.
                                </p>

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        HTML
                                    </li>
                                    <li class="list-inline-item">
                                        CSS
                                    </li>
                                    <li class="list-inline-item">
                                        JavaScript
                                    </li>
                                </ul>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Abbreviations </h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;p&gt;&lt;abbr title=&quot;attribute&quot;&gt;attr&lt;/abbr&gt;&lt;/p&gt;
                                    </code>

                                    <code class="language-markup">
                                        &lt;p&gt;&lt;abbr title=&quot;HyperText Markup Language&quot; class=&quot;initialism&quot;&gt;HTML&lt;/abbr&gt;&lt;/p&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Add .initialism to an abbreviation for a slightly smaller font-size.</p>

                                <p><abbr title="attribute">attr</abbr></p>
                                <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Alignment </h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;figure class=&quot;text-center&quot;&gt;
                                            &lt;blockquote class=&quot;blockquote&quot;&gt;
                                                &lt;p&gt;&quot;...&quot;&lt;/p&gt;
                                            &lt;/blockquote&gt;
                                            &lt;figcaption class=&quot;blockquote-footer&quot;&gt;
                                                Steve Jobs in &lt;cite title=&quot;Steve Jobs Biography&quot;&gt;Steve Jobs Biography&lt;/cite&gt;
                                            &lt;/figcaption&gt;
                                        &lt;/figure&gt;
                                    </code>
                                    
                                    <code class="language-markup">
                                        &lt;figure class=&quot;text-end&quot;&gt;
                                            &lt;blockquote class=&quot;blockquote&quot;&gt;
                                                &lt;p&gt;&quot;...&quot;&lt;/p&gt;
                                            &lt;/blockquote&gt;
                                            &lt;figcaption class=&quot;blockquote-footer&quot;&gt;
                                                Leonardo da Vinci in &lt;cite title=&quot;Design Philosophy&quot;&gt;Design Philosophy&lt;/cite&gt;
                                            &lt;/figcaption&gt;
                                        &lt;/figure&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Use text utilities as needed to change the alignment of your
                                    blockquote.</p>

                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <p>"Design is not just what it looks like and feels like. Design is how it works."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Steve Jobs in <cite title="Steve Jobs Biography">Steve Jobs Biography</cite>
                                    </figcaption>
                                </figure>

                                <figure class="text-end">
                                    <blockquote class="blockquote">
                                        <p>"Simplicity is the ultimate sophistication."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Leonardo da Vinci in <cite title="Design Philosophy">Design Philosophy</cite>
                                    </figcaption>
                                </figure>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Inline </h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-inline&quot;&gt;
                                            &lt;li class=&quot;list-inline-item&quot;&gt;This is a list item.&lt;/li&gt;
                                            &lt;li class=&quot;list-inline-item&quot;&gt;And another one.&lt;/li&gt;
                                            &lt;li class=&quot;list-inline-item&quot;&gt;But they're displayed inline.&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Remove a list's bullets and apply some light margin with a
                                    combination of two classes, .list-inline and .list-inline-item.</p>

                                <ul class="list-inline">
                                    <li class="list-inline-item">This is a list item.</li>
                                    <li class="list-inline-item">And another one.</li>
                                    <li class="list-inline-item">But they're displayed inline.</li>
                                </ul>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Blockquotes</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;blockquote class=&quot;blockquote&quot;&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;&quot;...&quot;&lt;/p&gt;
                                        &lt;/blockquote&gt;
                                        &lt;figcaption class=&quot;blockquote-footer&quot;&gt;
                                            Joe Sparano in &lt;cite title=&quot;Design Principles&quot;&gt;Design Principles&lt;/cite&gt;
                                        &lt;/figcaption&gt;
                                    </code>
                                    
                                    <code class="language-markup">
                                        &lt;p class=&quot;text-muted m-b-15&quot;&gt;
                                            ...
                                        &lt;/p&gt;
                                    </code>
                                    
                                    <code class="language-markup">
                                        &lt;blockquote class=&quot;blockquote text-center&quot;&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;&quot;...&quot;&lt;/p&gt;
                                        &lt;/blockquote&gt;
                                        &lt;figcaption class=&quot;blockquote-footer text-center&quot;&gt;
                                            John Johnson in &lt;cite title=&quot;Developer Wisdom&quot;&gt;Developer Wisdom&lt;/cite&gt;
                                        &lt;/figcaption&gt;
                                    </code>
                                    
                                    <code class="language-markup">
                                        &lt;blockquote class=&quot;blockquote text-end&quot;&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;&quot;...&quot;&lt;/p&gt;
                                        &lt;/blockquote&gt;
                                        &lt;figcaption class=&quot;blockquote-footer text-end&quot;&gt;
                                            Austin Freeman in &lt;cite title=&quot;Efficiency in Design&quot;&gt;Efficiency in Design&lt;/cite&gt;
                                        &lt;/figcaption&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    For quoting blocks of content from another source within your document. Wrap
                                    <code>&lt;blockquote class="blockquote"&gt;</code> around any
                                    <abbr title="HyperText Markup Language">HTML</abbr> as the quote.
                                </p>

                                <blockquote class="blockquote">
                                    <p class="mb-0">"Good design is obvious. Great design is transparent."</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Joe Sparano in <cite title="Design Principles">Design Principles</cite>
                                </figcaption>

                                <p class="text-muted m-b-15">
                                    Use text utilities as needed to change the alignment of your blockquote.
                                </p>

                                <blockquote class="blockquote text-center">
                                    <p class="mb-0">"First, solve the problem. Then, write the code."</p>
                                </blockquote>
                                <figcaption class="blockquote-footer text-center">
                                    John Johnson in <cite title="Developer Wisdom">Developer Wisdom</cite>
                                </figcaption>

                                <blockquote class="blockquote text-end">
                                    <p class="mb-0">"Simplicity is the soul of efficiency."</p>
                                </blockquote>
                                <figcaption class="blockquote-footer text-end">
                                    Austin Freeman in <cite title="Efficiency in Design">Efficiency in Design</cite>
                                </figcaption>
                            </div> <!-- end card-body -->

                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Description List Alignment</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;dl class=&quot;row mb-0&quot;&gt;
                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Dashboard&lt;/dt&gt;
                                            &lt;dd class=&quot;col-sm-9&quot;&gt;...&lt;/dd&gt;
                                    
                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Form Validation&lt;/dt&gt;
                                            &lt;dd class=&quot;col-sm-9&quot;&gt;
                                                &lt;p&gt;...&lt;/p&gt;
                                                &lt;p&gt;...&lt;/p&gt;
                                            &lt;/dd&gt;
                                    
                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Responsive Grid&lt;/dt&gt;
                                            &lt;dd class=&quot;col-sm-9&quot;&gt;...&lt;/dd&gt;
                                    
                                            &lt;dt class=&quot;col-sm-3 text-truncate&quot;&gt;User Management Module&lt;/dt&gt;
                                            &lt;dd class=&quot;col-sm-9&quot;&gt;...&lt;/dd&gt;
                                    
                                            &lt;dt class=&quot;col-sm-3&quot;&gt;Nested Features&lt;/dt&gt;
                                            &lt;dd class=&quot;col-sm-9&quot;&gt;
                                                &lt;dl class=&quot;row mb-0&quot;&gt;
                                                    &lt;dt class=&quot;col-sm-4&quot;&gt;Email Notifications&lt;/dt&gt;
                                                    &lt;dd class=&quot;col-sm-8&quot;&gt;...&lt;/dd&gt;
                                                &lt;/dl&gt;
                                            &lt;/dd&gt;
                                        &lt;/dl&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">
                                    Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a
                                    <code>.text-truncate</code> class to truncate the text with an ellipsis.
                                </p>

                                <dl class="row mb-0">
                                    <dt class="col-sm-3">Dashboard</dt>
                                    <dd class="col-sm-9">An overview panel that displays key metrics and activity summaries.</dd>

                                    <dt class="col-sm-3">Form Validation</dt>
                                    <dd class="col-sm-9">
                                        <p>Includes validation for all major input types with real-time feedback.</p>
                                        <p>Built-in support for custom rules and error messages.</p>
                                    </dd>

                                    <dt class="col-sm-3">Responsive Grid</dt>
                                    <dd class="col-sm-9">Utilizes Bootstrap’s flexible grid layout for consistent responsiveness across devices.</dd>

                                    <dt class="col-sm-3 text-truncate">User Management Module</dt>
                                    <dd class="col-sm-9">Easily manage roles, permissions, and user profiles from a single interface.</dd>

                                    <dt class="col-sm-3">Nested Features</dt>
                                    <dd class="col-sm-9">
                                        <dl class="row mb-0">
                                            <dt class="col-sm-4">Email Notifications</dt>
                                            <dd class="col-sm-8">Customizable alerts and triggers integrated into app workflows.</dd>
                                        </dl>
                                    </dd>
                                </dl>
                            </div> <!-- end card-body -->

                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

</body>

</html>