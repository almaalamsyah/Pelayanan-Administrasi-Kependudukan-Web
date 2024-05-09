<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $ttd = $_FILES['ttd']['name'];
            $angka_acak     = rand(1,999);
            $ttd1 = $angka_acak."-ttd-".$ttd;

            $result= mysqli_query($conn, "SELECT nama_kepala_desa FROM kepala_desa WHERE nama_kepala_desa='$nama'");
            $data = mysqli_fetch_array($result);
            $ha = $data['nama_kepala_desa'];

            if ($nama == $ha) {
                header("location: input_kepala_desa.php?input=ready");
            }

            else {
            	$simpanData = mysqli_query($conn, "INSERT INTO kepala_desa (nama_kepala_desa, ttd_kepala_desa) VALUES ('$nama','$ttd1')");
                move_uploaded_file($_FILES['ttd']['tmp_name'], "img/".$ttd1);
            	header("location: input_kepala_desa.php?input=success");
            }
            
    }
?>