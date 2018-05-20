<?php
include "../Koneksi.php";
$Kd_Laporan = $_POST['Kd_Laporan'];
$Id_Karyawan = $_POST['Id_Karyawan'];
$Kd_Omset = $_POST['Kd_Omset'];
$Tanggal = $_POST['Tanggal'];
$Modal = $_POST['Modal'];
$Pemasukan = $_POST['Pemasukan'];
$Pengeluaran = $_POST['Pengeluaran'];
$Omset = $_POST['Omset'];
$query = "INSERT INTO laporan_harian VALUES('".$Kd_Laporan."','".$Id_Karyawan."', '".$Kd_Omset."', '".$Tanggal."', '".$Modal."', '".$Pemasukan."', '".$Pengeluaran."', '".$Omset."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: Laporan.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Laporan.php?pesan=Gagal");
	}
	?>
