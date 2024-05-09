<?php
    require 'koneksi.php';
	$nik = $_GET['nik'];
	$id = $_GET['id'];
	switch ($id) {
		case 1:
			echo "<script> 
					document.location.href = 'cetak_surat_tdk_mampu.php?nik=$nik';
				  </script>";
			break;
		case 2:
			echo "<script> 
					document.location.href = 'cetak_surat_usaha.php?nik=$nik';
				  </script>";
			break;
		case 3:
			echo "<script> 
					document.location.href = 'cetak_surat_ktp.php?nik=$nik';
				  </script>";
			break;
		case 4:
			echo "<script> 
					document.location.href = 'cetak_surat_kk.php?nik=$nik';
				  </script>";
		case 5:
			echo "<script> 
					document.location.href = 'cetak_surat_pindah.php?nik=$nik';
				  </script>";
			break;
	}
?>