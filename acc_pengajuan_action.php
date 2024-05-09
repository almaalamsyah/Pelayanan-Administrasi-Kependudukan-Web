<?php
    require 'koneksi.php';
    session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }
    $nik = $_GET['nik'];
    $id_surat = $_GET['id_surat'];
    $user=$_SESSION['username_akun'];
    $query = mysqli_query($conn,"SELECT * FROM akun WHERE username_akun = '$user'");
    $data = mysqli_fetch_assoc($query);
    $id_akun = $data['id_akun'];


    $nik = $_GET['nik'];
    $ress = mysqli_query($conn, "SELECT * FROM pengajuan WHERE nik='$nik' AND id_jenis_surat='$id_surat'");
    $data1 = mysqli_fetch_array($ress);
    $id_pengajuan = $data1['id_pengajuan'];
    $tidak = 1;

    $result = mysqli_query($conn, "INSERT INTO pelayanan (id_pengajuan, id_akun) VALUES ('$id_pengajuan', '$id_akun')");

    header("location: view_data_pengajuan_belum.php?acc=success");


    
?>