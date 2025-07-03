@extends('layouts.vertical', ['title' => 'Outlook View'])

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'Apps', 'title' => 'Outlook View'])

<div class="outlook-box outlook-box-full">
    <div class="offcanvas-lg offcanvas-start outlook-left-menu" tabindex="-1" id="outlookSidebaroffcanvas" aria-labelledby="outlookSidebaroffcanvasLabel">
        <div class="card h-100 mb-0 rounded-0 border-0" data-simplebar>
            <div class="card-body p-0">

                <ul class="list-group list-group-flush outlook-list mb-0" role="tablist">
                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-1" class="nav-link p-3" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-1" aria-selected="false">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Emily Carter</span>
                                <small class="float-end text-muted">12.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Completed your project milestone and uploaded the final report to the shared folder.
                            </span>

                            <span class="d-flex justify-content-between">
                                <span><i class="ti ti-map-pin"></i> New Haven, CT</span>
                            </span>
                        </a>
                    </li>

                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-2" class="nav-link p-3 active" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-2" aria-selected="true">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Marcus Lee</span>
                                <small class="float-end text-muted">10.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Scheduled a team sync for next Monday to review current backlog and sprint goals.
                            </span>

                            <span class="d-flex align-items-center flex-wrap justify-content-between">
                                <span><i class="ti ti-map"></i> San Francisco, CA</span>
                                <span class="badge text-bg-primary badge-label">Special</span>
                            </span>
                        </a>
                    </li>

                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-3" class="nav-link p-3" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-3" aria-selected="false">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Natalie Brooks</span>
                                <small class="float-end text-muted">08.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Sent over the feedback for your design proposal. Waiting on final tweaks.
                            </span>

                            <span class="d-flex justify-content-between">
                                <span><i class="ti ti-map"></i> Austin, TX</span>
                            </span>
                        </a>
                    </li>

                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-4" class="nav-link p-3" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-4" aria-selected="false">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Daniel Kim</span>
                                <small class="float-end text-muted">07.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Submitted the final invoice for Q1 deliverables. Let me know if anything's missing.
                            </span>

                            <span class="d-flex justify-content-between">
                                <span><i class="ti ti-map-pin"></i> Seattle, WA</span>
                            </span>
                        </a>
                    </li>

                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-5" class="nav-link p-3" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-5" aria-selected="false">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Amelia Ross</span>
                                <small class="float-end text-muted">06.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Your access to the internal beta environment has been approved. Welcome aboard!
                            </span>

                            <span class="d-flex justify-content-between">
                                <span><i class="ti ti-map"></i> Denver, CO</span>
                            </span>
                        </a>
                    </li>

                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-6" class="nav-link p-3" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-6" aria-selected="false">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Jason Park</span>
                                <small class="float-end text-muted">05.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Please review the attached contract and let me know if you'd like to make edits.
                            </span>

                            <span class="d-flex justify-content-between">
                                <span><i class="ti ti-map-pin"></i> Boston, MA</span>
                            </span>
                        </a>
                    </li>

                    <li class="list-group-item p-0" role="presentation">
                        <a href="#outlook-tab-7" class="nav-link p-3" data-bs-toggle="tab" role="tab" aria-controls="outlook-tab-7" aria-selected="false">
                            <span class="d-flex justify-content-between align-items-center mb-1">
                                <span class="ff-secondary fw-semibold">Sophia White</span>
                                <small class="float-end text-muted">03.04.2025</small>
                            </span>

                            <span class="mb-2 d-block fs-xs text-muted">
                                Reminder: Your subscription will renew in 3 days. Update billing details if needed.
                            </span>

                            <span class="d-flex align-items-center flex-wrap justify-content-between">
                                <span><i class="ti ti-map"></i> Miami, FL</span>
                                <span class="badge text-bg-warning badge-label">Reminder</span>
                            </span>
                        </a>
                    </li>

                </ul>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>

    <div class="card h-100 mb-0 rounded-0 border-0 flex-grow-1" data-simplebar data-simplebar-md>
        <div class="card-header d-lg-none d-flex">
            <button class="btn btn-sm btn-default btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#outlookSidebaroffcanvas" aria-controls="outlookSidebaroffcanvas">
                <i class="ti ti-menu-2 fs-lg"></i>
            </button>
        </div>

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade" id="outlook-tab-1" role="tabpanel">
                    <div class="d-flex justify-content-center gap-2">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Tuesday, 16 April 2025, 11:48 AM
                            </div>
                            <h2 class="fs-xl mb-3">
                                Potential Partnership Opportunity
                            </h2>
                        </div>

                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Hello Maria,
                    </p>
                    <p>
                        I hope you're well. I'm reaching out to explore a potential partnership between our teams. We've been following your recent product launches and believe there's strong synergy between our platforms.
                    </p>
                    <p>
                        We'd love to schedule a quick 30-minute call next week to discuss how we might collaborate on upcoming campaigns. Please let me know what your availability looks like.
                    </p>
                    <p>
                        Looking forward to your thoughts.
                    </p>

                    <p class="fst-italic">
                        <strong>Best, <br>David Lee</strong><br>
                        Business Development Lead
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show active" id="outlook-tab-2" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Thursday, 18 April 2025, 2:15 PM
                            </div>

                            <h2 class="fs-xl mb-3">
                                Project Feedback & Next Steps
                            </h2>
                        </div>
                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Hi Jason,
                    </p>
                    <p>
                        Thank you for sharing the latest draft of the landing page. The new layout looks clean and intuitive, especially the improvements made to the hero section and the pricing table. I also appreciated how responsive the mobile version feels.
                    </p>
                    <p>
                        Here are a few suggestions to consider before we proceed with deployment:
                    </p>
                    <ul>
                        <li>Update the CTA button color to match our brand palette (#3A86FF).</li>
                        <li>Replace the placeholder text in the testimonial section with actual client feedback.</li>
                        <li>Add a subtle animation to the "Features" icons on hover.</li>
                    </ul>
                    <p>
                        Once these changes are in place, we can finalize the QA pass and move on to staging. Let me know if you need any additional assets or approvals on my end.
                    </p>

                    <p class="fst-italic">
                        <strong>Best regards,<br>Stephanie Harris</strong><br>
                        Senior Product Manager
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="outlook-tab-3" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Friday, 19 April 2025, 9:22 AM
                            </div>
                            <h2 class="fs-xl mb-3">
                                Invoice #INV-1043 Due Soon
                            </h2>
                        </div>
                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Dear Ms. Patel,
                    </p>
                    <p>
                        This is a gentle reminder that invoice <strong>#INV-1043</strong> for your March 2025 subscription will be due on <strong>April 22, 2025</strong>.
                    </p>
                    <p>
                        Kindly ensure the payment is processed before the due date to avoid any disruption of services. You can view and pay the invoice via your account dashboard.
                    </p>
                    <p>
                        If you've already made the payment, please disregard this email.
                    </p>

                    <p class="fst-italic">
                        <strong>Kind regards,<br>Emily Zhang</strong><br>
                        Finance Team – CloudCore Solutions
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="outlook-tab-4" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Wednesday, 17 April 2025, 3:15 PM
                            </div>
                            <h2 class="fs-xl mb-3">
                                We'd love your feedback!
                            </h2>
                        </div>
                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Hi Jordan,
                    </p>
                    <p>
                        We hope you're enjoying your experience with TaskFlow Pro. We'd really appreciate it if you could take 2 minutes to share your thoughts with us.
                    </p>
                    <p>
                        Your feedback helps us make TaskFlow better for everyone. Let us know what features you love and what we could improve.
                    </p>
                    <p>
                        Thanks for being part of our community!
                    </p>

                    <p class="fst-italic">
                        <strong>Cheers,<br>Nicole Ray</strong><br>
                        Customer Experience – TaskFlow Pro
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="outlook-tab-5" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Saturday, 20 April 2025, 5:42 PM
                            </div>
                            <h2 class="fs-xl mb-3">
                                Your support ticket #45782 has been resolved
                            </h2>
                        </div>
                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Hello Elias,
                    </p>
                    <p>
                        We're pleased to inform you that your support ticket (#45782) regarding API rate limits has been resolved.
                    </p>
                    <p>
                        The issue was caused by a misconfigured webhook, which we've now fixed on our end. Please feel free to test your integration again.
                    </p>
                    <p>
                        If you experience any further issues, don't hesitate to reach out.
                    </p>

                    <p class="fst-italic">
                        <strong>Best regards,<br>Technical Support Team</strong><br>
                        Apex Cloud Systems
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="outlook-tab-6" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Friday, 19 April 2025, 9:15 AM
                            </div>
                            <h2 class="fs-xl mb-3">
                                Please review the attached contract
                            </h2>
                        </div>
                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Hi Elias,
                    </p>
                    <p>
                        I’ve attached the revised version of the partnership agreement we discussed during last week’s call. Please take a moment to review and let me know if you'd like to propose any changes.
                    </p>
                    <p>
                        Once approved, we can move forward with signatures and onboarding.
                    </p>
                    <p>
                        Looking forward to your feedback.
                    </p>

                    <p class="fst-italic">
                        <strong>Best,<br>Jason Park</strong><br>
                        Contracts & Legal Affairs
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="outlook-tab-7" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-muted mb-2">
                                <i class="ti ti-clock"></i> Wednesday, 17 April 2025, 2:10 PM
                            </div>
                            <h2 class="fs-xl mb-3">
                                Upcoming Subscription Renewal Notice
                            </h2>
                        </div>
                        <div>
                            <button class="btn btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Plug this message">
                                <i class="ti ti-plug me-1"></i> Plug it
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                <i class="ti ti-eye"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                <i class="ti ti-alert-circle"></i>
                            </button>
                            <button class="btn btn-icon btn-default btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to trash">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </div>

                    <p>
                        Dear Elias,
                    </p>
                    <p>
                        This is a reminder that your premium subscription to InsightPro will automatically renew on 20 April 2025.
                    </p>
                    <p>
                        If you wish to make changes to your billing or cancel your subscription, please visit your account settings before the renewal date.
                    </p>
                    <p>
                        We appreciate your continued support.
                    </p>

                    <p class="fst-italic">
                        <strong>Warm regards,<br>Sophia White</strong><br>
                        Billing Department<br>
                        InsightPro Services
                    </p>

                    <form action="#" class="my-3">
                        <div class="mb-3">
                            <textarea class="form-control" id="form-control-textarea" rows="4" placeholder="Enter your reply..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary">
                                Submit <i class="ti ti-send-2 align-baseline ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div> <!-- end row-->

@endsection

@section('scripts')
@endsection
