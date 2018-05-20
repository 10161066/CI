<?php
include "../Koneksi.php";
$Kd_Omset = $_GET['Kd_Omset'];
$query = "SELECT * FROM omset WHERE Kd_Omset='".$Kd_Omset."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM omset WHERE Kd_Omset='$Kd_Omset'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Omset.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Omset.php'>Kembali</a>";
}
?>
