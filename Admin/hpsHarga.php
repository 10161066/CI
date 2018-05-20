<?php
include "../Koneksi.php";
$Id_Produk = $_GET['Id_Produk'];
$query = "SELECT * FROM harga_produk WHERE Id_Produk='".$Id_Produk."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM harga_produk WHERE Id_Produk='$Id_Produk'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: Harga.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='Harga.php'>Kembali</a>";
}
?>
