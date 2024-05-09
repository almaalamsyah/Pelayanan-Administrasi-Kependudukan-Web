<?php
    require('koneksi.php');

    $nik = $_GET['nik'];

    $data1 = mysqli_query($conn, "SELECT * FROM data_penduduk INNER JOIN dusun ON data_penduduk.id_dusun=dusun.id_dusun WHERE nik='$nik'");
    $cetak1 = mysqli_fetch_assoc($data1);
    $data2 = mysqli_query($conn, "SELECT * FROM kepala_desa");
    $cetak2 = mysqli_fetch_assoc($data2);
    ?>
    <head>
    <title>Pelayanan Administrasi Penduduk</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom logo -->
    <link rel="icon" href="">
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
            margin-top: 1%;
        }

        #judul2{
            text-align:center;
            margin-top: -3%;
        }

        #halaman{
            width: 90%; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }
        .logosurat{
            width: 70%;
        }
        .kop1{
            width: 15%;
        }
        .kop2{
            width: 85%;
            font-size: 120%;
            padding-top: 2%;
        }
        .tb_cetak{
            border: 2px solid black;
            border-top-width: 0;
            border-left-width: 0;
            border-right-width: 0;
        }
        .bold{
            font-size: 120%;
        }
        .para{
            text-indent: 45px;
            text-align: justify;
        }

    </style>

    </head>

    <body>
        <div id=halaman>
            <table class="tb_cetak" border="0" width="100%" height="140px">
                <tr>
                    <td class="kop1">
                    <center>
                        <img class="logosurat" src="img/Logo.png">
                    </center>
                    </td>
                    <td class="kop2">
                    <center>
                    <b class="bold"> PEMERINTAH KABUPATEN PANGANDARAN<br>
                        KECAMATAN  PADAHERANG<br>
                        DESA KARANGPAWITAN<br></b>
                        Alamat : Jalan Paledah No. 79 Tlp. ( 0265 ) …………. Karangpawitan PADAHERANG 46384<br>
                    </center>
                    </td>
                </tr>
            </table>
            <h3 id=judul><u>SURAT KETERANGAN USAHA</u></h3>
            <p id=judul2>Nomor : 500 /           - Desa / 2023</p>
            <br>

            <p  class="para">Yang bertanda tangan di bawah ini Kepala Desa Karangpawitan Kecamatan Padaherang Kabupaten Pangandaran, menerangkan kepada  :</p>

            <table>
                <tr>
                    <td style="width: 61.5%;">Nama</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['nama']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Tempat/Tanggal Lahir</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['ttl']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%; vertical-align: top;">Jenis Kelamin</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;">
                    <?php 
                        if ($cetak1['gender'] == "L") {
                            echo "Laki-laki";
                        }
                        else if ($cetak1['gender'] == "P") {
                            echo "Perempuan";
                        }
                         ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 55%;">NIK</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['nik']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%; vertical-align: top;">Agama</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['agama']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Status</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['status']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Pekerjaan</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <td style="width: 55%;">Dusun</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['nama_dusun']; ?></td>
                </tr>
				<tr>
                    <td style="width: 55%;">Rw</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['rw']; ?></td>
                </tr>
				<tr>
                    <td style="width: 55%;">Rt</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $cetak1['rt']; ?></td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <p  class="para">Bahwa nama tersebut di atas, adalah benar penduduk yang berdomisili di <?php echo $cetak1['nama_dusun']; ?>, RW <?php echo $cetak1['rw']; ?>, RT <?php echo $cetak1['rt']; ?> 
			Desa Karangpawitan Kecamatan Padaherang, dan yang bersangkutan mempunyai suatu usaha. Usaha tersebut sampai saat ini tetap berjalan lancar.</p>

            <p  class="para">Demikian surat keterangan ini dibuat dengan benar untuk digunakan sebagaimana perlunya.</p>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div style="width: 40%; text-align: left; float: right;">Karangpawitan, <?php echo date("d-M-Y"); ?></div><br>
            <div style="width: 40%; text-align: left; float: right;">Kepala Desa Karangpawitan</div><br>
            <div style="width: 35%; text-align: left; float: right;"><img class="ttd" src="img/<?php echo $cetak2['ttd_kepala_desa']; ?>" style="width: 50%;"></div>
			<br><br><br><br>
            <div style="width: 33%; text-align: left; float: right;"><b><?php echo $cetak2['nama_kepala_desa']; ?></b></div>

        </div>
        <!-- Coding Print -->
        <script>
            window.print();
        </script>
    </body>