<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

	$id_akun = $_GET['nik'];
	$id_surat = $_GET['id_surat'];
	$tidak = 1;

	if ($id_akun == $tidak) {
		header("location: view_data_pengajuan_belum.php?delete=error");
	}
	else{
		$result = mysqli_query($conn, "DELETE FROM pengajuan WHERE nik='$id_akun' AND id_jenis_surat='$id_surat'");

		header("location: view_data_pengajuan_belum.php?delete=success");
	}

?>