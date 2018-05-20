<?php
include "../Koneksi.php";
$Kd_Jenis = $_GET['Kd_Jenis'];
$Id_Karyawan = $_POST['Id_Karyawan'];
$Id_Produk = $_POST['Id_Produk'];
$Kd_PenggunaanBahan = $_POST['Kd_PenggunaanBahan'];
$Tanggal = $_POST['Tanggal'];
$Roti_Burger = $_POST['Roti_Burger'];
$Donat = $_POST['Donat'];
$Kue_bolu = $_POST['Kue_bolu'];
$Roti_Gulung = $_POST['Roti_Gulung'];
$Roti_Kasur = $_POST['Roti_Kasur'];
$Roti_Kepang = $_POST['Roti_Kepang'];
$Roti_Mocca = $_POST['Roti_Mocca'];
$Roti_Tawar_Manis = $_POST['Roti_Tawar_Manis'];
$Roti_Tawar_Kulit = $_POST['Roti_Tawar_Kulit'];
$Roti_Tawar_Kipas = $_POST['Roti_Tawar_Kipas'];
$Roti_Sisa = $_POST['Roti_Sisa'];
$Hasil_Produksi = $_POST['Hasil_Produksi'];
$query = "SELECT * FROM jenis_produksi WHERE Kd_Jenis='".$Kd_Jenis."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE jenis_produksi SET Kd_Jenis='".$Kd_Jenis."', Id_Karyawan='".$Id_Karyawan."', Id_Produk='".$Id_Produk."', Kd_PenggunaanBahan='".$Kd_PenggunaanBahan."', Tanggal='".$Tanggal."', Roti_Burger='".$Roti_Burger."', Donat='".$Donat."',Kue_bolu='".$Kue_bolu."', Roti_Gulung='".$Roti_Gulung."', Roti_Kasur='".$Roti_Kasur."', Roti_Kepang='".$Roti_Kepang."', Roti_Mocca='".$Roti_Mocca."'
		, Roti_Tawar_Manis='".$Roti_Tawar_Manis."', Roti_Tawar_Kulit='".$Roti_Tawar_Kulit."', Roti_Tawar_Kipas='".$Roti_Tawar_Kipas."', Roti_Sisa='".$Roti_Sisa."', Hasil_Produksi='".$Hasil_Produksi."' WHERE Kd_Jenis='".$Kd_Jenis."'";
	  $sql = mysqli_query($conn, $query);
		header("location: Jenis.php?pesan=Berhasil Ubah");
		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnJenis.php'>Kembali Ke Form</a>";
?>
