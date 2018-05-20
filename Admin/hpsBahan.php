<?php
include "../Koneksi.php";
$Kd_Penggunaan_Bahan = $_GET['Kd_Penggunaan_Bahan'];
$query = "SELECT * FROM penggunaan_bahan WHERE Kd_Penggunaan_Bahan='".$Kd_Penggunaan_Bahan."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM penggunaan_bahan WHERE Kd_Penggunaan_Bahan='$Kd_Penggunaan_Bahan'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Bahan.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Bahan.php'>Kembali</a>";
}
?>
