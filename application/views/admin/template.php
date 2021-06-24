<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Do Ponic</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
    .swal2-popup {
        font-size: 1.6rem !important;
    }
    </style>

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>D</b>PC</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>do</b>Ponic</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?=base_url()?>assets/gambar/user/<?=$this->fungsi->user_login()->foto?>"
                                    class="user-image" alt="User Image">
                                <span class="hidden-xs"><?=ucfirst($this->fungsi->user_login()->username)?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?=base_url()?>assets/gambar/user/<?=$this->fungsi->user_login()->foto?>"
                                        class="img-circle" alt="User Image">

                                    <p>
                                        <?=ucfirst($this->fungsi->user_login()->nama)?> - Do Ponic
                                        <small>Asik Bertani</small>
                                    </p>
                                </li>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?=site_url('user_dashboard')?>" class="btn btn-default btn-flat">User
                                    Dashboard</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?=base_url()?>assets/gambar/user/<?=$this->fungsi->user_login()->foto?>"
                            class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?=site_url('dashboard')?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('artikel')?>">
                            <i class="fa fa-sticky-note"></i> <span>Artikel</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('barang')?>">
                            <i class="fa fa-archive"></i> <span>Barang</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('supplier')?>">
                            <i class="fa fa-truck"></i> <span>Supplier</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('kotakmasuk')?>">
                            <i class="fa fa-inbox"></i> <span>Pesan</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('invoice')?>">
                            <i class="fa fa-folder-open"></i> <span>Invoice</span>
                            </span>
                        </a>
                    </li>

                    <li class="header">SETTING</li>
                    <li><a href="<?=site_url('users')?>"><i class="fa fa-user"></i><span>Users</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021 <a href="#">Do Ponic</a>.</strong> All rights
            reserved.
        </footer>

    </div>

    <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?=base_url()?>assets/dist/js/sweet/sweetalert2.all.min.js"></script>

    <script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#table1').DataTable()
    })

    var flash = $('#flash').data('flash');
    var flush = $('#flush').data('flush');
    if (flash) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: flash
        })
    }
    if (flush) {
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: flush
        })
    }

    $(document).on('click', '#btn-hapus', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: 'Apakah anda yakin',
            text: "Data akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        })
    })
    </script>

</body>

</html>