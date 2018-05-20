<?php
include "../Koneksi.php";
$Id_Karyawan = $_POST['Id_Karyawan'];
$Nama = $_POST['Nama'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Alamat = $_POST['Alamat'];
$Agama = $_POST['Agama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$query = "INSERT INTO Karyawan VALUES('".$Id_Karyawan."', '".$Nama."', '".$Tanggal_Lahir."', '".$Alamat."', '".$Agama."', '".$Jenis_Kelamin."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: karyawan.php?pesan=Berhasil Tambah");
	}else{
		echo '<center><strong>Mohon Maaf, Data Yang Anda Masukkan Telah Digunakan</strong></center><br>';
		header("location: Karyawan.php?pesan=Gagal");
	}
	?>
