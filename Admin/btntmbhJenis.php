<?php
include "../Koneksi.php";
$Kd_Jenis = $_POST['Kd_Jenis'];
$Id_Karyawan = $_POST['Id_Karyawan'];
$Id_Produk = $_POST['Id_Produk'];
$Kd_PenggunaanBahan = $_POST['Kd_PenggunaanBahan'];
$Tanggal = $_POST['Tanggal'];
$Roti_Burger = $_POST['Roti_Burger'];
$Donat = $_POST['Donat'];
$Kue_Bolu = $_POST['Kue_Bolu'];
$Roti_Gulung = $_POST['Roti_Gulung'];
$Roti_Kasur = $_POST['Roti_Kasur'];
$Roti_Kepang = $_POST['Roti_Kepang'];
$Roti_Mocca = $_POST['Roti_Mocca'];
$Roti_Tawar_Manis = $_POST['Roti_Tawar_Manis'];
$Roti_Tawar_Kulit = $_POST['Roti_Tawar_Kulit'];
$Roti_Tawar_Kipas = $_POST['Roti_Tawar_Kipas'];
$Roti_Sisa = $_POST['Roti_Sisa'];
$Hasil_Produksi = $_POST['Hasil_Produksi'];
$query = "INSERT INTO jenis_produksi VALUES('".$Kd_Jenis."','".$Id_Karyawan."','".$Id_Produk."','".$Kd_PenggunaanBahan."', '".$Tanggal."', '".$Roti_Burger."', '".$Donat."', '".$Kue_Bolu."', '".$Roti_Gulung."', '".$Roti_Kasur."', '".$Roti_Kepang."', '".$Roti_Mocca."', '".$Roti_Tawar_Manis."', '".$Roti_Tawar_Kulit."', '".$Roti_Tawar_Kipas."', '".$Roti_Sisa."', '".$Hasil_Produksi."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: Jenis.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Jenis.php?pesan=Gagal");
	}
	?>
