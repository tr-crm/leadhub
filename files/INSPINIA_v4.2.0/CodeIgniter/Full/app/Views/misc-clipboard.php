<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Clipboard")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('./partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php echo view("./partials/page-title", array("subtitle" => "Miscellaneous", "title" => "Clipboard")) ?>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy from Element</h5>
                                                    <p class="text-muted mb-0">Use <code>data-clipboard-target</code> to copy text from a specific element.</p>
                                                </td>
                                                <td>
                                                    <p class="text-primary font-bold" id="copytext">Click the button to copy this promotional text.</p>
                                                    <button class="btn btn-sm btn-primary" data-clipboard-target="#copytext"><i class="ti ti-copy me-1"></i> Copy Text</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Cut from Textarea</h5>
                                                    <p class="text-muted mb-0">Use <code>data-clipboard-action</code> with <code>cut</code> to remove and copy content.</p>
                                                </td>
                                                <td>
                                                    <textarea class="form-control" id="cuttext">This content will be cut and removed from this textarea.</textarea>
                                                    <button class="btn btn-sm btn-primary mt-3" data-clipboard-action="cut" data-clipboard-target="#cuttext"><i class="ti ti-cut me-1"></i> Cut Content</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy Email Address</h5>
                                                    <p class="text-muted mb-0">Click the button to copy this contact email:</p>
                                                </td>
                                                <td>
                                                    <span id="emailToCopy" class="d-block text-primary fw-bold">support@example.com</span>
                                                    <button class="btn btn-sm btn-primary mt-2" data-clipboard-target="#emailToCopy">
                                                        <i class="ti ti-copy me-1"></i> Copy Email
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Cut Input Value</h5>
                                                    <p class="text-muted mb-0">This cuts the value from a single-line input field.</p>
                                                </td>
                                                <td>
                                                    <input type="text" id="cutInput" class="form-control" value="Temporary token: 8GDF-393K-L99Z">
                                                    <button class="btn btn-sm btn-danger mt-2" data-clipboard-action="cut" data-clipboard-target="#cutInput">
                                                        <i class="ti ti-cut me-1"></i> Cut Token
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy Code Snippet</h5>
                                                    <p class="text-muted mb-0">Copy this snippet by clicking the button:</p>
                                                </td>
                                                <td>
                                                    <pre><code id="codeSnippet">npm install clipboard --save</code></pre>
                                                    <button class="btn btn-sm btn-success" data-clipboard-target="#codeSnippet">
                                                        <i class="ti ti-copy me-1"></i> Copy Command
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy from Input Group</h5>
                                                    <p class="text-muted mb-0">Click the copy icon to copy the link here:</p>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="copyLink" value="https://example.com/invite?ref=12345" readonly>
                                                        <button class="btn btn-icon btn-secondary" type="button" data-clipboard-target="#copyLink">
                                                            <i class="ti ti-copy fs-lg"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy Username</h5>
                                                    <p class="text-muted mb-0">Copy a predefined username from a span element.</p>
                                                </td>
                                                <td>
                                                    <span id="copyUsername" class="d-block text-primary fw-bold">john_doe_92</span>
                                                    <button class="btn btn-sm btn-primary mt-2" data-clipboard-target="#copyUsername">
                                                        <i class="ti ti-copy me-1"></i> Copy Username
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy Discount Code</h5>
                                                    <p class="text-muted mb-0">Copy a promotional discount code for checkout.</p>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" id="discountCode" class="form-control" value="SAVE20NOW" readonly>
                                                        <button class="btn btn-icon btn-warning" type="button" data-clipboard-target="#discountCode">
                                                            <i class="ti ti-copy fs-lg"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h5 class="mb-1">Copy HTML Template</h5>
                                                    <p class="text-muted mb-0">Copy a block of HTML code from a &lt;pre&gt; tag.</p>
                                                </td>
                                                <td>
                                                    <pre><code id="htmlTemplate">&lt;button class="btn btn-primary"&gt;Click Me&lt;/button&gt;</code></pre>
                                                    <button class="btn btn-sm btn-info" data-clipboard-target="#htmlTemplate">
                                                        <i class="ti ti-copy me-1"></i> Copy HTML
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div> <!-- end table-resp.-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div>
            <!-- container -->

            <?= $this->include('./partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('./partials/customizer') ?>

    <?= $this->include('./partials/footer-scripts') ?>

    <!-- Clipboard js -->
    <script src="/plugins/clipboard/clipboard.min.js"></script>

    <!-- Clipboard Page js -->
    <script src="/js/pages/misc-clipboard.js"></script>

</body>

</html>