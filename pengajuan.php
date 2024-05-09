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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
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
            <li class="nav-item">
                <a class="nav-link" href="pelayanan.php">
                    <i class="fas fa-fw"></i>
                    <span>Pelayanan</span></a>
            </li>
			<li class="nav-item active">
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
                <nav class="navbar navbar-expand navbar-light bg-white img topbar mb-4 static-top shadow">

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
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4 class=" mb-0 text-gray-800">Hasil Pengajuan</h4>
                    </div>
                    <div class="input_down">
                                <?php 
                                if(isset($_GET['update'])){
                                    if($_GET['update'] == "success"){
                                        echo "
                                            <center>
                                            <div class='alert alert-success alert-dismissible div4'>
                                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                                <strong>Data berhasil diperbarui</strong>
                                            </div>
                                            <center>
                                        ";
                                    }
                                }
                                ?>
                    </div>

                    <br>

                    <!-- Content Row -->
                    <div class="card-body">
                <table id="example11" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Pengajuan Belum Disetujui</th>
						</tr>
                        <tr>
                            <th style="text-align: center ;">Surat</th>
                            <th style="text-align: center ;">Keterangan</th>
                        </tr>
					</thead>
					<tbody>
					<?php
                      require ('koneksi.php');
                      $nik=$_SESSION['nik'];
                      $result= mysqli_query($conn,"SELECT * FROM pengajuan LEFT JOIN pelayanan ON pengajuan.id_pengajuan = pelayanan.id_pengajuan
																							WHERE (pelayanan.id_pengajuan IS NULL AND nik='$nik')");
					  while ($data = mysqli_fetch_array($result)){
                    ?>
                    <tr>
						<td style="text-align: center ;">
                            <a href="<?php echo "pengajuan_belum_disetujui.php?nik=".$data['nik']."&id_surat=".$data['id_jenis_surat']; ?>" data-toggle="tooltip"> 
							<?php 
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
							?>
						</td>
                        <td style="text-align: center ;"><?= $data['catatan']; ?></></</td>
					</tr>
					<?php
						}
					?>
                  </tbody>
                </table>
				<table id="example11" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Pengajuan Telah Disetujui</th>
						</tr>
					</thead>
					<tbody>
					<?php
                      require ('koneksi.php');
					  $result1= mysqli_query($conn, "SELECT * from pelayanan INNER JOIN pengajuan ON pelayanan.id_pengajuan=pengajuan.id_pengajuan WHERE nik='$nik'");
					  while ($data1 = mysqli_fetch_array($result1)){
                    ?>
                    <tr>
						<td style="text-align: center ;">
                            <a href="<?php echo "pengajuan_info.php?id=".$data1['id_pengajuan']; ?>" data-toggle="tooltip"> 
							<?php 
								switch ($data1['id_jenis_surat']) {
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
							?>
						</td>
					</tr>
					<?php
						}
					?>
                  </tbody>
                </table>
                </div>
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