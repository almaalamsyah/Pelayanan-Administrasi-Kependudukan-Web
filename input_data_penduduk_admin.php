<?php
    session_start();
    if (!isset($_SESSION['username_akun'])){
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

    <title>Pendataan Penduduk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom logo -->
    <link rel="icon" href="">

<!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_admin.php">
                <div class="sidebar-brand-icon">
                    <img src="img/Logo.png" class="img-logo">
                </div>
                <div class="sidebar-brand-text mx-3 text">Pelayanan Administrasi Penduduk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
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
            <li class="nav-item active">
                <a class="nav-link" href="view_data_penduduk_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Penduduk</span></a>
            </li>
			<li class="nav-item">
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
            <div id="content">

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
                    <h1 class="h3 mb-4 text-gray-800">Input Data Penduduk</h1>

                    <form autocomplete="off" required="" method="POST" action="input_data_penduduk_admin_action.php">
                        <div class="card-body">
                            <br>
                            <div class="form-group">
                                <label for="exampleInputNik" class="input">Nomor Induk Keluarga</label>
                                <input type="number" class="form-control input" id="exampleInputNik" placeholder="Masukkan NIK" required="" name="nik">
                            <div class="form-group">
                                <label for="exampleInputNama" class="input">Nama</label>
                                <input type="text" class="form-control input" id="exampleInputNama" placeholder="Masukkan Nama" required="" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAgama" class="input">Agama</label>
                                <select class="form-control input" id="sel1" name="agama" id="exampleInputAgama">
                                    <option selected required="" disabled="">-- Pilih Agama --</option>
                                    <option required="">Islam</option>
                                    <option required="">Kristen</option>
                                    <option required="">Hindu</option>
                                    <option required="">Buddha</option>
                                    <option required="">Katholik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGender" class="input">Jenis Kelamin</label>
                                <select class="form-control input" id="sel1" name="gender" id="exampleInputGender">
                                    <option selected required="" disabled="">-- Pilih Jenis Kelamin --</option>
                                    <option required="" value="L">Laki - Laki</option>
                                    <option required="" value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTtl" class="input">TTL</label>
                                <input type="date" class="form-control input" id="exampleInputTtl" required="" name="ttl">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDusun" class="input">Dusun</label>
								<select class="form-control input" name="dusun">
									<option selected required="" disabled="">-- Pilih Dusun --</option>
									<option required="" value="1">Patinggen 1</option>
                                    <option required="" value="2">Patinggen 2</option>
                                    <option required="" value="3">Harjarsik</option>
                                    <option required="" value="4">Sindangratu</option>
									<option required="" value="5">Sindangkerta</option>
								</select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRw" class="input">RW</label>
                                <input type="text" class="form-control input" id="exampleInputRw" placeholder="Masukkan Rw" required="" name="rw">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRt" class="input">RT</label>
                                <input type="text" class="form-control input" id="exampleInputRt" placeholder="Masukkan Rt" required="" name="rt">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPendidikan" class="input">Pendidikan</label>
                                <input type="text" class="form-control input" id="exampleInputPendidikan" placeholder="Masukkan Pendidikan" required="" name="pendidikan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPekerjaan" class="input">Pekerjaan</label>
                                <input type="text" class="form-control input" id="exampleInputPekerjaan" placeholder="Masukkan Pekerjaan" required="" name="pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGol" class="input">Gol Darah</label>
                                <select class="form-control input" id="sel1" name="gol_darah" id="exampleInputGol">
                                    <option selected required="" disabled="">-- Pilih Gol Darah --</option>
                                    <option required="" value="A">A</option>
                                    <option required="" value="B">B</option>
                                    <option required="" value="AB">AB</option>
                                    <option required="" value="O">O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus" class="input">Status</label>
                                <select class="form-control input" id="sel1" name="status" id="exampleInputStatus">
                                    <option selected required="" disabled="">-- Pilih Status --</option>
                                    <option required="">Menikah</option>
                                    <option required="">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary submit" name="submit">Submit</button>
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