<?php
    require 'koneksi.php';
        if (isset($_POST['submit'])) {
			$tgl = $_POST['tgl'];
            $nik = $_POST['nik'];
			$surat = $_GET['surat'];
			$filename_akt = $_FILES['foto_akta']['name'];
			$filename_ktp = $_FILES['foto_ktp']['name'];
			$filename_kk = $_FILES['foto_kk']['name'];
			$angka_acak     = rand(1,999);
			$nama1 = $angka_acak."-akta-".$filename_akt;
			$nama2 = $angka_acak."-ktp-".$filename_ktp;
			$nama3 = $angka_acak."-kk-".$filename_kk;
			$catatan = 'Proses Pengecekkna';

			$cek = mysqli_query($conn, "SELECT * FROM pengajuan WHERE nik='$nik'");
			$row = mysqli_num_rows($cek);
			$sel = mysqli_fetch_assoc($cek);


			if ($row > 0 ){
				if ($sel['id_jenis_surat'] == $surat){
					echo "
					<script>
						alert('Kamu Sudah Mengajuakan');
						document.location='pelayanan.php';
					</script>";
				}else{
 					// Simpan ke Database
					$query = mysqli_query($conn, "INSERT INTO pengajuan (tgl_pengajuan, gambar_ktp, gambar_kk, gambar_akta, nik, id_jenis_surat, catatan) VALUES ('$tgl','$nama2', '$nama3','$nama1', '$nik','$surat','$catatan')");
					// Simpan di Folder Gambar
					move_uploaded_file($_FILES['foto_akta']['tmp_name'], "gambar/".$nama1);
					move_uploaded_file($_FILES['foto_ktp']['tmp_name'], "gambar/".$nama2);
					move_uploaded_file($_FILES['foto_kk']['tmp_name'], "gambar/".$nama3);
					echo "
						<script>
							alert('Berhasil mengajukan');
							document.location='pelayanan.php';
						</script>";
	       		}
			}else{
 					// Simpan ke Database
					$query = mysqli_query($conn, "INSERT INTO pengajuan (tgl_pengajuan, gambar_ktp, gambar_kk, gambar_akta, nik, id_jenis_surat, catatan) VALUES ('$tgl','$nama2', '$nama3','$nama1', '$nik','$surat','$catatan')");
					// Simpan di Folder Gambar
					move_uploaded_file($_FILES['foto_akta']['tmp_name'], "gambar/".$nama1);
					move_uploaded_file($_FILES['foto_ktp']['tmp_name'], "gambar/".$nama2);
					move_uploaded_file($_FILES['foto_kk']['tmp_name'], "gambar/".$nama3);
					echo "
						<script>
							alert('Berhasil mengajukan');
							document.location='pelayanan.php';
						</script>";
			}
		}
?>