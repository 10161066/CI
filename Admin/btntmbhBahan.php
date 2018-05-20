<?php
include "../Koneksi.php";
$Kd_Penggunaan_Bahan = $_POST['Kd_Penggunaan_Bahan'];
$Id_Karyawan = $_POST['Id_Karyawan'];
$Tanggal = $_POST['Tanggal'];
$Tepung = $_POST['Tepung'];
$Mentega_Kuning = $_POST['Mentega_Kuning'];
$Mentega_Putih = $_POST['Mentega_Putih'];
$Telur = $_POST['Telur'];
$Susu_Cair = $_POST['Susu_Cair'];
$Susu_Bubuk = $_POST['Susu_Bubuk'];
$Calcium = $_POST['Calcium'];
$Butter = $_POST['Butter'];
$Pelembut = $_POST['Pelembut'];
$Ragi = $_POST['Ragi'];
$Gula = $_POST['Gula'];
$Garam = $_POST['Garam'];
$Air_Mineral = $_POST['Air_Mineral'];
$Gas_LPG = $_POST['Gas_LPG'];
$Cokelat = $_POST['Cokelat'];
$Keju = $_POST['Keju'];
$Puratos = $_POST['Puratos'];
$Mocca = $_POST['Mocca'];
$Mentega_Refill = $_POST['Mentega_Refill'];
$Stock = $_POST['Stock'];
$query = "INSERT INTO penggunaan_bahan VALUES('".$Kd_Penggunaan_Bahan."', '".$Id_Karyawan."', '".$Tanggal."', '".$Tepung."', '".$Mentega_Kuning."', '".$Mentega_Putih."', '".$Telur."', '".$Susu_Cair."', '".$Susu_Bubuk."', '".$Calcium."', '".$Butter."', '".$Pelembut."', '".$Ragi."', '".$Gula."', '".$Garam."', '".$Air_Mineral."', '".$Gas_LPG."', '".$Cokelat."', '".$Keju."', '".$Puratos."', '".$Mocca."', '".$Mentega_Refill."', '".$Stock."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: Bahan.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Bahan.php?pesan=Gagal");
	}
	?>
