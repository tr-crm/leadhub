@extends('layouts.vertical', ['title' => 'Progress'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Progress'])

<div class="container-xl">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-2">
                        Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/progress/" target="_blank">
                        Progress on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Examples</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;0&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                     
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                    
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                      
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                       
                            &lt;div class=&quot;progress&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">A progress bar can be used to show a user how far along he/she is in a process.</p>

                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

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

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress mb-2&quot; style=&quot;height: 1px;&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                      
                            &lt;div class=&quot;progress mb-2&quot; style=&quot;height: 3px;&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%; height: 20px;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                    
                            &lt;div class=&quot;progress mb-2 progress-sm&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                     
                            &lt;div class=&quot;progress mb-2 progress-md&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                      
                            &lt;div class=&quot;progress progress-lg mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        
                            &lt;div class=&quot;progress progress-xl&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 38%&quot; aria-valuenow=&quot;38&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">We only set a <code>height</code> value on the <code>.progress</code>, so if you change that value the inner <code>.progress-bar</code> will automatically resize accordingly.
                        Use <code>.progress-sm</code>,<code>.progress-md</code>,<code>.progress-lg</code>,<code>.progress-xl</code> classes.</p>

                    <div class="progress mb-2" style="height: 1px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2 progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2 progress-md">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-lg mb-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-xl">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Multiple Bars</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 15%&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 20%&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Include multiple progress bars in a progress component if you need.</p>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Animated Stripes</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                                &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt; 
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->                       
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Labels</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress mb-3&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;25%&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Example with label&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
                                &lt;div class=&quot;progress-bar overflow-visible text-dark&quot; style=&quot;width: 10%&quot;&gt;Long label text for the progress bar, set to a dark color&lt;/div&gt;
                            &lt;/div&gt;
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->


                <div class="card-body">
                    <p class="text-muted">Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>

                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar overflow-visible text-dark" style="width: 10%">Long label text for the progress bar, set to a dark color</div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Backgrounds</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
            
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                      
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                      
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                       
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-dark&quot; role=&quot;progressbar&quot; style=&quot;width: 65%&quot; aria-valuenow=&quot;65&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                     
                            &lt;div class=&quot;progress&quot;&gt;
                                &lt;div class=&quot;progress-bar bg-secondary&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Use background utility classes to change the appearance of individual progress bars.</p>

                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Striped</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar progress-bar-striped&quot; role=&quot;progressbar&quot; style=&quot;width: 10%&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                       
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar progress-bar-striped bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                     
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar progress-bar-striped bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                       
                            &lt;div class=&quot;progress mb-2&quot;&gt;
                                &lt;div class=&quot;progress-bar progress-bar-striped bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                       
                            &lt;div class=&quot;progress&quot;&gt;
                                &lt;div class=&quot;progress-bar progress-bar-striped bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        </code>           
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color.</p>

                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Steps</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;progress&quot; style=&quot;height: 2px;&quot;&gt;
                                &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 50%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;button type=&quot;button&quot; class=&quot;position-absolute top-0 start-0 translate-middle btn btn-icon btn-primary rounded-pill&quot;&gt;1&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;position-absolute top-0 start-50 translate-middle btn btn-icon btn-primary rounded-pill&quot;&gt;2&lt;/button&gt;
                            &lt;button type=&quot;button&quot; class=&quot;position-absolute top-0 start-100 translate-middle btn btn-icon btn-light rounded-pill&quot;&gt;3&lt;/button&gt;    
                        </code>            
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <div class="position-relative m-4">
                        <div class="progress" style="height: 2px;">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-icon btn-primary rounded-pill">1</button>
                        <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-icon btn-primary rounded-pill">2</button>
                        <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-icon btn-light rounded-pill">3</button>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container -->

@endsection

@section('scripts')
@endsection

