<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
	<title>Edit List Bahan</title>
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="../css/styles.css">
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		width: 400px;
		padding: 10px;
		border: 1px solid #ccc;
	}
</style>

</head>
<body>

<div id='cssmenu'>
<ul>
	<li><a href='Bahan.php'>Bahan</a></li>
	<li><a href='Harga.php'>Harga</a></li>
	<li><a href='Hasil.php'>Hasil</a></li>
	<li><a href='Jenis.php'>Jenis</a></li>
	<li><a href='Karyawan.php'>Karyawan</a></li>
	<li><a href='Laporan.php'>Laporan</a></li>
  <li><a href='Omset.php'>Omset</a></li>
    <li><a href='../HalamanLogin.html'>Log Out</a></li>
</ul>
</div>

<br>
<div class="card">
	<div class="container">
		<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "Gagal"){
				echo "<div style='margin-bottom:55px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data Yang Diinput Sudah Ada</div>";
			}
		}
		?>
		<?php
		include "../Koneksi.php";
		$Kd_Penggunaan_Bahan = $_GET['Kd_Penggunaan_Bahan'];
		$query = "SELECT * FROM penggunaan_bahan WHERE Kd_Penggunaan_Bahan='".$Kd_Penggunaan_Bahan."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		?>
		<form method="post" action="btnBahan.php?Kd_Penggunaan_Bahan=<?php echo $Kd_Penggunaan_Bahan; ?>" enctype="multipart/form-data">
			<p class="h4 text-center py-4">Ubah List Bahan</p>
			<div class="md-form">
				<i class="fa fa-id-card-o prefix grey-text"></i>
				<input type="text" name="Kd_Penggunaan_Bahan" placeholder="Kode Penggunaan Bahan" value="<?php echo $data['Kd_Penggunaan_Bahan'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-id-card-o prefix grey-text"></i>
				<input type="text" name="Id_Karyawan" placeholder="ID Karyawan" value="<?php echo $data['Id_Karyawan'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-list-ol prefix grey-text"></i>
				<input type="text" name="Tanggal" placeholder="Tanggal" value="<?php echo $data['Tanggal'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-book prefix grey-text"></i>
				<input type="text" name="Tepung" placeholder="Tepung" value="<?php echo $data['Tepung'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-globe prefix grey-text"></i>
				<input type="text" name="Mentega_Kuning" placeholder="Mentega Kuning" value="<?php echo $data['Mentega_Kuning'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Mentega_Putih" placeholder="Mentega Putih" value="<?php echo $data['Mentega_Putih'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Telur" placeholder="Telur" value="<?php echo $data['Telur'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Susu_Cair" placeholder="Susu Cair" value="<?php echo $data['Susu_Cair'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Susu_Bubuk" placeholder="Susu Bubuk" value="<?php echo $data['Susu_Bubuk'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Calcium" placeholder="Kalsium" value="<?php echo $data['Calcium'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Butter" placeholder="Butter" value="<?php echo $data['Butter'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Pelembut" placeholder="Pelembut" value="<?php echo $data['Pelembut'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Ragi" placeholder="Ragi" value="<?php echo $data['Ragi'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Gula" placeholder="Gula" value="<?php echo $data['Gula'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Garam" placeholder="Garam" value="<?php echo $data['Garam'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Air_Mineral" placeholder="Air Mineral" value="<?php echo $data['Air_Mineral'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Gas_LPG" placeholder="Gas LPG" value="<?php echo $data['Gas_LPG'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Cokelat" placeholder="Cokelat" value="<?php echo $data['Cokelat'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Keju" placeholder="Keju" value="<?php echo $data['Keju'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Puratos" placeholder="Puratos" value="<?php echo $data['Puratos'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Mocca" placeholder="Mocca" value="<?php echo $data['Mocca'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Mentega_Refill" placeholder="Mentega Refill" value="<?php echo $data['Mentega_Refill'] ?>">
			</div>
      <div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Stock" placeholder="Stock" value="<?php echo $data['Stock'] ?>">
			</div>
			<br>
			<br><br>
			<center class="mb-3"><input type="submit" class="btn btn-primary" value="Simpan">
				<input class="btn btn-danger" type="button" onclick="konfirmasi()" value="Batal"></center>
			</form>
			<script type='text/javascript'>
				function konfirmasi() {
					var answer = confirm('Ingin meninggalkan form?')
					if (answer){
						window.location = 'Bahan.php';
					}
				}
			</script>
		</body>
		</html>
