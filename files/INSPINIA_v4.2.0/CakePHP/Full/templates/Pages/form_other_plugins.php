<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Other Plugins']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'Forms' , 'title' => 'Other Plugins']) ?>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Inputmask</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Inputmask is a javascript library that creates an input mask. Inputmask can run against vanilla javascript, jQuery, and jqlite. (Hoverable Inputmask)
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://robinherbots.github.io/Inputmask/" target="_blank">
                                    Inputmask on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>

                            <div class="card-body">

                                <!-- Example 1: Date -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Date</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="00/00/0000"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 2: Hour -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Hour</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="00:00:00"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 3: Date & Hour -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Date & Hour</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="00/00/0000 00:00:00"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 4: ZIP Code -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>ZIP Code</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="00000-000"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 5: Crazy ZIP Code -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Crazy ZIP Code</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="0-00-00-00"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 6: Money -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Money</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="000.000.000.000.000,00"</code>, <code>data-reverse="true"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 7: Money 2 -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Money 2</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="#.##0,00"</code>, <code>data-reverse="true"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 8: Telephone -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Telephone</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="0000-0000"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000-0000">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 9: Telephone with Area Code -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>Telephone with Area Code</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="(00) 0000-0000"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 10: US Telephone -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>US Telephone</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="(000) 000-0000"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 11: São Paulo Cellphones -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>São Paulo Cellphones</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="(00) 00000-0000"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 12: CPF -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>CPF</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="000.000.000-00"</code>, <code>data-reverse="true"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 13: CNPJ -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>CNPJ</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="00.000.000/0000-00"</code>, <code>data-reverse="true"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Example 14: IP Address -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5>IP Address</h5>
                                        <p class="text-muted mb-0">
                                            Add attribute <code>data-toggle="input-mask"</code> <code>data-mask-format="099.099.099.099"</code>, <code>data-reverse="true"</code>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true">
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Typeahead</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    a flexible JavaScript library that provides a strong foundation for building robust typeaheads
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://twitter.github.io/typeahead.js/" target="_blank">
                                    Typeahead on View Official Website
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>

                            <div class="card-body">
                                <!-- Basic -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Basic</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control typeahead" type="text" autocomplete="off" placeholder="Enter states from USA">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Bloodhound -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">BloodHound (Suggestion Engine)</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control bloodhound-typeahead" type="text" autocomplete="off" placeholder="Enter states from USA">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Prefetch -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Prefetch</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control prefetch-typeahead" type="text" autocomplete="off" placeholder="Enter states from USA">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Default Suggestions -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Default Suggestions</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control default-suggestions-typeahead" type="text" autocomplete="off" placeholder="Default Suggestions">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Custom Template -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Custom Template</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control custom-template-typeahead" type="text" autocomplete="off" placeholder="Search For Oscar Winner">
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <!-- Multiple Datasets -->
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Multiple Datasets</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control multi-datasets-typeahead" type="text" autocomplete="off" placeholder="NBA and NHL Teams">
                                    </div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Input Touchspin</h4>
                                </div>
                                <span class="badge badge-soft-success badge-label py-1 fs-xxs">Exclusive</span>
                            </div>

                            <div class="card-body">

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Default Touchspin</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group" data-touchspin>
                                            <button type="button" class="btn btn-light floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="1" max="800000">
                                            <button type="button" class="btn btn-light floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Sizes</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group input-group-sm" data-touchspin>
                                            <button type="button" class="btn btn-light floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control border-0" value="0" max="800000">
                                            <button type="button" class="btn btn-light floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group input-group-lg mt-2" data-touchspin>
                                            <button type="button" class="btn btn-light floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control border-0" value="0" max="800000">
                                            <button type="button" class="btn btn-light floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Colors</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group" data-touchspin>
                                            <button type="button" class="btn btn-primary floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-primary floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-secondary floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-secondary floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-info floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-info floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-success floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-success floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-warning floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-warning floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-danger floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-danger floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-dark floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-dark floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-purple floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-purple floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <button type="button" class="btn btn-soft-primary floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-soft-primary floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Readonly</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group" data-touchspin>
                                            <button type="button" class="btn btn-light floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="1" max="800000" readonly>
                                            <button type="button" class="btn btn-light floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Disabled</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group" data-touchspin>
                                            <button type="button" class="btn btn-light floating" data-minus disabled><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="1" max="800000" disabled>
                                            <button type="button" class="btn btn-light floating" data-plus disabled><i class="ti ti-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Style</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group" data-touchspin>
                                            <button type="button" class="btn btn-primary rounded-circle floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-primary rounded-circle floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group rounded-pill mt-2" data-touchspin>
                                            <button type="button" class="btn btn-primary rounded-circle floating" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control form-control-sm border-0" value="100" max="800000">
                                            <button type="button" class="btn btn-primary rounded-circle floating" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group border-0 mt-2" data-touchspin>
                                            <button type="button" class="btn btn-outline-secondary" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control border-secondary" value="2" min="0" max="100">
                                            <button type="button" class="btn btn-outline-secondary" data-plus><i class="ti ti-plus"></i></button>
                                        </div>

                                        <div class="input-group border-0 mt-2" data-touchspin>
                                            <button type="button" class="btn btn-soft-success" data-minus><i class="ti ti-minus"></i></button>
                                            <input type="number" class="form-control border-success-subtle" value="2" min="0" max="100">
                                            <button type="button" class="btn btn-soft-success" data-plus><i class="ti ti-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4 border-top border-dashed"></div>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h5 class="fw-semibold mb-1">Vertical Style</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group input-group-sm" data-touchspin>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-soft-success" data-plus><i class="ti ti-plus"></i></button>
                                                <button type="button" class="btn btn-soft-danger" data-minus><i class="ti ti-minus"></i></button>
                                            </div>
                                            <input type="number" class="form-control border-0" value="1" min="0" max="10">
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-success" data-plus><i class="ti ti-plus"></i></button>
                                                <button type="button" class="btn btn-danger" data-minus><i class="ti ti-minus"></i></button>
                                            </div>
                                            <input type="number" class="form-control border-0" value="1" min="0" max="10">
                                        </div>

                                        <div class="input-group input-group-lg mt-2" data-touchspin>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-dark" data-plus><i class="ti ti-plus"></i></button>
                                                <button type="button" class="btn btn-dark" data-minus><i class="ti ti-minus"></i></button>
                                            </div>
                                            <input type="number" class="form-control border-0" value="1" min="0" max="10">
                                        </div>

                                        <div class="input-group mt-2" data-touchspin>
                                            <input type="number" class="form-control border-0" value="1" min="0" max="10">
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-dark" data-plus><i class="ti ti-plus"></i></button>
                                                <button type="button" class="btn btn-dark" data-minus><i class="ti ti-minus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

    <!-- InputMask Plugin js -->
    <script src="/plugins/inputmask/inputmask.min.js"></script>

    <!-- Typehead Plugin js -->
    <script src="/plugins/handlebars/handlebars.min.js"></script>
    <script src="/plugins/typeahead/typeahead.bundle.min.js"></script>

    <!-- Inputmask Demo js -->
    <script src="/js/pages/form-inputmask.js"></script>

    <!-- Typehead Demo js -->
    <script src="/js/pages/form-typehead.js"></script>

</body>

</html>