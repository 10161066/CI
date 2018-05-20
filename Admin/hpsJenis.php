<?php
include "../Koneksi.php";
$Kd_Jenis = $_GET['Kd_Jenis'];
$query = "SELECT * FROM jenis_produksi WHERE Kd_Jenis='".$Kd_Jenis."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM jenis_produksi WHERE Kd_Jenis='$Kd_Jenis'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Jenis.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Jenis.php'>Kembali</a>";
}
?>
