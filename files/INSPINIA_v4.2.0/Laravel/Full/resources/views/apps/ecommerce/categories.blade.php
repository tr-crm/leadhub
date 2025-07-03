@extends('layouts.vertical', ['title' => 'Categories'])

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Ecommerce', 'title' => 'Categories'])

<div class="row">
    <div class="col-12">
        <div data-table data-table-rows-per-page="8" class="card">
            <div class="card-header border-light justify-content-between">

                <div class="d-flex gap-2">
                    <div class="app-search">
                        <input data-table-search type="search" class="form-control" placeholder="Search category...">
                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                    </div>

                    <button data-table-delete-selected class="btn btn-danger d-none">Delete</button>
                </div>

                <div class="d-flex align-items-center gap-1">
                    <!-- Records Per Page -->
                    <div>
                        <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </div>

                    <!-- Status Filter -->
                    <div class="app-search">
                        <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                            <option value="">All</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        <i data-lucide="circle" class="app-search-icon text-muted"></i>
                    </div>

                    <a href="#!" class="btn btn-primary ms-1">
                        <i data-lucide="plus" class="fs-sm me-2"></i> Add Category
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                        <tr class="text-uppercase fs-xxs">
                            <th class="ps-3" style="width: 1%;">
                                <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox" value="option">
                            </th>
                            <th data-table-sort="product">Category Name</th>
                            <th data-table-sort>Slug</th>
                            <th data-table-sort>Products</th>
                            <th data-table-sort>Orders</th>
                            <th data-table-sort>Earnings</th>
                            <th data-table-sort>Last Modify</th>
                            <th data-table-sort data-column="status">Status</th>
                            <th class="text-center" style="width: 1%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Furnitures</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>furniture</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">5248</h5>
                            </td>
                            <td>95.6k</td>
                            <td>$40.5M</td>
                            <td>18 Apr, 2025 <small class="text-muted">12:24 PM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
                            </td>
                        </tr>

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
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Electronics</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>electronics</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">9854</h5>
                            </td>
                            <td>112.3k</td>
                            <td>$30.4M</td>
                            <td>20 Apr, 2025 <small class="text-muted">09:10 AM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
                            </td>
                        </tr>

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
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Smartphones</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>electronics-smartphones</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">1324</h5>
                            </td>
                            <td>50.1k</td>
                            <td>$22.3M</td>
                            <td>22 Apr, 2025 <small class="text-muted">11:45 AM</small></td>
                            <td><span class="badge badge-soft-danger fs-xxs">Inactive</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Headphones</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>accessories</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">5123</h5>
                            </td>
                            <td>70.8k</td>
                            <td>$5.7M</td>
                            <td>25 Apr, 2025 <small class="text-muted">08:20 AM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Table
                                                Lamps</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>furniture-tables</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">7589</h5>
                            </td>
                            <td>88.7k</td>
                            <td>$13.2M</td>
                            <td>27 Apr, 2025 <small class="text-muted">03:15 PM</small></td>
                            <td><span class="badge badge-soft-danger fs-xxs">Inactive</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Kitchen
                                                Appliances</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>appliances</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">3021</h5>
                            </td>
                            <td>110.4k</td>
                            <td>$12.1M</td>
                            <td>30 Apr, 2025 <small class="text-muted">06:00 PM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Smart
                                                Watches</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>wearables</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">6245</h5>
                            </td>
                            <td>95.3k</td>
                            <td>$8.9M</td>
                            <td>28 Apr, 2025 <small class="text-muted">10:45 AM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Laptops</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>electronics</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">4890</h5>
                            </td>
                            <td>67.2k</td>
                            <td>$15.4M</td>
                            <td>29 Apr, 2025 <small class="text-muted">02:30 PM</small></td>
                            <td><span class="badge badge-soft-danger fs-xxs">Inactive</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Gaming
                                                Consoles</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>gaming</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">3756</h5>
                            </td>
                            <td>82.1k</td>
                            <td>$10.7M</td>
                            <td>27 Apr, 2025 <small class="text-muted">09:10 AM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
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
                                        <h5 class="mb-0">
                                            <a data-sort="product" href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="link-reset">Bluetooth
                                                Speakers</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td>audio</td>
                            <td>
                                <h5 class="fs-base mb-0 fw-medium">5432</h5>
                            </td>
                            <td>78.9k</td>
                            <td>$6.3M</td>
                            <td>26 Apr, 2025 <small class="text-muted">04:20 PM</small></td>
                            <td><span class="badge badge-soft-success fs-xxs">Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-eye fs-lg"></i></a>
                                    <a href="#" class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-edit fs-lg"></i></a>
                                    <a href="#" data-table-delete-row class="btn btn-light btn-icon btn-sm rounded-circle"><i class="ti ti-trash fs-lg"></i></a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="card-footer border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div data-table-pagination-info="categories"></div>
                    <div data-table-pagination></div>
                </div>
            </div>
        </div>

    </div><!-- end col -->
</div><!-- end row -->

@endsection

@section('scripts')
@vite(['resources/js/pages/custom-table.js'])
@endsection