<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
        	$id_akun = $_POST['id_akun'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $ha = admin;

            $simpanData = mysqli_query($conn, "UPDATE akun SET nama_akun='$nama',username_akun='$username',password_akun='$password',akses='$ha' where id_akun='$id_akun'");
            header("location: view_admin.php?update=success");
    }
?>