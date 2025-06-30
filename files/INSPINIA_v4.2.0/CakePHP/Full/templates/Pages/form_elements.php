<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Form Elements']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'Forms', 'title' => 'Form Elements']) ?>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank">
                                    Elements on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Textfield Type</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Simple Input -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="simpleinput" class="col-form-label">Simple Input</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="simpleinput" class="form-control">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;simpleinput&quot; class=&quot;form-control&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- with Label Input -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label class="col-form-label">Label Input</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>
                                                    <label for="labelInputInput1" class="form-label">Label Input</label>
                                                    <input type="email" class="form-control" id="labelInputInput1" placeholder="name@example.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;div&gt;
                                                        &lt;label for=&quot;labelInputt1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                                                        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;labelInputt1&quot; placeholder=&quot;name@example.com&quot;&gt;
                                                        &lt;/div&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Floating Input -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label class="col-form-label">Floating Input</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="name">
                                                    <label for="floatingInput">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;div class=&quot;form-floating&quot;&gt;<br>
                                                        &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;floatingInput&quot; placeholder=&quot;name&quot;&gt;<br>
                                                        &nbsp;&nbsp;&lt;label for=&quot;floatingInput&quot;&gt;Name&lt;/label&gt;<br>
                                                        &lt;/div&gt;
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Search Input -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="SearchInput" class="col-form-label">Search Style</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="app-search">
                                                    <input type="search" class="form-control" id="SearchInput" placeholder="Search for something...">
                                                    <i data-lucide="search" class="app-search-icon text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;div class=&quot;app-search&quot;&gt;
                                                            &lt;input type=&quot;search&quot; class=&quot;form-control&quot; placeholder=&quot;Search for something...&quot;&gt;
                                                            &lt;i data-lucide=&quot;search&quot; class=&quot;app-search-icon text-muted&quot;&gt;&lt;/i&gt;
                                                        &lt;/div&gt;
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Validation Input -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="validInput" class="col-form-label">Valid Input</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="validInput" class="form-control is-valid">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;validInput&quot; class=&quot;form-control is-valid&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Invalidation Input -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="inValidationInput" class="col-form-label">Invalid Input</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="inValidationInput" class="form-control is-invalid">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;inValidationInput&quot; class=&quot;form-control is-valid&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Placeholder -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-rounded" class="col-form-label">Rounded Input</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="example-rounded" class="form-control rounded-pill" placeholder="Rounded Input">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;example-rounded&quot; class=&quot;form-control rounded-pill&quot; placeholder=&quot;placeholder&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Placeholder -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-placeholder" class="col-form-label">Placeholder</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="example-placeholder" class="form-control" placeholder="placeholder">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;example-placeholder&quot; class=&quot;form-control&quot; placeholder=&quot;placeholder&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Text Area -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-textarea" class="col-form-label">Text area</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;textarea class=&quot;form-control&quot; id=&quot;example-textarea&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Readonly -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-readonly" class="col-form-label">Readonly</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="example-readonly" class="form-control" readonly value="Readonly value">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;example-readonly&quot; class=&quot;form-control&quot; readonly value=&quot;Readonly value&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Disabled -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-disable" class="col-form-label">Disabled</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" id="example-disable" disabled value="Disabled value">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;example-disable&quot; disabled value=&quot;Disabled value&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Static Control -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-static" class="col-form-label">Static control</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;example-static&quot; value=&quot;email@example.com&quot;&gt;
                                                    </code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Helping Text -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-helping" class="col-form-label">Helping text</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                <small class="form-text text-muted">
                                                    A block of help text that breaks onto a new line and may extend beyond one line.
                                                </small>
                                            </div>
                                            <div class="col-lg-5">
                                                <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;input type=&quot;text&quot; id=&quot;example-helping&quot; class=&quot;form-control&quot; placeholder=&quot;Helping text&quot;&gt;<br>
                                                        &lt;small class=&quot;form-text text-muted&quot;&gt;...&lt;/small&gt;
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Default select -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label class="col-form-label">Default Select</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <select class="form-select">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5">
                                                <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;select class=&quot;form-select&quot;&gt;<br>
                                                        &nbsp;&nbsp;&lt;option selected&gt;Open this select menu&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;<br>
                                                        &lt;/select&gt;
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Default select -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label class="col-form-label">Select with Icon</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="app-search">
                                                    <select class="form-select form-control" id="discount">
                                                        <option selected>Choose Discount</option>
                                                        <option value="No Discount">No Discount</option>
                                                        <option value="Flat Discount">Flat Discount</option>
                                                        <option value="Percentage Discount">Percentage Discount</option>
                                                    </select>
                                                    <i data-lucide="percent" class="app-search-icon text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;div class=&quot;app-search&quot;&gt;
                                                            &lt;select class=&quot;form-select form-control&quot; id=&quot;discount&quot;&gt;
                                                                &lt;option selected&gt;Choose Discount&lt;/option&gt;
                                                                &lt;option value=&quot;No Discount&quot;&gt;No Discount&lt;/option&gt;
                                                                &lt;option value=&quot;Flat Discount&quot;&gt;Flat Discount&lt;/option&gt;
                                                                &lt;option value=&quot;Percentage Discount&quot;&gt;Percentage Discount&lt;/option&gt;
                                                            &lt;/select&gt;
                                                            &lt;i data-lucide=&quot;percent&quot; class=&quot;app-search-icon text-muted&quot;&gt;&lt;/i&gt;
                                                        &lt;/div&gt;
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>

                                        <div class="border-top border-dashed my-3"></div>

                                        <!-- Multiple Select -->
                                        <div class="row g-lg-4 g-2">
                                            <div class="col-lg-2">
                                                <label for="example-multiselect" class="col-form-label">Multiple Select</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <select id="example-multiselect" multiple class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5">
                                                <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                    <code class="language-markup">
                                                        &lt;select multiple class=&quot;form-control&quot;&gt;<br>
                                                        &nbsp;&nbsp;&lt;option&gt;1&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option&gt;2&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option&gt;3&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option&gt;4&lt;/option&gt;<br>
                                                        &nbsp;&nbsp;&lt;option&gt;5&lt;/option&gt;<br>
                                                        &lt;/select&gt;
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Input Type</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="card-body">
                                <form>

                                    <!-- Email Input -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-email" class="col-form-label">Email</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="email" id="example-email" class="form-control" placeholder="Email"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Password -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-password" class="col-form-label">Password</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="password" id="example-password" class="form-control" value="password">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="password" id="example-password" class="form-control" value="password"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Show/Hide Password -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="password" class="col-form-label">Show/Hide Password</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                                <div class="input-group-text password-eye" data-password="false">
                                                    <i class="ti ti-eye d-none"></i>
                                                    <i class="ti ti-eye-closed d-block"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;div class="input-group"&gt;<br>
                                                    &nbsp;&nbsp;&lt;input type="password" id="password" class="form-control" placeholder="Enter your password"&gt;<br>
                                                    &nbsp;&nbsp;&lt;div class="input-group-text password-eye" data-password="false"&gt;<br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;i class="ti ti-eye d-none"&gt;&lt;/i&gt;<br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;i class="ti ti-eye-closed d-block"&gt;&lt;/i&gt;<br>
                                                    &nbsp;&nbsp;&lt;/div&gt;<br>
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Month -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-month" class="col-form-label">Month</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control" id="example-month" type="month" name="month">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="month" id="example-month" class="form-control"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Time -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-time" class="col-form-label">Time</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control" id="example-time" type="time" name="time">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="time" id="example-time" class="form-control"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Week -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-week" class="col-form-label">Week</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control" id="example-week" type="week" name="week">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="week" id="example-week" class="form-control"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Number -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-number" class="col-form-label">Number</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control" id="example-number" type="number" name="number">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="number" id="example-number" class="form-control"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Color -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-color" class="col-form-label">Color</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control" id="example-color" type="color" name="color" value="#1ab394">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="color" id="example-color" class="form-control" value="#1ab394"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top border-dashed my-3"></div>

                                    <!-- Range -->
                                    <div class="row g-lg-4 g-2 mb-3">
                                        <div class="col-lg-2">
                                            <label for="example-range" class="col-form-label">Range</label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-range" id="example-range" type="range" name="range" min="0" max="100">
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                                <code class="language-markup">
                                                    &lt;input type="range" id="example-range" class="form-range" min="0" max="100"&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Group</h4>
                            </div>

                            <div class="card-body">
                                <!-- Basic Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Username</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Email-like Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Recipient</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Currency Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Amount</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Multi-field Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Email Login</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="input-group">
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                        </pre>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Server&quot; aria-label=&quot;Server&quot;&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Textarea with Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Textarea</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-text">With textarea</span>
                                            <textarea class="form-control" aria-label="With textarea" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;<br>
                                                &nbsp;&nbsp;&lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Vanity URL Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="basic-url" class="col-form-label">Vanity URL</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Flex-nowrap Input Group -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Wrapping</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">@</span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group flex-nowrap&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;span class=&quot;input-group-text&quot; id=&quot;addon-wrapping&quot;&gt;@&lt;/span&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;addon-wrapping&quot;&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Input group with dropdown and text input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Dropdown + Input</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="!#">Action</a>
                                                <a class="dropdown-item" href="!#">Another action</a>
                                                <a class="dropdown-item" href="!#">Something else here</a>
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;<br>
                                                &nbsp;&nbsp;&lt;div class=&quot;dropdown-menu&quot;&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;<br>
                                                &nbsp;&nbsp;&lt;/div&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Input group with text input and button -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Input + Button</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                            <button class="btn btn-dark" type="button">Button</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;button class=&quot;btn btn-dark&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- File input + Multiple file input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="inputGroupFile04" class="col-form-label">File Input</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="file" id="inputGroupFile04">
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;inputGroupFile04&quot;&gt;
                                            </code>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="formFileMultiple01" class="col-form-label">Multiple Files</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="file" id="formFileMultiple01" multiple>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFileMultiple01&quot; multiple&gt;
                                            </code>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Input Group Select -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="inputGroupSelect01" class="col-form-label">Input Group Select</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;input-group mb-3&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;<br>
                                                &nbsp;&nbsp;&lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option selected&gt;Choose...&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;/select&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating labels</h4>
                            </div>

                            <div class="card-body">
                                <!-- Floating Input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Email address</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                                            <label for="floatingInputEmail">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-floating&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInputEmail&quot; placeholder=&quot;name@example.com&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;label for=&quot;floatingInputEmail&quot;&gt;Email address&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Floating Password -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="floatingPassword" class="col-form-label">Password</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-floating&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;floatingPassword&quot; placeholder=&quot;Password&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;label for=&quot;floatingPassword&quot;&gt;Password&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Floating Textarea -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="floatingTextarea" class="col-form-label">Comments</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                            <label for="floatingTextarea">Comments</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-floating&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;textarea class=&quot;form-control&quot; placeholder=&quot;Leave a comment here&quot; id=&quot;floatingTextarea&quot; style=&quot;height: 100px&quot;&gt;&lt;/textarea&gt;<br>
                                                &nbsp;&nbsp;&lt;label for=&quot;floatingTextarea&quot;&gt;Comments&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Floating Select -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="floatingSelect" class="col-form-label">Select Menu</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label for="floatingSelect">Works with selects</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-floating&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;select class=&quot;form-select&quot; id=&quot;floatingSelect&quot; aria-label=&quot;Floating label select example&quot;&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option selected&gt;Open this select menu&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;/select&gt;<br>
                                                &nbsp;&nbsp;&lt;label for=&quot;floatingSelect&quot;&gt;Works with selects&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Input Sizes</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>


                            <div class="card-body">
                                <!-- Small Input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="example-input-small" class="col-form-label">Small</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;.input-sm&quot;&gt;
                                            </code>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Normal Input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="example-input-normal" class="col-form-label">Normal</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Normal&quot;&gt;
                                            </code>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Large Input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="example-input-large" class="col-form-label">Large</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;.input-lg&quot;&gt;
                                            </code>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Grid Size Input -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label for="example-gridsize" class="col-form-label">Grid Sizes</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;col-sm-4&quot;&gt;
                                                &nbsp;&nbsp;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;.col-sm-4&quot;&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Large Select -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Large Select</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <select class="form-select form-select-lg">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;select class=&quot;form-select form-select-lg&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;option selected&gt;Open this select menu&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;<br>
                                                &lt;/select&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Small Select -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Small Select</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <select class="form-select form-select-sm">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;select class=&quot;form-select form-select-sm&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;option selected&gt;Open this select menu&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;<br>
                                                &nbsp;&nbsp;&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;<br>
                                                &lt;/select&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checks, Radios and Switches</h4>
                            </div>

                            <div class="card-body">

                                <!-- Default Checkboxes -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Checkboxes</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkDefault">
                                            <label class="form-check-label" for="checkDefault">Default Checkbox</label>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input form-check-input-light" id="checkLight">
                                            <label class="form-check-label" for="checkLight">Light Checkbox</label>
                                        </div>

                                        <div class="mb-2">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="checkInline1" checked>
                                                <label class="form-check-label" for="checkInline1">Inline 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="checkInline2">
                                                <label class="form-check-label" for="checkInline2">Inline 2</label>
                                            </div>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkIndeterminate">
                                            <label class="form-check-label" for="checkIndeterminate">
                                                Disabled indeterminate checkbox
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkCheckedDisabled" checked disabled>
                                            <label class="form-check-label" for="checkCheckedDisabled">
                                                Disabled checked checkbox
                                            </label>
                                        </div>

                                        <h5 class="mt-3">Sizes</h5>

                                        <div class="form-check fs-lg mb-2">
                                            <input type="checkbox" class="form-check-input mt-1" id="checkSize1" checked>
                                            <label class="form-check-label fs-base" for="checkSize1">I'm 16px Checkbox</label>
                                        </div>

                                        <div class="form-check form-check-secondary fs-xxl mb-2">
                                            <input type="checkbox" class="form-check-input mt-1" id="checkSize2" checked>
                                            <label class="form-check-label fs-base" for="checkSize2">i'm 20px Checkbox</label>
                                        </div>


                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkDefault&quot;&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;checkDefault&quot;&gt;Default Checkbox&lt;/label&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input form-check-input-light&quot; id=&quot;checkLight&quot;&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;checkLight&quot;&gt;Light Checkbox&lt;/label&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;mb-2&quot;&gt;
                                                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkInline1&quot; checked&gt;
                                                        &lt;label class=&quot;form-check-label&quot; for=&quot;checkInline1&quot;&gt;Inline 1&lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkInline2&quot;&gt;
                                                        &lt;label class=&quot;form-check-label&quot; for=&quot;checkInline2&quot;&gt;Inline 2&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkIndeterminate&quot;&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;checkIndeterminate&quot;&gt;
                                                        Disabled indeterminate checkbox
                                                    &lt;/label&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;form-check&quot;&gt;
                                                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkCheckedDisabled&quot; checked disabled&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;checkCheckedDisabled&quot;&gt;
                                                        Disabled checked checkbox
                                                    &lt;/label&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>

                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2 mt-3" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-check fs-lg mb-2&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input mt-1&quot; id=&quot;checkSize1&quot; checked&gt;
                                                    &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;checkSize1&quot;&gt;Default Checkbox&lt;/label&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;form-check form-check-secondary fs-xxl mb-2&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input mt-1&quot; id=&quot;checkSize2&quot; checked&gt;
                                                    &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;checkSize2&quot;&gt;Default Checkbox&lt;/label&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>


                                <div class="border-top border-dashed my-3"></div>

                                <!-- Default Radios -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Radios</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-check mb-2">
                                            <input type="radio" class="form-check-input" name="gridRadio" id="radio1" checked>
                                            <label class="form-check-label" for="radio1">Option 1</label>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input type="radio" class="form-check-input" name="gridRadio" id="radio2">
                                            <label class="form-check-label" for="radio2">Option 2</label>
                                        </div>

                                        <div class="mb-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                <label class="form-check-label" for="inlineRadio1">Inline 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Inline 2</label>
                                            </div>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="disabledRadioOptions" id="inlineRadio3" value="option3" checked disabled>
                                            <label class="form-check-label" for="inlineRadio3">Disabled Checked Radio</label>
                                        </div>

                                        <h5 class="mt-3">Sizes</h5>

                                        <div class="mb-2">
                                            <div class="form-check fs-lg form-check-inline">
                                                <input class="form-check-input" type="radio" name="paymentMethod" id="radioCash" value="cash" checked>
                                                <label class="form-check-label fs-base" for="radioCash">Cash</label>
                                            </div>
                                            <div class="form-check fs-lg form-check-inline">
                                                <input class="form-check-input" type="radio" name="paymentMethod" id="radioCard" value="card">
                                                <label class="form-check-label fs-base" for="radioCard">Card</label>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <div class="form-check fs-xxl form-check-inline">
                                                <input class="form-check-input" type="radio" name="deliveryOption" id="radioPickup" value="pickup" checked>
                                                <label class="form-check-label fs-base" for="radioPickup">Pickup</label>
                                            </div>
                                            <div class="form-check fs-xxl form-check-inline">
                                                <input class="form-check-input" type="radio" name="deliveryOption" id="radioHome" value="home">
                                                <label class="form-check-label fs-base" for="radioHome">Home Delivery</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                    &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;gridRadio&quot; id=&quot;radio1&quot; checked&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;radio1&quot;&gt;Option 1&lt;/label&gt;
                                                &lt;/div&gt;
        
                                                &lt;div class=&quot;form-check mb-2&quot;&gt;
                                                    &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;gridRadio&quot; id=&quot;radio2&quot;&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;radio2&quot;&gt;Option 2&lt;/label&gt;
                                                &lt;/div&gt;
        
                                                &lt;div class=&quot;mb-2&quot;&gt;
                                                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio1&quot; value=&quot;option1&quot; checked&gt;
                                                        &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;Inline 1&lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio2&quot; value=&quot;option2&quot;&gt;
                                                        &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;Inline 2&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                
                                                &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                                                    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;disabledRadioOptions&quot; id=&quot;inlineRadio3&quot; value=&quot;option3&quot; checked disabled&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;Disabled Checked Radio&lt;/label&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>

                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2 mt-2" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;mb-2&quot;&gt;
                                                    &lt;div class=&quot;form-check fs-lg form-check-inline&quot;&gt;
                                                        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;paymentMethod&quot; id=&quot;radioCash&quot; value=&quot;cash&quot; checked&gt;
                                                        &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;radioCash&quot;&gt;Cash&lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;form-check fs-lg form-check-inline&quot;&gt;
                                                        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;paymentMethod&quot; id=&quot;radioCard&quot; value=&quot;card&quot;&gt;
                                                        &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;radioCard&quot;&gt;Card&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;mb-2&quot;&gt;
                                                    &lt;div class=&quot;form-check fs-xxl form-check-inline&quot;&gt;
                                                        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;deliveryOption&quot; id=&quot;radioPickup&quot; value=&quot;pickup&quot; checked&gt;
                                                        &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;radioPickup&quot;&gt;Pickup&lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;form-check fs-xxl form-check-inline&quot;&gt;
                                                        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;deliveryOption&quot; id=&quot;radioHome&quot; value=&quot;home&quot;&gt;
                                                        &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;radioHome&quot;&gt;Home Delivery&lt;/label&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Switches -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Switches</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-check form-switch mb-2">
                                            <input type="checkbox" class="form-check-input" id="switch1" checked>
                                            <label class="form-check-label" for="switch1">Enabled Switch</label>
                                        </div>
                                        <div class="form-check form-switch mb-2">
                                            <input type="checkbox" class="form-check-input" id="switch2" disabled>
                                            <label class="form-check-label" for="switch2">Disabled Switch</label>
                                        </div>

                                        <h5 class="mt-3">Sizes</h5>

                                        <div class="form-check form-switch fs-lg mb-2">
                                            <input type="checkbox" class="form-check-input mt-1" id="checkboxSize16" checked>
                                            <label class="form-check-label fs-base" for="checkboxSize16">I'm 16px Switch</label>
                                        </div>

                                        <div class="form-check form-switch form-check-secondary fs-xxl mb-2">
                                            <input type="checkbox" class="form-check-input mt-1" id="checkboxSize20" checked>
                                            <label class="form-check-label fs-base" for="checkboxSize20">I'm 20px Switch</label>
                                        </div>

                                    </div>

                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class="form-check form-switch"&gt;<br>
                                                &nbsp;&nbsp;&lt;input type="checkbox" class="form-check-input" id="switch1" checked&gt;<br>
                                                &nbsp;&nbsp;&lt;label class="form-check-label" for="switch1"&gt;Enabled Switch&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>

                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2 mt-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-check form-switch form-check-secondary fs-xxl mb-2&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input mt-1&quot; id=&quot;checkboxSize20&quot; checked&gt;
                                                    &lt;label class=&quot;form-check-label fs-base&quot; for=&quot;checkboxSize20&quot;&gt;I'm 20px Switch&lt;/label&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Reverse -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Reverse</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="w-lg-50">
                                            <div class="form-check form-check-reverse mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="reverseCheck1" checked>
                                                <label class="form-check-label" for="reverseCheck1">
                                                    Reverse checkbox
                                                </label>
                                            </div>
                                            <div class="form-check form-check-reverse mb-2">
                                                <input class="form-check-input" type="radio" value="" id="reverseCheck2">
                                                <label class="form-check-label" for="reverseCheck2">
                                                    Disabled reverse radio
                                                </label>
                                            </div>

                                            <div class="form-check form-switch form-check-reverse">
                                                <input class="form-check-input" type="checkbox" id="switchCheckReverse" checked>
                                                <label class="form-check-label" for="switchCheckReverse">Reverse switch checkbox input</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class="form-check form-check-reverse"&gt;<br>
                                                &nbsp;&nbsp;&lt;input class="form-check-input" type="checkbox" id="reverseCheck1"&gt;<br>
                                                &nbsp;&nbsp;&lt;label class="form-check-label" for="reverseCheck1"&gt;Reverse checkbox&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Colored Checkboxes -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Colored Checkboxes</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="form-check form-check-primary mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkPrimary" checked>
                                                    <label class="form-check-label" for="checkPrimary">Primary</label>
                                                </div>
                                                <div class="form-check form-check-secondary mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkSecondary" checked>
                                                    <label class="form-check-label" for="checkSecondary">Secondary</label>
                                                </div>
                                                <div class="form-check form-check-success mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkSuccess" checked>
                                                    <label class="form-check-label" for="checkSuccess">Success</label>
                                                </div>
                                                <div class="form-check form-check-info mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkInfo" checked>
                                                    <label class="form-check-label" for="checkInfo">Info</label>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check form-check-warning mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkWarning" checked>
                                                    <label class="form-check-label" for="checkWarning">Warning</label>
                                                </div>
                                                <div class="form-check form-check-danger mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkDanger" checked>
                                                    <label class="form-check-label" for="checkDanger">Danger</label>
                                                </div>
                                                <div class="form-check form-check-purple mb-2">
                                                    <input type="checkbox" class="form-check-input" id="checkPurple" checked>
                                                    <label class="form-check-label" for="checkPurple">Purple</label>
                                                </div>
                                                <div class="form-check form-check-dark">
                                                    <input type="checkbox" class="form-check-input" id="checkDark" checked>
                                                    <label class="form-check-label" for="checkDark">Dark</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class="form-check form-check-success"&gt;<br>
                                                &nbsp;&nbsp;&lt;input type="checkbox" class="form-check-input" id="checkSuccess" checked&gt;<br>
                                                &nbsp;&nbsp;&lt;label class="form-check-label" for="checkSuccess"&gt;Success&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Colored Radios -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Colored Radios</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="form-check form-check-primary mb-2">
                                                    <input type="radio" class="form-check-input" name="radioPrimary" id="radioPrimary" checked>
                                                    <label class="form-check-label" for="radioPrimary">Primary</label>
                                                </div>
                                                <div class="form-check form-check-secondary mb-2">
                                                    <input type="radio" class="form-check-input" name="radioSecondary" id="radioSecondary" checked>
                                                    <label class="form-check-label" for="radioSecondary">Secondary</label>
                                                </div>
                                                <div class="form-check form-check-success mb-2">
                                                    <input type="radio" class="form-check-input" name="radioSuccess" id="radioSuccess" checked>
                                                    <label class="form-check-label" for="radioSuccess">Success</label>
                                                </div>
                                                <div class="form-check form-check-info mb-2">
                                                    <input type="radio" class="form-check-input" name="radioInfo" id="radioInfo" checked>
                                                    <label class="form-check-label" for="radioInfo">Info</label>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check form-check-warning mb-2">
                                                    <input type="radio" class="form-check-input" name="radioWarning" id="radioWarning" checked>
                                                    <label class="form-check-label" for="radioWarning">Warning</label>
                                                </div>
                                                <div class="form-check form-check-danger mb-2">
                                                    <input type="radio" class="form-check-input" name="radioDanger" id="radioDanger" checked>
                                                    <label class="form-check-label" for="radioDanger">Danger</label>
                                                </div>
                                                <div class="form-check form-check-purple mb-2">
                                                    <input type="radio" class="form-check-input" name="radioPurple" id="radioPurple" checked>
                                                    <label class="form-check-label" for="radioPurple">Purple</label>
                                                </div>
                                                <div class="form-check form-check-dark">
                                                    <input type="radio" class="form-check-input" name="radioDark" id="radioDark" checked>
                                                    <label class="form-check-label" for="radioDark">Dark</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class="form-check form-check-success"&gt;<br>
                                                &nbsp;&nbsp;&lt;input type="radio" class="form-check-input" name="radioColor" id="radioSuccess" checked&gt;<br>
                                                &nbsp;&nbsp;&lt;label class="form-check-label" for="radioSuccess"&gt;Success&lt;/label&gt;<br>
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Colored Checkboxes -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Colored Switches</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="form-check form-check-primary form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchPrimary" checked>
                                                    <label class="form-check-label" for="switchPrimary">Primary</label>
                                                </div>
                                                <div class="form-check form-check-secondary form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchSecondary" checked>
                                                    <label class="form-check-label" for="switchSecondary">Secondary</label>
                                                </div>
                                                <div class="form-check form-check-success form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchSuccess" checked>
                                                    <label class="form-check-label" for="switchSuccess">Success</label>
                                                </div>
                                                <div class="form-check form-check-info form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchInfo" checked>
                                                    <label class="form-check-label" for="switchInfo">Info</label>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check form-check-warning form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchWarning" checked>
                                                    <label class="form-check-label" for="switchWarning">Warning</label>
                                                </div>
                                                <div class="form-check form-check-danger form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchDanger" checked>
                                                    <label class="form-check-label" for="switchDanger">Danger</label>
                                                </div>
                                                <div class="form-check form-check-purple form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="switchPurple" checked>
                                                    <label class="form-check-label" for="switchPurple">Purple</label>
                                                </div>
                                                <div class="form-check form-check-dark form-switch">
                                                    <input type="checkbox" class="form-check-input" id="switchDark" checked>
                                                    <label class="form-check-label" for="switchDark">Dark</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2">
                                            <code class="language-markup">
                                                &lt;div class=&quot;form-check form-check-info form-switch mb-2&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;switchInfo&quot; checked&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;switchInfo&quot;&gt;Info&lt;/label&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Toggle Checkboxes -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Checkbox Toggle</label>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="mb-2">
                                            <input type="checkbox" class="btn-check" id="btncheck1">
                                            <label class="btn btn-outline-primary" for="btncheck1">Single Toggle</label>
                                        </div>

                                        <div class="btn-group" role="group" aria-label="Checkbox toggle group">
                                            <input type="checkbox" class="btn-check" id="btncheck2">
                                            <label class="btn btn-outline-primary" for="btncheck2">One</label>

                                            <input type="checkbox" class="btn-check" id="btncheck3">
                                            <label class="btn btn-outline-primary" for="btncheck3">Two</label>

                                            <input type="checkbox" class="btn-check" id="btncheck4">
                                            <label class="btn btn-outline-primary" for="btncheck4">Three</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2 mb-0" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck1&quot; autocomplete=&quot;off&quot;&gt;
                                                    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck1&quot;&gt;Single Toggle&lt;/label&gt;
                                                &lt;/div&gt;
                                                
                                                &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Checkbox toggle group&quot;&gt;
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck2&quot; autocomplete=&quot;off&quot;&gt;
                                                    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck2&quot;&gt;One&lt;/label&gt;
                                                
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck3&quot; autocomplete=&quot;off&quot;&gt;
                                                    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck3&quot;&gt;Two&lt;/label&gt;
                                                
                                                    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck4&quot; autocomplete=&quot;off&quot;&gt;
                                                    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck4&quot;&gt;Three&lt;/label&gt;
                                                &lt;/div&gt;
                                            
                                            </code>
                                        </pre>
                                    </div>
                                </div>

                                <div class="border-top border-dashed my-3"></div>

                                <!-- Toggle Radios -->
                                <div class="row g-lg-4 g-2">
                                    <div class="col-lg-2">
                                        <label class="col-form-label">Radio Toggle</label>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="btn-group" role="group" aria-label="Radio toggle group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                            <label class="btn btn-outline-secondary" for="btnradio1">Left</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-outline-secondary" for="btnradio2">Middle</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                            <label class="btn btn-outline-secondary" for="btnradio3">Right</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <pre class="bg-light-subtle border border-light border-dashed rounded p-2 mb-0" style="height: 130px;">
                                            <code class="language-markup">
                                                &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Radio toggle group&quot;&gt;
                                                    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio1&quot; autocomplete=&quot;off&quot; checked&gt;
                                                    &lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;btnradio1&quot;&gt;Left&lt;/label&gt;
                                                
                                                    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio2&quot; autocomplete=&quot;off&quot;&gt;
                                                    &lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;btnradio2&quot;&gt;Middle&lt;/label&gt;
                                                
                                                    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio3&quot; autocomplete=&quot;off&quot;&gt;
                                                    &lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;btnradio3&quot;&gt;Right&lt;/label&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const checkbox = document.getElementById('checkIndeterminate');
            checkbox.indeterminate = true;
        });
    </script>

</body>

</html>