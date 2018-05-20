<?php
include "../Koneksi.php";
$Id_Produk = $_GET['Id_Produk'];
$Kd_Omset = $_POST['Kd_Omset'];
$Nama_Produk = $_POST['Nama_Produk'];
$Harga_Produk = $_POST['Harga_Produk'];
$Satuan = $_POST['Satuan'];
$Modal = $_POST['Modal'];
$query = "SELECT * FROM harga_produk WHERE Id_Produk='".$Id_Produk."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE harga_produk SET Id_Produk='".$Id_Produk."', Kd_Omset='".$Kd_Omset."', Nama_Produk='".$Nama_Produk."', Harga_Produk='".$Harga_Produk."', Satuan='".$Satuan."', Modal='".$Modal."'WHERE Id_Produk='".$Id_Produk."'";
	$sql = mysqli_query($conn, $query);
		header("location: Harga.php?pesan=Berhasil Ubah");

		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnHarga.php'>Kembali Ke Form</a>";
?>
