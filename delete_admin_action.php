<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

	$id_akun = $_GET['id_akun'];
	$tidak = 1;

	if ($id_akun == $tidak) {
		header("location: view_sekretaris.php?delete=error");
	}
	else{
		$result = mysqli_query($conn, "DELETE FROM akun WHERE id_akun='$id_akun'");

		header("location: view_admin.php?delete=success");
	}

?>