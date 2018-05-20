<?php
include "../Koneksi.php";
$Kd_Omset = $_POST['Kd_Omset'];
$Tanggal = $_POST['Tanggal'];
$Sales1 = $_POST['Sales1'];
$Sales2 = $_POST['Sales2'];
$Sales3 = $_POST['Sales3'];
$Toko = $_POST['Toko'];
$Omset = $_POST['Omset'];
$query = "INSERT INTO omset VALUES('".$Kd_Omset."','".$Tanggal."', '".$Sales1."', '".$Sales2."', '".$Sales3."', '".$Toko."', '".$Omset."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: Omset.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Omset.php?pesan=Gagal");
	}
	?>
