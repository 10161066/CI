<?php
include "../Koneksi.php";
$Id_Karyawan = $_GET['Id_Karyawan'];
$Nama = $_POST['Nama'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Alamat = $_POST['Alamat'];
$Agama = $_POST['Agama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$query = "SELECT * FROM karyawan WHERE Id_Karyawan='".$Id_Karyawan."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE karyawan SET Id_Karyawan='".$Id_Karyawan."', Nama='".$Nama."', Tanggal_Lahir='".$Tanggal_Lahir."', Alamat='".$Alamat."', Agama='".$Agama."', Jenis_Kelamin='".$Jenis_Kelamin."'WHERE Id_Karyawan='".$Id_Karyawan."'";
	$sql = mysqli_query($conn, $query);
		header("location: Karyawan.php?pesan=Berhasil Ubah");

		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnKaryawan.php'>Kembali Ke Form</a>";
?>
