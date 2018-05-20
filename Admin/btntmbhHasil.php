<?php
include "../Koneksi.php";
$No = $_POST['No'];
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
$query = "INSERT INTO hasil_produksi VALUES('".$No."', '".$Tanggal."', '".$Roti_Burger."', '".$Donat."', '".$Kue_Bolu."', '".$Roti_Gulung."', '".$Roti_Kasur."', '".$Roti_Kepang."', '".$Roti_Mocca."', '".$Roti_Tawar_Manis."', '".$Roti_Tawar_Kulit."', '".$Roti_Tawar_Kipas."', '".$Roti_Sisa."', '".$Hasil_Produksi."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: Hasil.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Hasil.php?pesan=Gagal");
	}
	?>
