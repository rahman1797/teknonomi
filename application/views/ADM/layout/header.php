
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Teknonomi Admin Dashboard</title>

    <link rel="icon" href="<?php echo base_url('assets/ADM_TEMP/favicon.ico')?>" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/bootstrap-select/css/bootstrap-select.css')?>" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')?>" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')?>" rel="stylesheet" />

   <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- Summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('assets/ADM_TEMP/css/themes/all-themes.css')?>" rel="stylesheet" />



    <style type="text/css">
      #round {
        border-radius: 12px;
      }

      .round_edge {
        border-radius: 12px; 
      }
    </style>

</head>

<body class="theme-red">

    <?php if ($_SESSION['logged_in'] != 'Done') {
        Redirect(base_url('ADM/Login'));
    } ?>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="CARI BERKAS...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-bottom: 0">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <div class="navbar-brand">TEKNONOMI DASHBOARD ADMIN </div> 

            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('assets/ADM_TEMP/images/DefaultUser.jpg')?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                     
                        <?php echo $_SESSION['nama']; ?>        
                    
                    </div>
                    <div class="email">
                            
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right" id="round">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('ADM/logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGASI UTAMA</li>
                    <li class="active">
                        <a href="<?php echo base_url('ADM') ?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ADM/listUser') ?>">
                            <i class="material-icons">group</i>
                            <span>Daftar User</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list</i>
                            <span>Daftar Post</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Banner</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('ADM/listArtikel') ?>">Artikel</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list</i>
                            <span>Registrasi Sistem</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('ADM/listUser')  ?>">Kategori</a>
                            </li>
                        </ul>
                    </li>

                    <li class="header">HISTORY</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="container-fluid">
             
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
                    <div class="demo-settings">
                        <p>PENGATURAN</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>