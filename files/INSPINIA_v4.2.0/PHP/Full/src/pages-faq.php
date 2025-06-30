<?php include 'partials/html.php' ?>

<head>
    <?php $title = "FAQs"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php $subtitle = "Pages"; $title = "FAQs"; include 'partials/page-title.php' ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="row justify-content-center my-4">
                            <div class="col-lg-5 col-md-8">
                                <div class="text-center">
                                    <h3 class="fw-bold mb-4">Frequently Asked Questions</h3>
                                    <div class="app-search mb-3">
                                        <input type="text" class="form-control py-2 rounded-pill" placeholder="Search Questions...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div> 
                                    <div class="d-flex justify-content-center align-items-center gap-1">
                                        <h5 class="text-muted mb-0">Popular Searches : </h5>
                                        <a href="#!" class="badge bg-primary-subtle text-primary rounded-pill px-2 py-1 fs-6">Apps</a>
                                        <a href="#!" class="badge bg-primary-subtle text-primary rounded-pill px-2 py-1 fs-6">Developers</a>
                                        <a href="#!" class="badge bg-primary-subtle text-primary rounded-pill px-2 py-1 fs-6">Repair</a>
                                        <a href="#!" class="badge bg-primary-subtle text-primary rounded-pill px-2 py-1 fs-6">Billing</a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h4 class="card-title mb-1">General</h4>
                                        <p class="text-muted mb-0">Here are some common questions about our templates.</p>
                                    </div> <!-- end card-header-->
                            
                                    <div class="card-body">
                                        <div class="accordion accordion-bordered" id="BorderedaccordionExample">
                                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="BorderedheadingOne">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseOne" aria-expanded="true" aria-controls="BorderedcollapseOne">
                                                        What is included in your template purchase?
                                                    </button>
                                                </h2>
                                                <div id="BorderedcollapseOne" class="accordion-collapse collapse" aria-labelledby="BorderedheadingOne" data-bs-parent="#BorderedaccordionExample">
                                                    <div class="accordion-body">
                                                        Our templates come with clean source code, comprehensive documentation, SCSS files, and starter project setups for various frameworks (e.g., React, Angular, Laravel).
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="BorderedheadingTwo">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseTwo" aria-expanded="false" aria-controls="BorderedcollapseTwo">
                                                        Do you offer support after purchase?
                                                    </button>
                                                </h2>
                                                <div id="BorderedcollapseTwo" class="accordion-collapse collapse" aria-labelledby="BorderedheadingTwo" data-bs-parent="#BorderedaccordionExample">
                                                    <div class="accordion-body">
                                                        Yes! We provide 6 months of free support for bug fixes, usage questions, and minor updates. You can also extend support if needed.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="BorderedheadingThree">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseThree" aria-expanded="false" aria-controls="BorderedcollapseThree">
                                                        Can I use the template for multiple projects?
                                                    </button>
                                                </h2>
                                                <div id="BorderedcollapseThree" class="accordion-collapse collapse" aria-labelledby="BorderedheadingThree" data-bs-parent="#BorderedaccordionExample">
                                                    <div class="accordion-body">
                                                        The standard license allows use in a single end product. For multiple projects, a separate license is required for each use case.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="BorderedheadingFour">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseFour" aria-expanded="false" aria-controls="BorderedcollapseFour">
                                                        Are the templates compatible with the latest frameworks?
                                                    </button>
                                                </h2>
                                                <div id="BorderedcollapseFour" class="accordion-collapse collapse" aria-labelledby="BorderedheadingFour" data-bs-parent="#BorderedaccordionExample">
                                                    <div class="accordion-body">
                                                        Yes, we regularly update our templates to ensure compatibility with the latest versions of frameworks like Bootstrap, React, Angular, Laravel, and others.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="BorderedheadingFive">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BorderedcollapseFive" aria-expanded="false" aria-controls="BorderedcollapseFive">
                                                        Do you provide Figma or design files?
                                                    </button>
                                                </h2>
                                                <div id="BorderedcollapseFive" class="accordion-collapse collapse" aria-labelledby="BorderedheadingFive" data-bs-parent="#BorderedaccordionExample">
                                                    <div class="accordion-body">
                                                        Yes, we include Figma or design source files with selected templates. Please check the product details or contact us if unsure.
                                                    </div>
                                                </div>
                                            </div>
                            
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h4 class="card-title mb-1">Payments</h4>
                                        <p class="text-muted mb-0">Here are some common questions related to billing and payment.</p>
                                    </div> <!-- end card-header-->
                            
                                    <div class="card-body">
                                        <div class="accordion accordion-bordered" id="BorderedaccordionPayment">
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="paymentHeadingOne">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paymentCollapseOne" aria-expanded="true" aria-controls="paymentCollapseOne">
                                                        What payment methods do you accept?
                                                    </button>
                                                </h2>
                                                <div id="paymentCollapseOne" class="accordion-collapse collapse" aria-labelledby="paymentHeadingOne" data-bs-parent="#BorderedaccordionPayment">
                                                    <div class="accordion-body">
                                                        We accept all major credit/debit cards, PayPal, and Stripe payments. Some marketplaces may support additional methods.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="paymentHeadingTwo">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paymentCollapseTwo" aria-expanded="false" aria-controls="paymentCollapseTwo">
                                                        Will I receive an invoice after purchase?
                                                    </button>
                                                </h2>
                                                <div id="paymentCollapseTwo" class="accordion-collapse collapse" aria-labelledby="paymentHeadingTwo" data-bs-parent="#BorderedaccordionPayment">
                                                    <div class="accordion-body">
                                                        Yes, you will receive an official invoice or receipt via email immediately after your purchase is completed.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="paymentHeadingThree">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paymentCollapseThree" aria-expanded="false" aria-controls="paymentCollapseThree">
                                                        Is there a refund policy?
                                                    </button>
                                                </h2>
                                                <div id="paymentCollapseThree" class="accordion-collapse collapse" aria-labelledby="paymentHeadingThree" data-bs-parent="#BorderedaccordionPayment">
                                                    <div class="accordion-body">
                                                        Yes, we follow the refund policy of the marketplace where the item was purchased. Please refer to their refund terms or contact us directly if unsure.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="paymentHeadingFour">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paymentCollapseFour" aria-expanded="false" aria-controls="paymentCollapseFour">
                                                        Can I upgrade my license later?
                                                    </button>
                                                </h2>
                                                <div id="paymentCollapseFour" class="accordion-collapse collapse" aria-labelledby="paymentHeadingFour" data-bs-parent="#BorderedaccordionPayment">
                                                    <div class="accordion-body">
                                                        Absolutely! You can upgrade your license at any time by contacting support or purchasing the extended license separately.
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="paymentHeadingFive">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paymentCollapseFive" aria-expanded="false" aria-controls="paymentCollapseFive">
                                                        Why was my payment declined?
                                                    </button>
                                                </h2>
                                                <div id="paymentCollapseFive" class="accordion-collapse collapse" aria-labelledby="paymentHeadingFive" data-bs-parent="#BorderedaccordionPayment">
                                                    <div class="accordion-body">
                                                        Payment failures may occur due to incorrect card info, insufficient funds, or bank restrictions. Please try another method or contact your provider.
                                                    </div>
                                                </div>
                                            </div>
                            
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            
                        </div> <!-- end row-->

                        <div class="row">
                            <!-- Refunds Section -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h4 class="card-title mb-1">Refunds</h4>
                                        <p class="text-muted mb-0">Find answers related to our refund policy and conditions.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion accordion-bordered" id="BorderedaccordionRefund">
                        
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="refundHeadingOne">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#refundCollapseOne" aria-expanded="true" aria-controls="refundCollapseOne">
                                                        What is your refund policy?
                                                    </button>
                                                </h2>
                                                <div id="refundCollapseOne" class="accordion-collapse collapse" aria-labelledby="refundHeadingOne" data-bs-parent="#BorderedaccordionRefund">
                                                    <div class="accordion-body">
                                                        We offer refunds within 14 days of purchase if the template is faulty or not as described. Please review the full policy or reach out for clarification.
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="refundHeadingTwo">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#refundCollapseTwo" aria-expanded="false" aria-controls="refundCollapseTwo">
                                                        How do I request a refund?
                                                    </button>
                                                </h2>
                                                <div id="refundCollapseTwo" class="accordion-collapse collapse" aria-labelledby="refundHeadingTwo" data-bs-parent="#BorderedaccordionRefund">
                                                    <div class="accordion-body">
                                                        You can request a refund by contacting our support team with your order ID and a brief reason for the request.
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="refundHeadingThree">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#refundCollapseThree" aria-expanded="false" aria-controls="refundCollapseThree">
                                                        Are there any non-refundable purchases?
                                                    </button>
                                                </h2>
                                                <div id="refundCollapseThree" class="accordion-collapse collapse" aria-labelledby="refundHeadingThree" data-bs-parent="#BorderedaccordionRefund">
                                                    <div class="accordion-body">
                                                        Custom services, extended licenses, and downloadable assets with confirmed usage typically aren’t refundable.
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Customization Section -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h4 class="card-title mb-1">Customization</h4>
                                        <p class="text-muted mb-0">Questions about custom development and template modifications.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion accordion-bordered" id="BorderedaccordionCustom">
                        
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="customHeadingOne">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#customCollapseOne" aria-expanded="true" aria-controls="customCollapseOne">
                                                        Do you offer customization services?
                                                    </button>
                                                </h2>
                                                <div id="customCollapseOne" class="accordion-collapse collapse" aria-labelledby="customHeadingOne" data-bs-parent="#BorderedaccordionCustom">
                                                    <div class="accordion-body">
                                                        Yes, we offer paid customization services based on your requirements. Contact us for a quote.
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="customHeadingTwo">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#customCollapseTwo" aria-expanded="false" aria-controls="customCollapseTwo">
                                                        Can I modify the template myself?
                                                    </button>
                                                </h2>
                                                <div id="customCollapseTwo" class="accordion-collapse collapse" aria-labelledby="customHeadingTwo" data-bs-parent="#BorderedaccordionCustom">
                                                    <div class="accordion-body">
                                                        Absolutely! All templates come with full source code and documentation to help you make your own changes.
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="customHeadingThree">
                                                    <button class="accordion-button shadow-none bg-light bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#customCollapseThree" aria-expanded="false" aria-controls="customCollapseThree">
                                                        Will customizing the template affect support?
                                                    </button>
                                                </h2>
                                                <div id="customCollapseThree" class="accordion-collapse collapse" aria-labelledby="customHeadingThree" data-bs-parent="#BorderedaccordionCustom">
                                                    <div class="accordion-body">
                                                        Support is still available, but major custom changes may not be covered under standard support terms.
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>

            </div>
            <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>