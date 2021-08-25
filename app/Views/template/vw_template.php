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
    <section>
        <nav class="navbar navbar-expand-lg navbar-light nav-color">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Nama Toko</a>
                <div class="d-flex flex-row-reverse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary position-relative">
                                <i class="bi bi-bell"></i>
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                            <!-- <span class="badge badge-danger notif">5</span> -->
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nama Admin
                            </a>
                            <ul class="dropdown-menu float-start" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar -->
    <!-- <section>
        <div class="topbar transition">
            <div class="bars">
                <button type="button" class="btn transition" id="sidebar-toggle">
                    <i class="las la-bars"></i>
                </button>
            </div>
            <div class="menu">

                <ul>

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
    </section> -->
    <!-- End Navbar -->

    <!-- Sidebar And Items-->
    <section>
        <div class="sidebar">

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

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-shop"></i>
                            <span>Chat</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-shop"></i>
                            <span>Diskusi</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-shop"></i>
                            <span>Produk</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-shop"></i>
                            <span>Penjualan</span>
                        </a>
                    </li>

                    <!-- Title Header  -->
                    <p class="menu">Barang</p>

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-shop"></i>
                            <span>Tambah Stok Barang</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition">
                            <i class="bi bi-shop"></i>
                            <span>Pembayaran</span>
                        </a>
                    </li>

                </ul>

            </div><!-- End Start Menu -->
        </div>
    </section>
    <!-- End Sidebar -->

    <!-- Content -->
    <section>
        <div class="content">
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