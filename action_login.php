<?php

    require 'koneksi.php';

    if(isset($_POST['submit'])){

        // mengambil isian dari form login
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn,"select * FROM akun WHERE username_akun = '$username' AND password_akun = '$password'");
        $row = mysqli_num_rows($query);
        $sel = mysqli_fetch_assoc($query);
		$query2 = mysqli_query($conn,"select * FROM data_penduduk WHERE nik = '$username' AND nama = '$password'");
        $row2 = mysqli_num_rows($query2);
        $sel2 = mysqli_fetch_assoc($query2);

        if ($row > 0) {
			session_start();
			if($sel['akses']=="super"){
				$_SESSION['username_akun'] = $username;
				$_SESSION['akses'] = 'super';
				echo "
					<script> 
						alert ('Login Berhasil Super Admin');
						document.location.href = 'dashboard_super.php';
					</script>";
			}else if($sel['akses']=="admin"){
				$_SESSION['username_akun'] = $username;
				$_SESSION['akses'] = "admin";
				echo "
					<script> 
						alert ('Login Berhasil Admin');
						document.location.href = 'dashboard_admin.php';
					</script>";
			}else{
				echo "
					<script>
						alert ('Login Gagal');
						document.location.href = 'index.php';
					</script>";
            }
		}elseif ($row2 > 0) {
			session_start();
			$_SESSION['nik'] = $username;
			echo "
				<script> 
					alert ('Login Berhasil Penduduk');
					document.location.href = 'dashboard.php';
				</script>";
		}else{
			echo "
				<script>
					alert ('Login Gagal');
					document.location.href = 'index.php';
				</script>";
        }
	}
?>