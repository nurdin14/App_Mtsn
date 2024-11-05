<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SI-Asrama</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dataTables.dataTables.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.min.css"> -->

    <style>
        .sidebar-bg {
            background-color: #2c3e50;
        }

        .menu-item .menu-link {
            color: #ecf0f1;
        }

        .menu-item .menu-link:hover {
            color: #ecf0f1;
            background-color: #fdfdfd54;
            border-radius: 5px;
        }

        .menu-item.activ .menu-link {
            background-color: #e84118;
            color: #ecf0f1;
            border-radius: 5px;
        }
    </style>
    <!-- Helpers -->
    <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/js/config.js') ?>"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical sidebar-bg ">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-text menu-text fw-bold" style="font-size: 14pt; color: #ecf0f1;">SI-Asrama</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item activ">
                        <a href="<?= site_url('dashboard/index') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>
                    <!-- Recruitment -->
                    <li class="menu-item">
                        <a href="<?= site_url('santri/index') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-voice"></i>
                            <div data-i18n="Recruitment">Data Santri</div>
                        </a>
                    </li>
                    <!-- Master Data -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user-plus"></i>
                            <div data-i18n="Dashboards">Data Guru</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= site_url('pengurus/index') ?>" class="menu-link">
                                    <div data-i18n="Position">Pengurus</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('pengajar/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Pengajar</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-money"></i>
                            <div data-i18n="Dashboards">Pembayaran</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= site_url('pembayaran/index') ?>" class="menu-link">
                                    <div data-i18n="Position">Tagihan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('bayar/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Pembayaran</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('slip/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Slip Pembayaran</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('rekapSpp/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Rekap SPP</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('rekapMakan/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Rekap Uang Makan</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-edit"></i>
                            <div data-i18n="Dashboards">Kas</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= site_url('pemasukan/index') ?>" class="menu-link">
                                    <div data-i18n="Position">Pemasukan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('pengeluaran/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Pengeluaran</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('rekap/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Rekap Kas</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Dashboards">Kas Makan</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= site_url('PemasukanMakan/index') ?>" class="menu-link">
                                    <div data-i18n="Position">Pemasukan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('PengeluaranMakan/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Pengeluaran</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('RekapKasMakan/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Rekap Kas</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Dashboards">Kas SPP</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= site_url('PemasukanSpp/index') ?>" class="menu-link">
                                    <div data-i18n="Position">Pemasukan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('PengeluaranSpp/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Pengeluaran</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('RekapKasSpp/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Rekap Kas</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-bank"></i>
                            <div data-i18n="Dashboards">Dana Saving</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= site_url('PemasukanSaving/index') ?>" class="menu-link">
                                    <div data-i18n="Position">Pemasukan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('PengeluaranSaving/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Pengeluaran</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url('RekapSaving/index') ?>" class="menu-link">
                                    <div data-i18n="Divisi">Rekap Kas</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="<?= site_url('account/index') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Recruitment">Settings Accounts</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?= base_url() ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?= base_url() ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block"><?= $this->session->userdata('username') ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= site_url('login/logout') ?>">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                        </li>
                        <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->