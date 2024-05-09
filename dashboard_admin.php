<?php
    session_start();
    if (!isset($_SESSION['username_akun'])){
		header("location:index.php");
	}
    require "koneksi.php";
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

    <style>
        .img-logo{
            width: 45px;
            height: 45px;
        }
        .img-size{
            max-width: 90%;
            height: 500px;
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
            <li class="nav-item active">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION['username_akun']; ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="space_d">
                        <div class="alert alert-info alert-dismissible div1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            Selamat Datang <strong><?php echo $_SESSION['username_akun']; ?></strong>
                        </div>
                    </div>

                    <div class="space_d">
						<div class="div1">
							<table class="tabel2" border="0">
								<tr>
									<td class="a3">
										<div>
											<center>
												<img class="d-block w-100 img-size" src="img/profil.jpg" alt="First slide" class="responsivee" />
											</center>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
							</table>
						</div>
                        <div class="div1">
                            <table class="tabel2" border="0">
                                <tr>
                                    <td class="a3">
                                        <div>
                                            <center>
                                                <div class="alert alert-dark alert-dismissible div1">
                                                    <p class="para">
                                                        Desa Karangpawitan merupakan salah satu desa dari 14 (empat belas)
														Desa yang ada di Kecamatan Padaherang Kabupaten Pangandaran, merupakan
														desa yang berbatasan Timur Desa Paledah, Selatan dengan Karangsari dan
														Padaherang, Utara Cibogo dan kedungwuluh dan barat dengan Desa Padaherang.
														Desa Karangpawitan merupakan salah satu desa pemekaran dari Desa
														Padaherang. Nama Karangpawitani diambil dari dua kata dalam bahasa sunda,
														Secara Etimologi yaitu Karang dan Pawitan yang berarti Kampung/Desa dan
														Permulaan/Mengawali. Sehingga arti Karangpawitan adalah <b>“Desa Permulaan
														atau Desa yang mengawali atau Desa Pelopor atau desa yang penuh dengan
														Kebaruan (Inovasi)”</b>. 
                                                    </p>
                                                </div>
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">

                                            <div class="col-lg-6">

                                                <!-- Dropdown Card Example -->
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3 flex-row align-items-center justify-content-between bg-primary">
                                                        <h6 class="m-0 font-weight-bold text-light">Visi</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <p class="para">
                                                            “Dengan Iman Dan Taqwa Memujudkan
															Masyarakat Desa Karangpawitan Dengan Kekuatan Gotong Royong Yang
															Religius, Mandiri Dan Berdaya Saing Menuju Kehidupan Madani”.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-6">

                                                <!-- Dropdown Card Example -->
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3  flex-row align-items-center justify-content-between bg-primary">
                                                        <h6 class="m-0 font-weight-bold text-light">Misi</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <ul>
                                                            <li style="text-align: justify;">
                                                                Mengembangkan kehidupan masyarakat yang menjunjung tinggi nilainilai keimanan dan ketaqwaan.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Menerapkan nilai-nilai toleransi dalam kehidupan sosial kemasyarakatan,
																gotong royong dan keagamaan.
                                                            </li>
                                                            <li style="text-align: justify;">
																Mengembangkan, Menerapkan, dan mempertahankan nilai-nilai budaya
																dalam kehidupan masyarakat
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Mempercepat pembangunan Inprastruktur strategis (Jalan, Sekolah,
																Jaringan Listrik, Sumber Daya Air) untuk menunjang kegiatan pendidikan,
																ekonomi, kesehatan dan budaya sesuai potensi daya dukung lingkungan.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan daya usaha ekonomi produktif yang berbasis sumber daya
																lokal dan berkelanjutan.
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Meningkatkan kualitas dan kuantitas SDM melalui Pendidikan
                                                            </li>
                                                            <li style="text-align: justify;">
                                                                Mengoptimalkan sistem keamanan lingkungan dalam mewujudkan stabilitas keamanan.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
						<div class="div1">
							<footer class="sticky-footer">
								<div class="container my-auto">
									<div class="copyright text-center my-auto">
										<span>Copyright &copy; Kantor Desa Karangpawitan</span>
									</div>
								</div>
							</footer>
						</div>
					</div>
				</div>
            </div>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>