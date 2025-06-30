<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Images & Avatars']) ?>

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
                <?= $this->element('page_title', ['subtitle' => 'UI', 'title' => 'Images']) ?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Images & Avatars</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    Here are custom examples of images and avatars for your reference.
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Images Shapes</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre class="mb-0">
                                    <code class="language-markup">
                                        &lt;!-- img-fluid --&gt;
                                        &lt;img src=&quot;/images/stock/small-1.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid&quot; /&gt;

                                        &lt;!-- .rounded --&gt;
                                        &lt;img src=&quot;/images/stock/small-2.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid rounded&quot; /&gt;

                                        &lt;!-- .rounded --&gt;
                                        &lt;img src=&quot;/images/users/user-2.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid rounded&quot; width=&quot;120&quot; /&gt;

                                        &lt;!-- .rounded-circle --&gt;
                                        &lt;img src=&quot;/images/users/user-7.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid rounded-circle&quot; width=&quot;120&quot; /&gt;

                                        &lt;!-- .img-thumbnail --&gt;
                                        &lt;img src=&quot;/images/stock/small-5.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid img-thumbnail&quot; /&gt;

                                        &lt;!-- .rounded-circle .img-thumbnail --&gt;
                                        &lt;img src=&quot;/images/users/user-8.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid rounded-circle img-thumbnail&quot; width=&quot;120&quot; /&gt;
                                    </code>

                                    
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    Avatars with different sizes and shapes.
                                </p>

                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <!-- img-fluid -->
                                        <img src="/images/stock/small-1.jpg" alt="image" class="img-fluid">
                                        <p class="mb-0 mt-2">
                                            <code>.img-fluid</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 text-center">
                                        <!-- .rounded -->
                                        <img src="/images/stock/small-2.jpg" alt="image" class="img-fluid rounded">
                                        <p class="mb-0 mt-2">
                                            <code>.rounded</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 text-center">
                                        <!-- .rounded -->
                                        <img src="/images/users/user-2.jpg" alt="image" class="img-fluid rounded" width="120">
                                        <p class="mb-0 mt-2">
                                            <code>.rounded</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 text-center">
                                        <!-- .rounded-circle -->
                                        <img src="/images/users/user-7.jpg" alt="image" class="img-fluid rounded-circle" width="120">
                                        <p class="mb-0 mt-2">
                                            <code>.rounded-circle</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 text-center">
                                        <!-- .img-thumbnail -->
                                        <img src="/images/stock/small-5.jpg" alt="image" class="img-fluid img-thumbnail">
                                        <p class="mb-0 mt-2">
                                            <code>.img-thumbnail</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 text-center">
                                        <!-- .rounded-circle .img-thumbnail -->
                                        <img src="/images/users/user-8.jpg" alt="image" class="img-fluid rounded-circle img-thumbnail" width="120">
                                        <p class="mb-0 mt-2">
                                            <code>.rounded-circle .img-thumbnail</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card body-->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Avatar Sizes</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- .avatar-xs --&gt;
                                        &lt;img src=&quot;/images/users/user-2.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-xs rounded&quot;&gt;

                                        &lt;!-- .avatar-xs --&gt;
                                        &lt;div class=&quot;avatar-xs mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-primary rounded&quot;&gt;
                                                xs
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-xs --&gt;
                                        &lt;div class=&quot;avatar-xs mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-primary-subtle text-primary rounded&quot;&gt;
                                                xs
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-sm --&gt;
                                        &lt;img src=&quot;/images/users/user-3.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-sm rounded&quot;&gt;

                                        &lt;!-- .avatar-sm --&gt;
                                        &lt;div class=&quot;avatar-sm mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-primary rounded&quot;&gt;
                                                sm
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-sm --&gt;
                                        &lt;div class=&quot;avatar-sm mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-primary-subtle text-primary rounded&quot;&gt;
                                                sm
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-md --&gt;
                                        &lt;img src=&quot;/images/users/user-4.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-md rounded&quot;&gt;

                                        &lt;!-- .avatar-md --&gt;
                                        &lt;div class=&quot;avatar-md mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-primary rounded&quot;&gt;
                                                md
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-md --&gt;
                                        &lt;div class=&quot;avatar-md mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-primary-subtle text-primary rounded&quot;&gt;
                                                md
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-lg --&gt;
                                        &lt;img src=&quot;/images/users/user-5.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-lg rounded&quot;&gt;

                                        &lt;!-- .avatar-lg --&gt;
                                        &lt;div class=&quot;avatar-lg mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-primary rounded&quot;&gt;
                                                LG
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-lg --&gt;
                                        &lt;div class=&quot;avatar-lg mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-primary-subtle text-primary rounded&quot;&gt;
                                                LG
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-xl --&gt;
                                        &lt;img src=&quot;/images/users/user-6.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-xl rounded&quot;&gt;

                                        &lt;!-- .avatar-xl --&gt;
                                        &lt;div class=&quot;avatar-xl mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-primary rounded&quot;&gt;
                                                XL
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-xl --&gt;
                                        &lt;div class=&quot;avatar-xl mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-primary-subtle text-primary rounded&quot;&gt;
                                                XL
                                            &lt;/span&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col">
                                        <!-- .avatar-xs -->
                                        <img src="/images/users/user-2.jpg" alt="image" class="img-fluid avatar-xs rounded">
                                        <p class="mt-2">
                                            <code>.avatar-xs</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xs -->
                                        <div class="avatar-xs mx-auto">
                                            <span class="avatar-title text-bg-primary rounded">
                                                xs
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xs</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xs -->
                                        <div class="avatar-xs mx-auto">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                xs
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xs</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-sm -->
                                        <img src="/images/users/user-3.jpg" alt="image" class="img-fluid avatar-sm rounded">
                                        <p class="mt-2">
                                            <code>.avatar-sm</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-sm -->
                                        <div class="avatar-sm mx-auto">
                                            <span class="avatar-title text-bg-primary rounded">
                                                sm
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-sm</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-sm -->
                                        <div class="avatar-sm mx-auto">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                sm
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-sm</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-md -->
                                        <img src="/images/users/user-4.jpg" alt="image" class="img-fluid avatar-md rounded">
                                        <p class="mt-2">
                                            <code>.avatar-md</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-md -->
                                        <div class="avatar-md mx-auto">
                                            <span class="avatar-title text-bg-primary rounded">
                                                md
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-md</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-md -->
                                        <div class="avatar-md mx-auto">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                md
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-md</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-lg -->
                                        <img src="/images/users/user-5.jpg" alt="image" class="img-fluid avatar-lg rounded">
                                        <p class="mt-2">
                                            <code>.avatar-lg</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-lg -->
                                        <div class="avatar-lg mx-auto">
                                            <span class="avatar-title text-bg-primary rounded">
                                                LG
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-lg</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-lg -->
                                        <div class="avatar-lg mx-auto">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                LG
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-lg</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-xl -->
                                        <img src="/images/users/user-6.jpg" alt="image" class="img-fluid avatar-xl rounded">
                                        <p class="mt-2">
                                            <code>.avatar-xl</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xl -->
                                        <div class="avatar-xl mx-auto">
                                            <span class="avatar-title text-bg-primary rounded">
                                                XL
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xl</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xl -->
                                        <div class="avatar-xl mx-auto">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded">
                                                XL
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xl</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card body-->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Avatar Sizes with Rounded</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- .avatar-xs --&gt;
                                        &lt;img src=&quot;/images/users/user-7.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-xs rounded-circle&quot;&gt;

                                        &lt;!-- .avatar-xs --&gt;
                                        &lt;div class=&quot;avatar-xs mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-info rounded-circle&quot;&gt;
                                                xs
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-xs --&gt;
                                        &lt;div class=&quot;avatar-xs mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-info-subtle text-info rounded-circle&quot;&gt;
                                                xs
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-sm --&gt;
                                        &lt;img src=&quot;/images/users/user-8.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-sm rounded-circle&quot;&gt;

                                        &lt;!-- .avatar-sm --&gt;
                                        &lt;div class=&quot;avatar-sm mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-info rounded-circle&quot;&gt;
                                                sm
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-sm --&gt;
                                        &lt;div class=&quot;avatar-sm mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-info-subtle text-info rounded-circle&quot;&gt;
                                                sm
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-md --&gt;
                                        &lt;img src=&quot;/images/users/user-9.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-md rounded-circle&quot;&gt;

                                        &lt;!-- .avatar-md --&gt;
                                        &lt;div class=&quot;avatar-md mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-info rounded-circle&quot;&gt;
                                                md
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-md --&gt;
                                        &lt;div class=&quot;avatar-md mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-info-subtle text-info rounded-circle&quot;&gt;
                                                md
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-lg --&gt;
                                        &lt;img src=&quot;/images/users/user-10.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-lg rounded-circle&quot;&gt;

                                        &lt;!-- .avatar-lg --&gt;
                                        &lt;div class=&quot;avatar-lg mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-info rounded-circle&quot;&gt;
                                                LG
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-lg --&gt;
                                        &lt;div class=&quot;avatar-lg mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-info-subtle text-info rounded-circle&quot;&gt;
                                                LG
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-xl --&gt;
                                        &lt;img src=&quot;/images/users/user-1.jpg&quot; alt=&quot;image&quot; class=&quot;img-fluid avatar-xl rounded-circle&quot;&gt;

                                        &lt;!-- .avatar-xl --&gt;
                                        &lt;div class=&quot;avatar-xl mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title text-bg-info rounded-circle&quot;&gt;
                                                XL
                                            &lt;/span&gt;
                                        &lt;/div&gt;

                                        &lt;!-- .avatar-xl --&gt;
                                        &lt;div class=&quot;avatar-xl mx-auto&quot;&gt;
                                            &lt;span class=&quot;avatar-title bg-info-subtle text-info rounded-circle&quot;&gt;
                                                XL
                                            &lt;/span&gt;
                                        &lt;/div&gt;
                                    </code>      
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col">
                                        <!-- .avatar-xs -->
                                        <img src="/images/users/user-7.jpg" alt="image" class="img-fluid avatar-xs rounded-circle">
                                        <p class="mt-2">
                                            <code>.avatar-xs</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xs -->
                                        <div class="avatar-xs mx-auto">
                                            <span class="avatar-title text-bg-info rounded-circle">
                                                xs
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xs</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xs -->
                                        <div class="avatar-xs mx-auto">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle">
                                                xs
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xs</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-sm -->
                                        <img src="/images/users/user-8.jpg" alt="image" class="img-fluid avatar-sm rounded-circle">
                                        <p class="mt-2">
                                            <code>.avatar-sm</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-sm -->
                                        <div class="avatar-sm mx-auto">
                                            <span class="avatar-title text-bg-info rounded-circle">
                                                sm
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-sm</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-sm -->
                                        <div class="avatar-sm mx-auto">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle">
                                                sm
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-sm</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-md -->
                                        <img src="/images/users/user-9.jpg" alt="image" class="img-fluid avatar-md rounded-circle">
                                        <p class="mt-2">
                                            <code>.avatar-md</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-md -->
                                        <div class="avatar-md mx-auto">
                                            <span class="avatar-title text-bg-info rounded-circle">
                                                md
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-md</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-md -->
                                        <div class="avatar-md mx-auto">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle">
                                                md
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-md</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-lg -->
                                        <img src="/images/users/user-10.jpg" alt="image" class="img-fluid avatar-lg rounded-circle">
                                        <p class="mt-2">
                                            <code>.avatar-lg</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-lg -->
                                        <div class="avatar-lg mx-auto">
                                            <span class="avatar-title text-bg-info rounded-circle">
                                                LG
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-lg</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-lg -->
                                        <div class="avatar-lg mx-auto">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle">
                                                LG
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-lg</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row text-center mt-3">
                                    <div class="col">
                                        <!-- .avatar-xl -->
                                        <img src="/images/users/user-1.jpg" alt="image" class="img-fluid avatar-xl rounded-circle">
                                        <p class="mt-2">
                                            <code>.avatar-xl</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xl -->
                                        <div class="avatar-xl mx-auto">
                                            <span class="avatar-title text-bg-info rounded-circle">
                                                XL
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xl</code>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <!-- .avatar-xl -->
                                        <div class="avatar-xl mx-auto">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle">
                                                XL
                                            </span>
                                        </div>
                                        <p class="mt-2">
                                            <code>.avatar-xl</code>
                                        </p>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card body-->
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Avatar Groups</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Default Group --&gt;
                                        &lt;div class=&quot;avatar-group&quot;&gt;
                                            &lt;div class=&quot;avatar&quot;&gt;
                                                &lt;img src=&quot;/images/users/user-4.jpg&quot; alt=&quot;&quot; class=&quot;rounded-circle avatar-sm&quot;&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar&quot;&gt;
                                                &lt;img src=&quot;/images/users/user-5.jpg&quot; alt=&quot;&quot; class=&quot;rounded-circle avatar-sm&quot;&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar&quot;&gt;
                                                &lt;img src=&quot;/images/users/user-3.jpg&quot; alt=&quot;&quot; class=&quot;rounded-circle avatar-sm&quot;&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar&quot;&gt;
                                                &lt;img src=&quot;/images/users/user-8.jpg&quot; alt=&quot;&quot; class=&quot;rounded-circle avatar-sm&quot;&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar&quot;&gt;
                                                &lt;img src=&quot;/images/users/user-2.jpg&quot; alt=&quot;&quot; class=&quot;rounded-circle avatar-sm&quot;&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Default Group (Soft) --&gt;
                                        &lt;div class=&quot;avatar-group&quot;&gt;
                                            &lt;div class=&quot;avatar avatar-md&quot;&gt;
                                                &lt;span class=&quot;avatar-title text-bg-purple rounded-circle fw-bold&quot;&gt;
                                                    D
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-md&quot;&gt;
                                                &lt;span class=&quot;avatar-title text-bg-primary rounded-circle fw-bold&quot;&gt;
                                                    K
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-md&quot;&gt;
                                                &lt;span class=&quot;avatar-title text-bg-secondary rounded-circle fw-bold&quot;&gt;
                                                    H
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-md&quot;&gt;
                                                &lt;span class=&quot;avatar-title text-bg-warning rounded-circle fw-bold&quot;&gt;
                                                    L
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-md&quot;&gt;
                                                &lt;span class=&quot;avatar-title text-bg-info rounded-circle fw-bold&quot;&gt;
                                                    G
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Default Group (Soft) --&gt;
                                        &lt;div class=&quot;avatar-group&quot;&gt;
                                            &lt;div class=&quot;avatar avatar-lg&quot;&gt;
                                                &lt;span class=&quot;avatar-title bg-purple-subtle text-purple rounded-circle fw-bold shadow&quot;&gt;
                                                    D
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-lg&quot;&gt;
                                                &lt;span class=&quot;avatar-title bg-primary-subtle text-primary rounded-circle fw-bold shadow&quot;&gt;
                                                    K
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-lg&quot;&gt;
                                                &lt;span class=&quot;avatar-title bg-secondary-subtle text-secondary rounded-circle fw-bold shadow&quot;&gt;
                                                    H
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-lg&quot;&gt;
                                                &lt;span class=&quot;avatar-title bg-warning-subtle text-warning rounded-circle fw-bold shadow&quot;&gt;
                                                    L
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;avatar avatar-lg&quot;&gt;
                                                &lt;span class=&quot;avatar-title bg-info-subtle text-info rounded-circle fw-bold shadow&quot;&gt;
                                                    G
                                                &lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <!-- Default Group -->
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <img src="/images/users/user-4.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-5.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-3.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-8.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-2.jpg" alt="" class="rounded-circle avatar-sm">
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-xl-3">
                                        <!-- Default Group (Soft) -->
                                        <div class="avatar-group">
                                            <div class="avatar avatar-md">
                                                <span class="avatar-title text-bg-purple rounded-circle fw-bold">
                                                    D
                                                </span>
                                            </div>
                                            <div class="avatar avatar-md">
                                                <span class="avatar-title text-bg-primary rounded-circle fw-bold">
                                                    K
                                                </span>
                                            </div>
                                            <div class="avatar avatar-md">
                                                <span class="avatar-title text-bg-secondary rounded-circle fw-bold">
                                                    H
                                                </span>
                                            </div>
                                            <div class="avatar avatar-md">
                                                <span class="avatar-title text-bg-warning rounded-circle fw-bold">
                                                    L
                                                </span>
                                            </div>
                                            <div class="avatar avatar-md">
                                                <span class="avatar-title text-bg-info rounded-circle fw-bold">
                                                    G
                                                </span>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-xl-3">
                                        <!-- Default Group (Soft) -->
                                        <div class="avatar-group">
                                            <div class="avatar avatar-lg">
                                                <span class="avatar-title bg-purple-subtle text-purple rounded-circle fw-bold shadow">
                                                    D
                                                </span>
                                            </div>
                                            <div class="avatar avatar-lg">
                                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fw-bold shadow">
                                                    K
                                                </span>
                                            </div>
                                            <div class="avatar avatar-lg">
                                                <span class="avatar-title bg-secondary-subtle text-secondary rounded-circle fw-bold shadow">
                                                    H
                                                </span>
                                            </div>
                                            <div class="avatar avatar-lg">
                                                <span class="avatar-title bg-warning-subtle text-warning rounded-circle fw-bold shadow">
                                                    L
                                                </span>
                                            </div>
                                            <div class="avatar avatar-lg">
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fw-bold shadow">
                                                    G
                                                </span>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-xl-3">
                                        <!-- Default Group (Soft) -->
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <img src="/images/users/user-10.jpg" alt="" class="rounded-circle avatar-xl">
                                            </div>
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title text-bg-info rounded-circle fs-xl fw-bold">
                                                    D
                                                </span>
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-7.jpg" alt="" class="rounded-circle avatar-xl">
                                            </div>
                                            <div class="avatar">
                                                <img src="/images/users/user-1.jpg" alt="" class="rounded-circle avatar-xl">
                                            </div>
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title fs-xl text-bg-danger rounded-circle fw-bold">
                                                    9+
                                                </span>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                            </div> <!-- end card body-->
                        </div>
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