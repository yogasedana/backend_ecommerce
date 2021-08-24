<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <!-- Icon GetBootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <section>
        <div class="topbar transition">
            <div class="bars">
                <button type="button" class="btn transition" id="sidebar-toggle">
                    <i class="las la-bars"></i>
                </button>
            </div>
            <div class="menu">

                <ul>

                    <!-- <li>
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox" title="Dark Or White" />
                                <div class="slider round"></div>
                            </label>
                        </div>
                    </li> -->

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-bell"></i>
                            <span class="badge badge-danger notif">5</span>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown">
                            <div class="dropdown-toggle" id="dropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin!
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownProfile">

                                <a class="dropdown-item" href="profile.html">
                                    <i class="las la-user mr-2"></i> My Profile
                                </a>

                                <a class="dropdown-item" href="activity-log.html">
                                    <i class="las la-list-alt mr-2"></i> Activity Log
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="signin.html">
                                    <i class="las la-sign-out-alt mr-2"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Navbar -->

    <!-- Sidebar And Items-->
    <section>
        <div class="sidebar transition">
            <div class="logo">
                <a href="#">
                    <p>Nama TOKO</p>
                </a>
            </div>

            <!-- Start Menu -->
            <div class="sidebar-items">

                <ul>
                    <!-- Title Header  -->
                    <p class="menu">Navigation</p>

                    <li>
                        <a href="index.html" class="transition active">
                            <i class="las la-home"></i>
                            <span>Dashoard</span>
                        </a>
                    </li>

                    <!-- Title Header  -->
                    <p class="menu">STARTER</p>

                    <li>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#starter-layout" aria-expanded="false">
                            <i class="las la-columns"></i>
                            <span>Layout</span>
                            <i class="las la-angle-down toggle-right"></i>
                        </a>
                        <div class="collapse btn-toggle-submenu" id="starter-layout">

                            <ul class="btn-toggle-nav">
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Tables</a></li>
                            </ul>

                        </div>
                    </li>

                    <li>
                        <a href="index.html" class="transition">
                            <i class="las la-meh-blank"></i>
                            <span>Blank Pages</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#starter-bootstrap" aria-expanded="false">
                            <i class="las la-th"></i>
                            <span>Bootstrap</span>
                            <i class="las la-angle-down toggle-right"></i>
                        </a>
                        <div class="collapse btn-toggle-submenu" id="starter-bootstrap">

                            <ul class="btn-toggle-nav">
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Tables</a></li>
                            </ul>

                        </div>
                    </li>

                    <!-- Title Header  -->
                    <p class="menu">Atrana</p>

                    <li>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            <i class="las la-table"></i>
                            <span>Components</span>
                            <i class="las la-angle-down toggle-right"></i>
                        </a>
                        <div class="collapse btn-toggle-submenu" id="dashboard-collapse">

                            <ul class="btn-toggle-nav">
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Tables</a></li>
                            </ul>

                        </div>
                    </li>



                    <!-- Title Header  -->
                    <p class="menu">Pages</p>


                    <li>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#pages-auth" aria-expanded="false">
                            <i class="las la-user-tie"></i>
                            <span>Auth</span>
                            <i class="las la-angle-down toggle-right"></i>

                        </a>
                        <div class="collapse btn-toggle-submenu" id="pages-auth">

                            <ul class="btn-toggle-nav">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Forgot Password</a></li>
                                <li><a href="#">Reset Password</a></li>
                            </ul>

                        </div>
                    </li>



                    <li>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#pages-Errors" aria-expanded="false">
                            <i class="las la-exclamation-circle"></i>
                            <span>Errors</span>
                            <i class="las la-angle-down toggle-right"></i>
                        </a>
                        <div class="collapse btn-toggle-submenu" id="pages-Errors">

                            <ul class="btn-toggle-nav">
                                <li><a href="#">404</a></li>
                                <li><a href="#">403</a></li>
                                <li><a href="#">401</a></li>
                            </ul>

                        </div>
                    </li>

                    <li>
                        <a href="index.html" class="transition">
                            <i class="las la-pencil-ruler"></i>
                            <span>Credits</span>
                        </a>
                    </li>


                    <!-- Divider -->
                    <hr class="mt-5">

                    <!-- Title Header  -->
                    <p class="mt-1 docs-header">Documentation</p>

                    <li>
                        <a href="index.html" class="transition">
                            <i class="las la-share"></i>
                            <span> Upgrade to PRO</span>
                        </a>
                    </li>

                </ul>

            </div><!-- End Start Menu -->
        </div>
    </section>
    <!-- End Sidebar -->

    <!-- Content -->
    <section>
        <div class="content transition">
            <div class="container-fluid dashboard">
                <h3>Dashboard</h3>

                <div class="row">

                    <?= $this->renderSection('content') ?>

                </div>


            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Footer  -->
    <section>
        <div class="footer transition">
            <p>&copy; <?= date("Y"); ?> All Right Reserved by <a href="">Nama Toko</a></p>
        </div>
    </section>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script JS -->
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>