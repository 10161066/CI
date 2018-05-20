<?php
include "../Koneksi.php";
$No = $_POST['No'];
$Tanggal = $_GET['Tanggal'];
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
$query = "SELECT * FROM hasil_produksi WHERE Tanggal='".$Tanggal."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE hasil_produksi SET No='".$No."', Tanggal='".$Tanggal."', Roti_Burger='".$Roti_Burger."', Donat='".$Donat."',Kue_bolu='".$Kue_bolu."', Roti_Gulung='".$Roti_Gulung."', Roti_Kasur='".$Roti_Kasur."', Roti_Kepang='".$Roti_Kepang."', Roti_Mocca='".$Roti_Mocca."'
		, Roti_Tawar_Manis='".$Roti_Tawar_Manis."', Roti_Tawar_Kulit='".$Roti_Tawar_Kulit."', Roti_Tawar_Kipas='".$Roti_Tawar_Kipas."', Roti_Sisa='".$Roti_Sisa."', Hasil_Produksi='".$Hasil_Produksi."' WHERE Tanggal='".$Tanggal."'";
	  $sql = mysqli_query($conn, $query);
		header("location: Hasil.php?pesan=Berhasil Ubah");
		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnHasil.php'>Kembali Ke Form</a>";
?>
