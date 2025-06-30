<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Create Invoice")) ?>

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

                <?php echo view("./partials/page-title", array("subtitle" => "Invoices", "title" => "Create Invoice")) ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <form>
                                        <div class="card-body p-4">
                                            <!-- Invoice Header with Currency Selector -->
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <!-- Logo Upload -->
                                                <div class="border rounded position-relative d-flex text-center align-items-center justify-content-between px-2" style="height: 60px; width: 260px;">
                                                    <label for="invoiceLogo" class="position-absolute top-0 start-0 end-0 bottom-0"></label>
                                                    <input type="file" class="d-none" id="invoiceLogo" accept="image/*" onchange="previewImage(event)">
                                                    <img id="preview" src="/images/logo-black.png" alt="Company Logo" height="28">
                                                    <i class="ti ti-upload fs-xxl text-muted" role="button"></i>
                                                </div>

                                                <!-- Invoice Number + Currency -->
                                                <div class="text-end">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-auto">
                                                            <label for="invoiceNumber" class="form-label fw-semibold">Invoice #</label>
                                                            <input type="text" id="invoiceNumber" class="form-control" placeholder="e.g. INV-0001">
                                                        </div>
                                                        <div class="col-auto">
                                                            <label for="currency" class="form-label fw-semibold">Currency</label>
                                                            <select id="currency" class="form-select">
                                                                <option value="USD" selected>USD ($)</option>
                                                                <option value="EUR">EUR (€)</option>
                                                                <option value="GBP">GBP (£)</option>
                                                                <option value="INR">INR (₹)</option>
                                                                <option value="JPY">JPY (¥)</option>
                                                                <option value="AUD">AUD (A$)</option>
                                                                <option value="CAD">CAD (C$)</option>
                                                                <option value="CNY">CNY (¥)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Dates & Payment -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="invoiceDate" class="form-label">Invoice Date</label>
                                                    <input type="text" id="invoiceDate" class="form-control" data-provider="flatpickr" placeholder="Select Date">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="dueDate" class="form-label">Due Date</label>
                                                    <input type="text" id="dueDate" class="form-control" data-provider="flatpickr" placeholder="Select Date">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="paymentMethod" class="form-label">Payment Method</label>
                                                    <select id="paymentMethod" class="form-select">
                                                        <option value="">Select</option>
                                                        <option>Credit / Debit Card</option>
                                                        <option>Bank Transfer</option>
                                                        <option>PayPal</option>
                                                        <option>UPI (GPay)</option>
                                                        <option>Cash</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Billing and Shipping -->
                                            <div class="row mt-4">
                                                <!-- Billing -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Billing Address</label>
                                                    <input type="text" class="form-control mb-2" placeholder="Name">
                                                    <textarea rows="3" class="form-control mb-2" placeholder="Address"></textarea>
                                                    <div class="input-group">
                                                        <select class="form-select" style="max-width: 120px;">
                                                            <option value="+1">+1 (US)</option>
                                                            <option value="+44" selected>+44 (UK)</option>
                                                            <option value="+91">+91 (IN)</option>
                                                            <option value="+61">+61 (AU)</option>
                                                            <option value="+971">+971 (UAE)</option>
                                                            <!-- Add more as needed -->
                                                        </select>
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                    </div>
                                                </div>

                                                <!-- Shipping -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Shipping Address</label>
                                                    <input type="text" class="form-control mb-2" placeholder="Name">
                                                    <textarea rows="3" class="form-control mb-2" placeholder="Address"></textarea>
                                                    <div class="input-group">
                                                        <select class="form-select" style="max-width: 120px;">
                                                            <option value="+1">+1 (US)</option>
                                                            <option value="+44" selected>+44 (UK)</option>
                                                            <option value="+91">+91 (IN)</option>
                                                            <option value="+61">+61 (AU)</option>
                                                            <option value="+971">+971 (UAE)</option>
                                                            <!-- Add more as needed -->
                                                        </select>
                                                        <input type="text" class="form-control" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Product Table -->
                                            <div class="table-responsive mt-4">
                                                <table class="table table-bordered table-nowrap text-center align-middle">
                                                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                                        <tr class="text-uppercase fs-xxs">
                                                            <th>#</th>
                                                            <th class="text-start">Item Description</th>
                                                            <th>Qty</th>
                                                            <th>Unit Price</th>
                                                            <th>Amount</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="invoice-items">
                                                        <tr>
                                                            <td>1</td>
                                                            <td><input type="text" class="form-control" placeholder="Description"></td>
                                                            <td><input type="number" class="form-control" placeholder="1"></td>
                                                            <td><input type="number" class="form-control" placeholder="0.00"></td>
                                                            <td><input type="number" class="form-control" placeholder="0.00"></td>
                                                            <td><button type="button" class="btn btn-sm btn-danger">×</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-primary mt-2"><i class="ti ti-plus"></i> Add Item</button>
                                            </div>

                                            <!-- Totals -->
                                            <div class="row justify-content-end mt-4">
                                                <div class="col-md-4">
                                                    <table class="table table-borderless">
                                                        <tr>
                                                            <td class="text-end">Subtotal</td>
                                                            <td><input type="number" class="form-control" id="subtotal" placeholder="0.00"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-end">Tax (%)</td>
                                                            <td><input type="number" class="form-control" id="tax" placeholder="0.00"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-end">Discount</td>
                                                            <td><input type="number" class="form-control" id="discount" placeholder="0.00"></td>
                                                        </tr>
                                                        <tr class="fw-bold">
                                                            <td class="text-end">Total</td>
                                                            <td><input type="number" class="form-control" id="total" readonly placeholder="0.00"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Notes -->
                                            <div class="mt-4">
                                                <label for="invoiceNote" class="form-label">Additional Notes</label>
                                                <textarea id="invoiceNote" class="form-control" rows="3" placeholder="e.g. Thank you for your business!"></textarea>
                                            </div>
                                        </div>

                                    </form>

                                </div> <!-- end card-->
                            </div> <!-- end col-9-->

                            <div class="col-xl-3 d-print-none">
                                <div class="card card-top-sticky">
                                    <div class="card-body">
                                        <div class="justify-content-center d-flex flex-column gap-2">
                                            <a href="javascript: void(0);" class="btn btn-light"><i class="ti ti-eye me-1"></i> Preview</a>
                                            <a href="javascript: void(0);" class="btn btn-light"><i class="ti ti-download me-1"></i> Download</a>
                                            <a href="javascript: void(0);" class="btn btn-danger btn-lg"><i class="ti ti-send me-1"></i> Send</a>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-9-->
                        </div> <!-- end row-->
                    </div> <!-- end col-10-->
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

    <script>
        function previewImage(event) {
            const input = event.target;
            const file = input.files[0];
            const preview = document.getElementById("preview");

            if (file && preview) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>

</html>