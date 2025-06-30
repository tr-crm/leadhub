@extends('layouts.vertical', ['title' => 'Product Views'])

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Ecommerce', 'title' => 'Product Views'])

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div data-table data-table-rows-per-page="8" class="card">
            <div class="card-header border-light justify-content-between">

                <div class="d-flex gap-2">
                    <div class="app-search">
                        <input data-table-search type="search" class="form-control" placeholder="Search report...">
                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                    </div>
                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <span class="me-2 fw-semibold">Filter By:</span>

                    <!-- Sales Performance Filter -->
                    <div class="app-search">
                        <select data-table-range-filter="performance" class="form-select form-control my-1 my-md-0">
                            <option value="All">Sales Performance</option>
                            <option value="1000+">Top Selling</option>
                            <option value="1-1000">Low Selling</option>
                            <option value="0">No Sales</option>
                        </select>
                        <i data-lucide="trending-up" class="app-search-icon text-muted"></i>
                    </div>

                    <!-- Records Per Page -->
                    <div>
                        <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </div>

                </div>

            </div>

            <div class="table-responsive">
                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                        <tr class="text-uppercase fs-xxs">
                            <th class="ps-3" style="width: 1%;">
                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" id="select-all-products" value="option">
                            </th>
                            <th data-table-sort="product">Product</th>
                            <th data-table-sort>SKU</th>
                            <th data-table-sort>Price</th>
                            <th data-table-sort="rating">Rating</th>
                            <th data-table-sort>Views</th>
                            <th data-table-sort data-column="performance">Orders</th>
                            <th data-table-sort>Conversation</th>
                            <th style="width: 1%;">Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Product Row -->
                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/2.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Smart
                                                Fitness Watch</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>FW-54201</td>
                            <td>$129.99</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star"></span> <!-- one empty -->
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(54)</a></span>
                            </td>
                            <td>45.2k</td>
                            <td>820</td>
                            <td>7.3%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="bar"></div>
                            </td>
                        </tr>

                        <!-- Product Row -->
                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/3.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Portable
                                                Bluetooth Speaker</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>BS-20894</td>
                            <td>$79.50</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star-filled"></span>
                                    <span class="ti ti-star"></span>
                                    <span class="ti ti-star"></span> <!-- two empty -->
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(31)</a></span>
                            </td>
                            <td>28.9k</td>
                            <td>410</td>
                            <td>5.8%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="line"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/4.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Gaming Mouse</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>GM-77215</td>
                            <td>$49.99</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(67)</a></span>
                            </td>
                            <td>22.4k</td>
                            <td>340</td>
                            <td>6.4%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="bar"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/5.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Noise Cancelling
                                                Headphones</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>NC-88321</td>
                            <td>$199.00</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(128)</a></span>
                            </td>
                            <td>60.1k</td>
                            <td>1500</td>
                            <td>9.8%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="line"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/6.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">4K Action Camera</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>AC-90763</td>
                            <td>$249.99</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(94)</a></span>
                            </td>
                            <td>18.9k</td>
                            <td>610</td>
                            <td>6.0%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="bar"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/7.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Wireless Charger
                                                Pad</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>WC-23815</td>
                            <td>$39.95</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star"></span><span class="ti ti-star"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(41)</a></span>
                            </td>
                            <td>12.3k</td>
                            <td>220</td>
                            <td>4.1%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="line"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/8.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Mechanical
                                                Keyboard</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>MK-48519</td>
                            <td>$89.00</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(77)</a></span>
                            </td>
                            <td>30.5k</td>
                            <td>540</td>
                            <td>7.2%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="bar"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/9.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Drone with Camera</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>DR-61208</td>
                            <td>$399.00</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(189)</a></span>
                            </td>
                            <td>75.9k</td>
                            <td>1900</td>
                            <td>10.2%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="line"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/10.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Smart Home Hub</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>SH-30051</td>
                            <td>$149.99</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star"></span><span class="ti ti-star"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(58)</a></span>
                            </td>
                            <td>21.7k</td>
                            <td>470</td>
                            <td>5.5%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="bar"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox" value="option">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-md me-3">
                                        <img src="/images/products/1.png" alt="Product" class="img-fluid rounded">
                                    </div>
                                    <div>
                                        <h5 class="mb-0"><a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Mini Projector</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>MP-12081</td>
                            <td>$219.00</td>
                            <td>
                                <span class="text-warning">
                                    <span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star-filled"></span><span class="ti ti-star"></span><span class="ti ti-star"></span>
                                </span>
                                <span class="ms-1"><a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" data-sort="rating" class="link-reset fw-semibold">(35)</a></span>
                            </td>
                            <td>15.9k</td>
                            <td>310</td>
                            <td>4.7%</td>
                            <td>
                                <div data-chart="apex" data-chart-type="line"></div>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
            <div class="card-footer border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div data-table-pagination-info="products"></div>
                    <div data-table-pagination></div>
                </div>
            </div>
        </div>

    </div><!-- end col -->
</div><!-- end row -->

@endsection

@section('scripts')
    @vite(['resources/js/pages/custom-table.js','resources/js/pages/ecommerce-product-views.js'])
@endsection