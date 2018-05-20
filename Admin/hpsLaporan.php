<?php
include "../Koneksi.php";
$Kd_Laporan = $_GET['Kd_Laporan'];
$query = "SELECT * FROM laporan_harian WHERE Kd_Laporan='".$Kd_Laporan."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM laporan_harian WHERE Kd_Laporan='$Kd_Laporan'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Laporan.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Laporan.php'>Kembali</a>";
}
?>
