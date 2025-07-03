@extends('layouts.vertical', ['title' => 'SweetAlert2'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Miscellaneous', 'title' => 'SweetAlert2'])

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
                                    <h5 class="mb-1">Basic</h5>
                                    <p class="text-muted mb-0">Displays a simple SweetAlert popup.</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" id="sweetalert-basic">Click me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">Title</h5>
                                    <p class="text-muted mb-0">A popup with a title and supporting text.</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" id="sweetalert-title">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">HTML</h5>
                                    <p class="text-muted mb-0">Shows a popup with custom HTML content.</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" id="custom-html-alert">Toggle HTML SweetAlert</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">All States</h5>
                                    <p class="text-muted mb-0">Examples of SweetAlert in different alert states.</p>
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" id="sweetalert-info" class="btn btn-sm btn-info">Toggle Info</button>
                                        <button type="button" id="sweetalert-warning" class="btn btn-sm btn-warning">Toggle Warning</button>
                                        <button type="button" id="sweetalert-error" class="btn btn-sm btn-danger">Toggle Error</button>
                                        <button type="button" id="sweetalert-success" class="btn btn-sm btn-success">Toggle Success</button>
                                        <button type="button" id="sweetalert-question" class="btn btn-sm btn-primary">Toggle Question</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">Long Content</h5>
                                    <p class="text-muted mb-0">A popup with extended content for demonstration.</p>
                                </td>
                                <td>
                                    <button type="button" id="sweetalert-longcontent" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">With Confirm Button</h5>
                                    <p class="text-muted mb-0">A confirmation dialog with an attached action.</p>
                                </td>
                                <td>
                                    <button type="button" id="sweetalert-confirm-button" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">With Cancel Button</h5>
                                    <p class="text-muted mb-0">Includes cancel and confirm options with different actions.</p>
                                </td>
                                <td>
                                    <button type="button" id="sweetalert-params" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">With Image Header (Logo)</h5>
                                    <p class="text-muted mb-0">Custom popup with a logo or image header.</p>
                                </td>
                                <td>
                                    <button type="button" id="sweetalert-image" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">Auto Close</h5>
                                    <p class="text-muted mb-0">Displays a popup that closes automatically after a timeout.</p>
                                </td>
                                <td>
                                    <button type="button" id="sweetalert-close" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">Position</h5>
                                    <p class="text-muted mb-0">Shows the alert in different screen positions.</p>
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-sm btn-primary" id="position-top-start">Top Start</button>
                                        <button class="btn btn-sm btn-primary" id="position-top-end">Top End</button>
                                        <button class="btn btn-sm btn-primary" id="position-bottom-start">Bottom Start</button>
                                        <button class="btn btn-sm btn-primary" id="position-bottom-end">Bottom End</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">With Custom Padding, Background</h5>
                                    <p class="text-muted mb-0">Popup with custom dimensions, padding, and background style.</p>
                                </td>
                                <td>
                                    <button type="button" id="custom-padding-width-alert" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="mb-1">Ajax Request</h5>
                                    <p class="text-muted mb-0">Demonstrates an alert with an Ajax request.</p>
                                </td>
                                <td>
                                    <button type="button" id="ajax-alert" class="btn btn-sm btn-secondary">Click Me</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div> <!-- end table-resp.-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div> <!-- end row-->

@endsection

@section('scripts')
@vite(['resources/js/pages/misc-sweetalerts.js'])
@endsection