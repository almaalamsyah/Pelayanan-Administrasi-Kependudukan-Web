<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
        	$id_pengajuan = $_POST['id_pengajuan'];
            $catatan = $_POST['catatan'];

            $simpanData = mysqli_query($conn, "UPDATE  pengajuan SET catatan = '$catatan' WHERE id_pengajuan = '$id_pengajuan'");
            header("location: view_data_pengajuan_belum.php?update=success");
    }
?>