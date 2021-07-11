<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>SISTEM PERPUSTAKAAN - KEMAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

    <!-- third party css -->
    <link href="<?=base_url()?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="<?=base_url()?>assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="<?=base_url()?>assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="<?=base_url()?>assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="<?=base_url()?>assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

   

    <!-- icons -->
    <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?=base_url()?>assets/img/kemal.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                <?=$this->session->userdata('NamaPustakawan')?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome Kemal !</h6>
                            </div>
                            
                            
                            
                            <div class="dropdown-divider"></div>

                            <a href="<?=base_url('Login/keluar')?>" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Keluar</span>
                            </a>
                            
                        </div>
                    </li>
                    
                    
                    
                </ul>
                
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <!-- <img src="<?=base_url()?>assets/images/logo-sm.png" alt="" height="22"> -->
                            <span class="logo-lg-text-light">SISPUS</span>
                        </span>
                        <span class="logo-lg">
                            <!-- <img src="<?=base_url()?>assets/images/logo-dark.png" alt="" height="20"> -->
                            <span class="logo-lg-text-light">SISPUS</span>
                        </span>
                    </a>
                    
                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <!-- <img src="<?=base_url()?>assets/images/logo-sm.png" alt="" height="22"> -->
                            <span class="logo-lg-text-light">SISPUS</span>
                        </span>
                        <span class="logo-lg">
                            <!-- <img src="<?=base_url()?>assets/images/logo-light.png" alt="" height="20"> -->
                            <span class="logo-lg-text-light">SISPUS</span>
                        </span>
                    </a>
                </div>
                
                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>   
                    
                    
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <div class="topnav shadow-lg">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="<?=base_url('Home')?>" class="nav-link">
                                    <i class="fas fa-home"></i>
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?=base_url('Pustakawan')?>" class="nav-link">
                                    <i class="fas fa-user"></i>
                                    Pustakawan
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?=base_url('Anggota')?>" class="nav-link">
                                    <i class="fas fa-users"></i>
                                    Anggota
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?=base_url('Pustaka')?>" class="nav-link">
                                    <i class="fas fa-book"></i>
                                    Pustaka
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?=base_url('Transaksi')?>" class="nav-link">
                                    <i class="fas fa-book"></i>
                                    Transaksi
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?=base_url('About')?>" class="nav-link">
                                    <i class="fas fa-info"></i>
                                    About
                                </a>
                            </li>

                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe-airplay mr-1"></i> Dashboards <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                        <a href="index.html" class="dropdown-item">Dashboard 1</a>
                                        <a href="dashboard-2.html" class="dropdown-item">Dashboard 2</a>
                                        <a href="dashboard-3.html" class="dropdown-item">Dashboard 3</a>
                                        <a href="dashboard-4.html" class="dropdown-item">Dashboard 4</a>
                                    </div>
                                </li> -->

                                
                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title"><?=(isset($title)) ? $title : '' ?></h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <?=($this->session->flashdata('message') !='') ? $this->session->flashdata('message') : '' ?>
                        <?=(isset($contents)) ? $contents : '' ?>
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2021 &copy; Kemal El Faraouk
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        
        <!-- Vendor js -->
        <script src="<?=base_url()?>assets/js/vendor.min.js"></script>

        <script src="<?=base_url()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/js/app.min.js"></script>
        <?php (isset($load_js)) ? $this->load->view($load_js) : '' ?>
    </body>
    </html>