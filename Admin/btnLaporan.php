<?php
include "../Koneksi.php";
$Kd_Laporan = $_GET['Kd_Laporan'];
$Id_Karyawan = $_POST['Id_Karyawan'];
$Kd_Omset = $_POST['Kd_Omset'];
$Tanggal = $_POST['Tanggal'];
$Modal = $_POST['Modal'];
$Pemasukan = $_POST['Pemasukan'];
$Pengeluaran = $_POST['Pengeluaran'];
$Omset = $_POST['Omset'];
$query = "SELECT * FROM laporan_harian WHERE Kd_Laporan'".$Kd_Laporan."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE laporan_harian SET Kd_Laporan='".$Kd_Laporan."', Id_Karyawan='".$Id_Karyawan."', Kd_Omset='".$Kd_Omset."', Tanggal='".$Tanggal."', Modal='".$Modal."', Pemasukan='".$Pemasukan."', Pengeluaran='".$Pengeluaran."', Omset='".$Omset."' WHERE Kd_Laporan='".$Kd_Laporan."'";
	$sql = mysqli_query($conn, $query);
		header("location: Laporan.php?pesan=Berhasil Ubah");

		echo "Maaf, Terjadi Kesalahan Pada Saat Menyimpan Data.";
		echo "<br><a href='btnLaporan.php'>Kembali Ke Form</a>";
?>
