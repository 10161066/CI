<?php
include "../Koneksi.php";
$Kd_Penggunaan_Bahan = $_GET['Kd_Penggunaan_Bahan'];
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
$query = "SELECT * FROM penggunaan_bahan WHERE Kd_Penggunaan_Bahan='".$Kd_Penggunaan_Bahan."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE penggunaan_bahan SET Kd_Penggunaan_Bahan='".$Kd_Penggunaan_Bahan."', Id_Karyawan='".$Id_Karyawan."', Tanggal='".$Tanggal."', Tepung='".$Tepung."', Mentega_Kuning='".$Mentega_Kuning."', Mentega_Putih='".$Mentega_Putih."', Telur='".$Telur."',Susu_Cair='".$Susu_Cair."', Susu_Bubuk='".$Susu_Bubuk."', Calcium='".$Calcium."', Butter='".$Butter."', Pelembut='".$Pelembut."'
		, Ragi='".$Ragi."', Gula='".$Gula."', Garam='".$Garam."', Air_Mineral='".$Air_Mineral."', Gas_LPG='".$Gas_LPG."', Cokelat='".$Cokelat."', Keju='".$Keju."', Puratos='".$Puratos."', Mocca='".$Mocca."', Mentega_Refill='".$Mentega_Refill."', Stock='".$Stock."' WHERE Kd_Penggunaan_Bahan='".$Kd_Penggunaan_Bahan."'";
	  $sql = mysqli_query($conn, $query);
		header("location: Bahan.php?pesan=Berhasil Ubah");
		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnBahan.php'>Kembali Ke Form</a>";
?>
