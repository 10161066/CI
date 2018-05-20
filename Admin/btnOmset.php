<?php
include "../Koneksi.php";
$Kd_Omset = $_GET['Kd_Omset'];
$Tanggal = $_POST['Tanggal'];
$Sales1 = $_POST['Sales1'];
$Sales2 = $_POST['Sales2'];
$Sales3 = $_POST['Sales3'];
$Toko = $_POST['Toko'];
$Omset = $_POST['Omset'];
$query = "SELECT * FROM Omset WHERE Kd_Omset'".$Kd_Omset."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE Omset SET Kd_Omset='".$Kd_Omset."', Tanggal='".$Tanggal."', Sales1='".$Sales1."', Sales2='".$Sales2."', Sales3='".$Sales3."', Toko='".$Toko."', Omset='".$Omset."'WHERE Kd_Omset='".$Kd_Omset."'";
	$sql = mysqli_query($conn, $query);
		header("location: Omset.php?pesan=Berhasil Ubah");

		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnOmset.php'>Kembali Ke Form</a>";
?>
