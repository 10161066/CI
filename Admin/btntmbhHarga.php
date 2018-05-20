<?php
include "../Koneksi.php";
$Id_Produk = $_POST['Id_Produk'];
$Kd_Omset = $_POST['Kd_Omset'];
$Nama_Produk = $_POST['Nama_Produk'];
$Harga_Produk = $_POST['Harga_Produk'];
$Satuan = $_POST['Satuan'];
$Modal = $_POST['Modal'];
$query = "INSERT INTO harga_produk VALUES('".$Id_Produk."', '".$Kd_Omset."', '".$Nama_Produk."', '".$Harga_Produk."', '".$Satuan."', '".$Modal."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: Harga.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Harga.php?pesan=Gagal");
	}
	?>
