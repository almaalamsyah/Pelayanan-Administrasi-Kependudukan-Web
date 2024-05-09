<?php
    session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

    require('koneksi.php');

    $nik = $_GET['nik'];
    $id_surat = $_GET['id_surat'];
	$i=$_SESSION['username_akun'];
    $dataUbah = mysqli_query($conn, "SELECT * FROM pengajuan WHERE nik='$nik' AND id_jenis_surat='$id_surat'");

    $data = mysqli_fetch_assoc($dataUbah);
	$res = mysqli_query($conn, "SELECT * FROM akun WHERE username_akun='$i'");
    $cel = mysqli_fetch_assoc($res);
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_super.php">
                <div class="sidebar-brand-icon">
                    <img src="img/Logo.png" class="img-logo">
                </div>
                <div class="sidebar-brand-text mx-3 text">Pelayanan Administrasi Penduduk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard_admin.php">
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
            <li class="nav-item">
                <a class="nav-link" href="view_data_penduduk_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Penduduk</span></a>
            </li>
			<li class="nav-item active">
                <a class="nav-link" href="view_data_pengajuan_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Pengajuan</span></a>
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
            <div id="content" class="tengah">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light img bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h4  style="margin-left: 32%; margin-top: 1%;"> D E S A  &nbsp;&nbsp; K A R A N G P A W I T A N</h4>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username_akun']; ?></span>
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Update Data Pengajuan</h1>

                    <form autocomplete="off" required="" method="POST" action="update_pengajuan_action.php">
                        <div class="card-body">
                            <br>
							<div class="form-group">
                                <label for="exampleInputid" class="input">Id Pengajuan</label>
                                <input type="number" class="form-control input" id="exampleInputid" required="" name="id_pengajuan" value="<?php echo $data['id_pengajuan']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNik" class="input">Nik</label>
                                <input type="number" class="form-control input" id="exampleInputNik" required="" name="nik" value="<?php echo $data['nik']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTgl" class="input">Tanggal Pengajuan</label>
                                <input type="text" class="form-control input" id="exampleInputTgl" required="" name="tgl" value="<?php echo $data['tgl_pengajuan']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSurat" class="input">Jenis Surat</label>
                                <input type="text" class="form-control input" id="exampleInputSurat" required="" name="surat" value="<?php 
									switch ($data['id_jenis_surat']) {
										case 1:
											echo "Surat keterangan tidak mampu";
											break;
										case 2:
											echo "Surat keterangan usaha";
											break;
										case 3:
											echo "Surat permohonan KTP";
											break;
										case 4:
											echo "Surat permohonan KK";
											break;
										case 5:
											echo "Surat permohonan pindah";
											break;
									}
								?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTtd" class="input">Catatan</label>
                                <input type="text" class="form-control input" id="exampleInputTtd" required="" name="catatan" value="">
                            </div>
                        </div>
                        <!-- /.card-body -->
						<input type="hidden" name="id_akun" value="<?php echo $cel['id_akun'] ?>">
                        <div class="card-footer tengah">
                            <button type="submit" class="btn btn-primary submit" name="submit">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer tengah">
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda ingin keluar dari halaman ini.</div>
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