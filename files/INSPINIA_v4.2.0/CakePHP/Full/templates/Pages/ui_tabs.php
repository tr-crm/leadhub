<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Tabs']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Tabs']) ?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    Documentation and examples on how to use Bootstrap’s tab components.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#javascript-behavior" target="_blank">
                                    Tabs on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Default Tabs</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;nav nav-tabs mb-3&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#overview&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Overview
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#activity&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                    Activity
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#settings&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Settings
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link disabled&quot;&gt;
                                                    Disabled
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
        
                                        &lt;div class=&quot;tab-content&quot;&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;overview&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;activity&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Simple widget of tabbable panes of local content.</p>

                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#overview" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Overview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#activity" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            Activity
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Settings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-bs-toggle="tab" aria-expanded="false" class="nav-link disabled">
                                            Disabled
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="overview">
                                        <p class="mb-0">
                                            This dashboard provides a quick overview of your recent activity, performance metrics, and system status.
                                            You can easily monitor key indicators, recent logins, pending tasks, and overall user engagement.
                                        </p>
                                    </div>
                                    <div class="tab-pane show active" id="activity">
                                        <p class="mb-0">
                                            View your latest interactions and actions taken across the platform. This includes recent file uploads,
                                            comments, status updates, and notification history to keep you up to date with ongoing changes.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        <p class="mb-0">
                                            Customize your account preferences including theme options, notification settings, and privacy controls.
                                            Adjust layout configurations to suit your workflow and manage integration with third-party services.
                                        </p>
                                    </div>
                                </div>

                            </div> <!--end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Tabs Justified</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;nav nav-justified nav-tabs mb-3&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#overview1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Overview
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#profile1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                    Profile
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#settings1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Settings
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#projects1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Projects
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#support1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Support
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;

                                        &lt;div class=&quot;tab-content&quot;&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;overview1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;projects1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;support1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                    ...
                                                &lt;/p&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->

                            <div class="card-body">
                                <p class="text-muted">Using class <code>.nav-justified</code>, you can force your <code>tab menu items</code> to use the full available width.</p>

                                <ul class="nav nav-justified nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#overview1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Overview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Settings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#projects1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Projects
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#support1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Support
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="overview1">
                                        <p class="mb-0">
                                            Get a high-level summary of recent activity, key performance indicators, and important announcements.
                                            Stay informed and make quick decisions based on real-time insights.
                                        </p>
                                    </div>
                                    <div class="tab-pane show active" id="profile1">
                                        <p class="mb-0">
                                            Customize your profile, update personal information, and manage security settings like passwords and 2FA.
                                            Keep your account secure and up to date with your latest details.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="settings1">
                                        <p class="mb-0">
                                            Configure system preferences, theme options, and notification settings. Easily adapt the platform to fit
                                            your workflow and preferences.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="projects1">
                                        <p class="mb-0">
                                            View and manage all ongoing projects, tasks, and milestones. Collaborate with your team and track progress
                                            in real-time.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="support1">
                                        <p class="mb-0">
                                            Need help? Reach out to our support team or browse the help center for common questions, guides, and documentation.
                                        </p>
                                    </div>
                                </div>

                            </div> <!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Tabs Vertical Left</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col-sm-3 mb-2 mb-sm-0&quot;&gt;
                                                &lt;div class=&quot;nav flex-column nav-pills&quot; id=&quot;v-pills-tab&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold active show&quot; id=&quot;v-pills-home-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-home&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home&quot; aria-selected=&quot;true&quot;&gt;
                                                        Overview
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-profile-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-profile&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile&quot; aria-selected=&quot;false&quot;&gt;
                                                        Profile
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-settings-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-settings&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-settings&quot; aria-selected=&quot;false&quot;&gt;
                                                        Settings
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-projects-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-projects&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-projects&quot; aria-selected=&quot;false&quot;&gt;
                                                        Projects
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-support-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-support&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-support&quot; aria-selected=&quot;false&quot;&gt;
                                                        Support
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
        
                                            &lt;div class=&quot;col-sm-9&quot;&gt;
                                                &lt;div class=&quot;tab-content&quot; id=&quot;v-pills-tabContent&quot;&gt;
                                                    &lt;!-- Overview Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade active show&quot; id=&quot;v-pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Profile Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;Name, Email, Phone&lt;/li&gt;
                                                            &lt;li&gt;Change Password&lt;/li&gt;
                                                            &lt;li&gt;Activity logs and preferences&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Settings Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-settings&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-settings-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Projects Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-projects&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-projects-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Support Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-support&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-support-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>           
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                                </p>
                                <div class="row">
                                    <div class="col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link fw-semibold active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                Overview
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                Profile
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                Settings
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-projects-tab" data-bs-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false">
                                                Projects
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-support-tab" data-bs-toggle="pill" href="#v-pills-support" role="tab" aria-controls="v-pills-support" aria-selected="false">
                                                Support
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <!-- Overview Tab -->
                                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <p class="mb-2">Welcome to your dashboard. Get an at-a-glance view of your recent activity, top stats, and personalized suggestions to enhance productivity and stay on track.</p>
                                                <ul>
                                                    <li>View total project status</li>
                                                    <li>Quick links to recent files</li>
                                                    <li>Weekly performance charts</li>
                                                </ul>
                                                <p class="mb-0">Your dashboard is tailored to your activity and roles. Stay informed and always one step ahead.</p>
                                            </div>

                                            <!-- Profile Tab -->
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <p class="mb-2">Manage your personal details, change your profile photo, and update your contact information.</p>
                                                <ul>
                                                    <li>Name, Email, Phone</li>
                                                    <li>Change Password</li>
                                                    <li>Activity logs and preferences</li>
                                                </ul>
                                                <p class="mb-0">Keeping your profile up to date ensures a better and more secure experience.</p>
                                            </div>

                                            <!-- Settings Tab -->
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p class="mb-2">Customize your preferences, notification options, and privacy settings.</p>
                                                <ul>
                                                    <li>Theme selection: Light / Dark mode</li>
                                                    <li>Email & push notification toggles</li>
                                                    <li>Linked accounts and integrations</li>
                                                </ul>
                                                <p class="mb-0">Settings help personalize your interface and improve your workflow efficiency.</p>
                                            </div>

                                            <!-- Projects Tab -->
                                            <div class="tab-pane fade" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
                                                <p class="mb-2">Track all your active, completed, and upcoming projects in one place.</p>
                                                <ul>
                                                    <li>Kanban board and Gantt charts</li>
                                                    <li>Task assignments and deadlines</li>
                                                    <li>Progress indicators and timelines</li>
                                                </ul>
                                                <p class="mb-0">Use collaboration tools, upload documents, and manage deliverables directly from here.</p>
                                            </div>

                                            <!-- Support Tab -->
                                            <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
                                                <p class="mb-2">Need assistance? Access our help center or contact our support team directly.</p>
                                                <ul>
                                                    <li>Browse FAQs and tutorials</li>
                                                    <li>Submit a support ticket</li>
                                                    <li>Live chat with support agents</li>
                                                </ul>
                                                <p class="mb-0">We’re here 24/7 to assist you with anything you need—technical or account-related.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row-->
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Tabs with Colored Navs</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col-sm-9&quot;&gt;
                                                &lt;div class=&quot;tab-content&quot; id=&quot;v-pills-tabContent&quot;&gt;
                                                    &lt;!-- Overview Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade active show&quot; id=&quot;v-pills-home-right&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Profile Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile-right&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;Change Password&lt;/li&gt;
                                                            &lt;li&gt;Activity logs and preferences&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Settings Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-settings-right&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-settings-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Projects Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-projects-right&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-projects-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
        
                                                    &lt;!-- Support Tab --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-support-right&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-support-tab&quot;&gt;
                                                        &lt;p class=&quot;mb-2&quot;&gt;...&lt;/p&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                            &lt;li&gt;...&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
        
                                            &lt;div class=&quot;col-sm-3 mt-2 mt-sm-0&quot;&gt;
                                                &lt;div class=&quot;nav flex-column nav-pills nav-pills-secondary&quot; id=&quot;v-pills-tab&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold active show&quot; id=&quot;v-pills-home-tab-right&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-home-right&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home&quot; aria-selected=&quot;true&quot;&gt;
                                                        Overview
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-profile-tab-right&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-profile-right&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile&quot; aria-selected=&quot;false&quot;&gt;
                                                        Profile
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-settings-tab-right&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-settings-right&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-settings&quot; aria-selected=&quot;false&quot;&gt;
                                                        Settings
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-projects-tab-right&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-projects-right&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-projects&quot; aria-selected=&quot;false&quot;&gt;
                                                        Projects
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;nav-link fw-semibold&quot; id=&quot;v-pills-support-tab-right&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-support-right&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-support&quot; aria-selected=&quot;false&quot;&gt;
                                                        Support
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code - -->

                            <div class="card-body">
                                <p class="text-muted">
                                    You can add the <code>.nav-pills-*</code> class to the <code>.nav</code> element to apply colored pill styles.
                                </p>

                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="tab-content" id="v-pills-tabContent1">
                                            <!-- Overview Tab -->
                                            <div class="tab-pane fade active show" id="v-pills-home-right" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <p class="mb-2">Welcome to your dashboard. Get an at-a-glance view of your recent activity, top stats, and personalized suggestions to enhance productivity and stay on track.</p>
                                                <ul>
                                                    <li>View total project status</li>
                                                    <li>Quick links to recent files</li>
                                                    <li>Weekly performance charts</li>
                                                </ul>
                                                <p class="mb-0">Your dashboard is tailored to your activity and roles. Stay informed and always one step ahead.</p>
                                            </div>

                                            <!-- Profile Tab -->
                                            <div class="tab-pane fade" id="v-pills-profile-right" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <p class="mb-2">Manage your personal details, change your profile photo, and update your contact information.</p>
                                                <ul>
                                                    <li>Name, Email, Phone</li>
                                                    <li>Change Password</li>
                                                    <li>Activity logs and preferences</li>
                                                </ul>
                                                <p class="mb-0">Keeping your profile up to date ensures a better and more secure experience.</p>
                                            </div>

                                            <!-- Settings Tab -->
                                            <div class="tab-pane fade" id="v-pills-settings-right" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p class="mb-2">Customize your preferences, notification options, and privacy settings.</p>
                                                <ul>
                                                    <li>Theme selection: Light / Dark mode</li>
                                                    <li>Email & push notification toggles</li>
                                                    <li>Linked accounts and integrations</li>
                                                </ul>
                                                <p class="mb-0">Settings help personalize your interface and improve your workflow efficiency.</p>
                                            </div>

                                            <!-- Projects Tab -->
                                            <div class="tab-pane fade" id="v-pills-projects-right" role="tabpanel" aria-labelledby="v-pills-projects-tab">
                                                <p class="mb-2">Track all your active, completed, and upcoming projects in one place.</p>
                                                <ul>
                                                    <li>Kanban board and Gantt charts</li>
                                                    <li>Task assignments and deadlines</li>
                                                    <li>Progress indicators and timelines</li>
                                                </ul>
                                                <p class="mb-0">Use collaboration tools, upload documents, and manage deliverables directly from here.</p>
                                            </div>

                                            <!-- Support Tab -->
                                            <div class="tab-pane fade" id="v-pills-support-right" role="tabpanel" aria-labelledby="v-pills-support-tab">
                                                <p class="mb-2">Need assistance? Access our help center or contact our support team directly.</p>
                                                <ul>
                                                    <li>Browse FAQs and tutorials</li>
                                                    <li>Submit a support ticket</li>
                                                    <li>Live chat with support agents</li>
                                                </ul>
                                                <p class="mb-0">We’re here 24/7 to assist you with anything you need—technical or account-related.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 mt-2 mt-sm-0">
                                        <div class="nav flex-column nav-pills nav-pills-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link fw-semibold active show" id="v-pills-home-tab-right" data-bs-toggle="pill" href="#v-pills-home-right" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                Overview
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-profile-tab-right" data-bs-toggle="pill" href="#v-pills-profile-right" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                Profile
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-settings-tab-right" data-bs-toggle="pill" href="#v-pills-settings-right" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                Settings
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-projects-tab-right" data-bs-toggle="pill" href="#v-pills-projects-right" role="tab" aria-controls="v-pills-projects" aria-selected="false">
                                                Projects
                                            </a>
                                            <a class="nav-link fw-semibold" id="v-pills-support-tab-right" data-bs-toggle="pill" href="#v-pills-support-right" role="tab" aria-controls="v-pills-support" aria-selected="false">
                                                Support
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row-->
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Tabs Bordered</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;nav nav-tabs nav-bordered mb-3&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#home-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Home
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#profile-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                    Profile
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#settings-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    Settings
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#about-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    About
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
        
                                        &lt;div class=&quot;tab-content&quot;&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home-b1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile-b1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings-b1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;about-b1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    The navigation item can have a simple bottom border as well. Just specify the class <code>.nav-bordered</code>.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            Settings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            About
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home-b1">
                                        <p class="mb-0">Welcome to our online platform! Here, we strive to offer the best products and services tailored to your lifestyle. Whether you're redecorating your home or looking for expert advice on the latest trends, we've got you covered.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile-b1">
                                        <p class="mb-0">Hi! I am an avid explorer, constantly seeking new adventures and insights. My passions include technology, literature, travel, fitness, and self-development. I enjoy learning new skills and sharing knowledge with others to foster personal growth.</p>
                                    </div>
                                    <div class="tab-pane" id="settings-b1">
                                        <p class="mb-0">Nestled in the heart of the city, a charming cafe offers a peaceful retreat from the urban hustle. Its inviting ambiance, with its cozy decor and warm lighting, provides the perfect setting for relaxation or a productive meeting.</p>
                                    </div>
                                    <div class="tab-pane" id="about-b1">
                                        <p class="mb-0">Our company is dedicated to offering high-quality services and products designed to enrich your life. With a focus on sustainability and innovation, we aim to create lasting value for our customers. Join us on our journey to make everyday living better!</p>
                                    </div>
                                </div>

                            </div> <!--  card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Bordered Tabs with Colored Border</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>
                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;nav nav-tabs nav-justified nav-bordered nav-bordered-danger mb-3&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#home-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-home fs-lg me-md-1 align-middle&quot;&gt;&lt;/i&gt;
                                                    &lt;span class=&quot;d-none d-md-inline-block align-middle&quot;&gt;Home&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#profile-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                    &lt;i class=&quot;ti ti-user-circle fs-lg me-md-1 align-middle&quot;&gt;&lt;/i&gt;
                                                    &lt;span class=&quot;d-none d-md-inline-block align-middle&quot;&gt;Profile&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#settings-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-settings fs-lg me-md-1 align-middle&quot;&gt;&lt;/i&gt;
                                                    &lt;span class=&quot;d-none d-md-inline-block align-middle&quot;&gt;Settings&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#about-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-info-circle fs-lg me-md-1 align-middle&quot;&gt;&lt;/i&gt;
                                                    &lt;span class=&quot;d-none d-md-inline-block align-middle&quot;&gt;About&lt;/span&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
        
                                        &lt;div class=&quot;tab-content&quot;&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home-b2&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile-b2&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings-b2&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;about-b2&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>           
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    You can add the <code>.nav-bordered-*</code> class to the <code>.nav</code> element to apply colored border styles.
                                </p>

                                <ul class="nav nav-tabs nav-justified nav-bordered nav-bordered-danger mb-3">
                                    <li class="nav-item">
                                        <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-home fs-lg me-md-1 align-middle"></i>
                                            <span class="d-none d-md-inline-block align-middle">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <i class="ti ti-user-circle fs-lg me-md-1 align-middle"></i>
                                            <span class="d-none d-md-inline-block align-middle">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-settings fs-lg me-md-1 align-middle"></i>
                                            <span class="d-none d-md-inline-block align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-info-circle fs-lg me-md-1 align-middle"></i>
                                            <span class="d-none d-md-inline-block align-middle">About</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home-b2">
                                        <p class="mb-0">Welcome to our online platform! Our goal is to offer a wide variety of products and services that meet the needs of modern living. From cutting-edge technology to home decor solutions, we ensure that every product enhances your lifestyle and makes your life easier.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile-b2">
                                        <p class="mb-0">Hi there! I'm an avid explorer with a passion for technology, fitness, and continuous learning. I enjoy meeting like-minded individuals and believe in expanding my knowledge on diverse subjects, from the latest gadgets to personal development.</p>
                                    </div>
                                    <div class="tab-pane" id="settings-b2">
                                        <p class="mb-0">In the center of the city stands a quiet, charming bookstore that offers a peaceful retreat. Surrounded by vibrant streets, it provides a calm, inviting atmosphere for readers to lose themselves in books while enjoying a cup of coffee in the cozy corner.</p>
                                    </div>
                                    <div class="tab-pane" id="about-b2">
                                        <p class="mb-0">We are a forward-thinking company focused on creating innovative solutions that empower our customers. Our team is driven by creativity and a passion for delivering exceptional experiences through high-quality products and services that cater to a variety of needs.</p>
                                    </div>
                                </div>

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Icons Tabs</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;nav nav-tabs nav-bordered nav-bordered-success mb-3&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#home-i1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-home fs-22 align-middle&quot;&gt;&lt;/i&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#profile-i1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                    &lt;i class=&quot;ti ti-user fs-22 align-middle&quot;&gt;&lt;/i&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#settings-i1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-settings fs-22 align-middle&quot;&gt;&lt;/i&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#about-i1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-info-circle fs-22 align-middle&quot;&gt;&lt;/i&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#projects-i1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-briefcase fs-22 align-middle&quot;&gt;&lt;/i&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a href=&quot;#contact-i1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                    &lt;i class=&quot;ti ti-mail fs-22 align-middle&quot;&gt;&lt;/i&gt;
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
        
                                        &lt;div class=&quot;tab-content&quot;&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home-i1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile-i1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings-i1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;about-i1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;projects-i1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane&quot; id=&quot;contact-i1&quot;&gt;
                                                &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    The navigation item can have a simple bottom border as well. Just specify the class <code>.nav-bordered</code>.
                                </p>
                                <ul class="nav nav-tabs nav-bordered nav-bordered-success mb-3">
                                    <li class="nav-item">
                                        <a href="#home-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-home fs-22 align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-i1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <i class="ti ti-user fs-22 align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-settings fs-22 align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-info-circle fs-22 align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#projects-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-briefcase fs-22 align-middle"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contact-i1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-mail fs-22 align-middle"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home-i1">
                                        <p class="mb-0">Discover our platform designed to make your daily life easier. From modern interiors to smart home gadgets, our curated selection is tailored for comfort, functionality, and style.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile-i1">
                                        <p class="mb-0">Hello! I’m a creative thinker who thrives on innovation and meaningful connections. I enjoy exploring tech trends, reading insightful books, and traveling to experience new cultures and cuisines.</p>
                                    </div>
                                    <div class="tab-pane" id="settings-i1">
                                        <p class="mb-0">A peaceful workspace can make all the difference. That’s why we offer customizable setups, soundproofing tips, and productivity tools to help you stay focused and inspired every day.</p>
                                    </div>
                                    <div class="tab-pane" id="about-i1">
                                        <p class="mb-0">We’re a team of innovators passionate about creating seamless experiences. Our mission is to deliver solutions that merge design, functionality, and purpose in every project we undertake.</p>
                                    </div>
                                    <div class="tab-pane" id="projects-i1">
                                        <p class="mb-0">Our recent projects range from mobile app development to full-scale branding initiatives. We believe in data-driven strategies paired with creative storytelling to drive results.</p>
                                    </div>
                                    <div class="tab-pane" id="contact-i1">
                                        <p class="mb-0">Have questions or ideas? We'd love to hear from you! Reach out through our contact form, social media, or drop by our office for a chat over coffee.</p>
                                    </div>
                                </div>

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header card-tabs d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Card with Tabs</h4>
                                </div>
                                <ul class="nav nav-tabs nav-justified card-header-tabs nav-bordered">
                                    <li class="nav-item">
                                        <a href="#home-ct" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-home d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Summary</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-ct" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <i class="ti ti-user-circle d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Accounts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings-ct" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="ti ti-settings d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="home-ct">
                                        <p class="mb-0">
                                            Welcome to your financial dashboard. Here, you can monitor real-time updates on your income, expenses, savings, and investments. Our tools are designed to help you make informed decisions and achieve your financial goals faster.
                                        </p>
                                    </div>
                                    <div class="tab-pane show active" id="profile-ct">
                                        <p class="mb-0">
                                            View and manage all your bank accounts, credit cards, and loan details in one place. Link your financial institutions securely and keep track of balances, transactions, and payment schedules with ease.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="settings-ct">
                                        <p class="mb-0">
                                            Customize your preferences including budgeting alerts, currency format, report frequency, and security settings. Enable multi-factor authentication and choose how you'd like to receive account activity notifications.
                                        </p>
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

</body>

</html>