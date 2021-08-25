<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - Atrana</title>

    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- LineAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

</head>

<body>

    <!-- Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <div class="menu">

            <ul>

                <li>
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" title="Dark Or White" />
                            <div class="slider round"></div>
                        </label>
                    </div>
                </li>

                <li>
                    <a href="notifications.html" class="transition">
                        <i class="las la-bell"></i>
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

    </div>
    <!-- End Topbar -->

    <!-- Sidebar And Items-->
    <div class="sidebar transition">
        <div class="logo">
            <a href="#">
                <p>Atutorial.my.id</p>
            </a>
        </div>

        <!-- Start Menu -->
        <div class="sidebar-items">

            <ul>
                <!-- Title Header  -->
                <p class="menu">Navigation</p>

                <li>
                    <a href="#" class="transition active">
                        <i class="bi bi-shop"></i>
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
                    <a href="#" class="transition">
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
                    <a href="#" class="transition">
                        <i class="las la-pencil-ruler"></i>
                        <span>Credits</span>
                    </a>
                </li>


                <!-- Divider -->
                <hr class="mt-5">

                <!-- Title Header  -->
                <p class="mt-1 docs-header">Documentation</p>

                <li>
                    <a href="#" class="transition">
                        <i class="las la-share"></i>
                        <span> Upgrade to PRO</span>
                    </a>
                </li>


            </ul>



        </div><!-- End Start Menu -->
    </div>
    <!-- End Sidebar -->

    <!-- Sidebar overlay-->
    <div class="sidebar-overlay"></div>


    <!-- Start Content -->
    <div class="content transition">
        <div class="container-fluid dashboard">
            <h3>Dashboard</h3>

            <div class="row">

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="las la-inbox bg-danger text-light"></i>
                                </div>
                                <div class="col-8">
                                    <p>Revenue</p>
                                    <h5>$65</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="las la-clipboard-list bg-warning text-light"></i>
                                </div>
                                <div class="col-8">
                                    <p>Orders</p>
                                    <h5>3000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="las la-chart-bar bg-success text-light"></i>
                                </div>
                                <div class="col-8">
                                    <p>Sales</p>
                                    <h5>5500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="las la-id-card bg-info text-light"></i>
                                </div>
                                <div class="col-8">
                                    <p>Employes</p>
                                    <h5>256</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End  Start Content -->



    <!-- Footer  -->
    <div class="footer transition">
        <p>&copy; 2020 All Right Reserved by <a href="">Atrana</a></p>
    </div>
    <!-- End Footer -->

    <!--Jquery-3.5.1 Js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Script Js -->
    <script src="script.js"></script>

</body>

</html>