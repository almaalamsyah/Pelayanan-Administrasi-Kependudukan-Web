<?php
    require 'koneksi.php';

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];


            $akses = 'admin';

            $result= mysqli_query($conn, "SELECT username_akun FROM akun WHERE username_akun='$username'");
            $data = mysqli_fetch_array($result);
            $ha = $data['username_akun'];

            if ($username == $ha) {
                header("location: input_admin.php?input=ready");
            }

            else {
            	$simpanData = mysqli_query($conn, "INSERT INTO akun VALUES ('','$nama','$username','$password','$akses')");
            	header("location: input_admin.php?input=success");
            }
            
    }
?>