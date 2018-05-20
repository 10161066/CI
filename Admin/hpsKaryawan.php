<?php
include "../Koneksi.php";
$Id_Karyawan = $_GET['Id_Karyawan'];
$query = "SELECT * FROM karyawan WHERE Id_Karyawan='".$Id_Karyawan."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM karyawan WHERE Id_Karyawan='$Id_Karyawan'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Karyawan.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Karyawan.php'>Kembali</a>";
}
?>
