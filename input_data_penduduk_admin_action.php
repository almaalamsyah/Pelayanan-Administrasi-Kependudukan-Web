<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $gender = $_POST['gender'];
            $ttl = $_POST['ttl'];
            $dusun = $_POST['dusun'];
            $rw = $_POST['rw'];
            $rt = $_POST['rt'];
            $pendidikan = $_POST['pendidikan'];
            $pekerjaan = $_POST['pekerjaan'];
            $gol_darah = $_POST['gol_darah'];
            $status = $_POST['status'];

            $simpanData = mysqli_query($conn, "INSERT INTO data_penduduk VALUES ('$nik','$nama','$agama','$gender','$ttl','$dusun','$rw','$rt','$pendidikan','$pekerjaan','$gol_darah', '$status')") or die(mysqli_error($conn));
            
            header("location: all_data_admin.php?input=success");
            
            // if ($gender == "L" && $status == "Menikah") {
                // $simpanData = mysqli_query($conn, "
				// INSERT INTO data_penduduk VALUES ('$nik','$kk','$nama','$agama','$gender','$ttl',
				// '$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$tgl_pindah','$riwayat','$ha')");

                // $simpanData2 = mysqli_query($conn, "
				// INSERT INTO data_kepala_keluarga VALUES ('$nik','$kk','$nama','$agama','$gender','$ttl',
				// '$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$tgl_pindah','$ha')");
            
            //     header("location: all_data_admin.php?input=success");
            // }

            // else {
            //    $simpanData3 = mysqli_query($conn, "
			//    INSERT INTO data_penduduk VALUES ('$nik','$kk','$nama','$agama','$gender','$ttl',
            //    '$dusun','$alamat','$pendidikan','$pekerjaan','$gol_darah','$no_telp','$status','$kategori','$tgl_pindah','$riwayat','$ha')");
            //     header("location: all_data_admin.php?input=success");
            // }  
    }
?>