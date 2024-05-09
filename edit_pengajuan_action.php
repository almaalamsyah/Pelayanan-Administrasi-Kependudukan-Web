<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
        	$id_pengajuan = $_POST['id_pengajuan'];
			$filename_akt = $_FILES['foto_akta']['name'];
			$filename_ktp = $_FILES['foto_ktp']['name'];
			$filename_kk = $_FILES['foto_kk']['name'];
			$angka_acak     = rand(1,999);
			$nama1 = $angka_acak."-akta-".$filename_akt;
			$nama2 = $angka_acak."-ktp-".$filename_ktp;
			$nama3 = $angka_acak."-kk-".$filename_kk;

            $simpanData = mysqli_query($conn, "UPDATE  pengajuan SET gambar_ktp = '$nama2', gambar_kk = '$nama3', gambar_akta = '$nama1' WHERE id_pengajuan = '$id_pengajuan'");
            move_uploaded_file($_FILES['foto_akta']['tmp_name'], "gambar/".$nama1);
			move_uploaded_file($_FILES['foto_ktp']['tmp_name'], "gambar/".$nama2);
			move_uploaded_file($_FILES['foto_kk']['tmp_name'], "gambar/".$nama3);
			header("location: pengajuan.php?update=success");
    }
?>