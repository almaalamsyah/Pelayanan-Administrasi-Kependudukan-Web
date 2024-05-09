<?php
    session_start();
    if (!isset($_SESSION['nik'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pelayanan Administrasi Penduduk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom logo -->
    <link rel="icon" href="img/Logo.png">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <style>
        .img-logo{
            width: 45px;
            height: 45px;
        }
        .img-size{
            max-width: 100%;
            height: 430px;
        }
        .t{
            padding-bottom: 130px;
        }
        .T{
            padding-bottom: 35px;
        }
        .img{
            background-image: url("img/a.jpg");

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary samping sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_admin.php">
                <div class="sidebar-brand-icon">
                <img src="img/Logo.png" class="img-logo">
                </div>
                <div class="sidebar-brand-text mx-3 text">Pelayanan Administrasi Penduduk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="pelayanan.php">
                    <i class="fas fa-fw"></i>
                    <span>Pelayanan</span></a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="pengajuan.php">
                    <i class="fas fa-fw"></i>
                    <span>Hasil Pengajuan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nik']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
					<?php   
						require 'koneksi.php';					
						$nik = $_SESSION['nik'];
                        $result1= mysqli_query($conn, "SELECT * FROM data_penduduk INNER JOIN dusun ON data_penduduk.id_dusun=dusun.id_dusun WHERE nik = '$nik'");
                        $row1=mysqli_fetch_array($result1);
                     ?>   
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Pengajuan Surat Keterangan Usaha</h1>

                    <form autocomplete="off" required="" enctype="multipart/form-data" method="POST" action="input_pengajuan_action.php?surat=2">
                        <div class="card-body">
                            <br>
                            <div class="form-group">
                                <strong><i class='fas fa-user mr-1'></i> Nik</strong>
                                <p class='text-muted' name="nik">
									<?php  echo $row1['nik'] ?>
									<input type="hidden" name="nik" value="<?php echo $row1['nik'] ?>">
                                </p>
								<hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas fa-user mr-1'></i> Nama</strong>
                                <p class='text-muted'>
									<?php  echo $row1['nama'] ?>
                                </p>
								<hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas fa-pray mr-1'></i> Agama</strong>
                                <p class='text-muted'>
									<?php  echo $row1['agama'] ?>
                                </p>
								<hr>
                            </div>
							<div class="form-group">
                                <strong><i class='fas fa-venus-mars mr-1'></i> Jenis Kelamin</strong>
                                <p class='text-muted'>
									<?php  echo $row1['gender'] ?>
                                </p>
								<hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas fa-smile mr-1'></i> TTL</strong>
                                <p class='text-muted'>
									<?php  echo $row1['ttl'] ?>
                                </p>
								<hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas fa-map-marker-alt mr-1'></i> Dusun</strong>
                                <p class='text-muted'>
                                    <?php  echo $row1['nama_dusun'] ?>
                                </p>
                                <hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas fa-map-marker-alt mr-1'></i>RW/RT</strong>
                                <p class='text-muted'>
                                    <?php  echo $row1['rw'].'/'.$row1['rt'] ?>
                                </p>
                                <hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas mr-1'></i> KTP</strong><br>
                                <input type="file" name="foto_ktp">
                                <hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas mr-1'></i> KK</strong><br>
                                <input type="file" name="foto_kk">
                                <hr>
                            </div>
                            <div class="form-group">
                                <strong><i class='fas mr-1'></i> Akta Kelahiran</strong><br>
                                <input type="file" name="foto_akta">
                                <hr>
                            </div>
                        </div>
                        <input type="hidden" name="tgl" value="<?php echo date("y-m-d"); ?>">
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary submit" name="submit">Ajukan</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kantor Desa Karangpawitan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar dari halaman ini</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout untuk keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="action_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>