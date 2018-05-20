<?php
include "../Koneksi.php";
$Tanggal = $_GET['Tanggal'];
$query = "SELECT * FROM hasil_produksi WHERE Tanggal='".$Tanggal."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM hasil_produksi WHERE Tanggal='$Tanggal'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Hasil.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Hasil.php'>Kembali</a>";
}
?>
