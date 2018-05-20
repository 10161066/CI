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
	<title>Edit List Harga</title>
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
		$Id_Produk = $_GET['Id_Produk'];
		$query = "SELECT * FROM harga_produk WHERE Id_Produk='".$Id_Produk."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		?>
		<form method="post" action="btnHarga.php?Id_Produk=<?php echo $Id_Produk; ?>" enctype="multipart/form-data">
			<p class="h4 text-center py-4">Ubah List Harga</p>
			<div class="md-form">
				<i class="fa fa-id-card-o prefix grey-text"></i>
				<input type="text" name="Id_Produk" placeholder="ID Produk" value="<?php echo $data['Id_Produk'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-id-card-o prefix grey-text"></i>
				<input type="text" name="Kd_Omset" placeholder="Kode Omset" value="<?php echo $data['Kd_Omset'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-list-ol prefix grey-text"></i>
				<input type="text" name="Nama_Produk" placeholder="Nama Produk" value="<?php echo $data['Nama_Produk'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-book prefix grey-text"></i>
				<input type="number" name="Harga_Produk" placeholder="Harga Produk" value="<?php echo $data['Harga_Produk'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-globe prefix grey-text"></i>
				<input type="text" name="Satuan" placeholder="Satuan" value="<?php echo $data['Satuan'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Modal" placeholder="Modal" value="<?php echo $data['Modal'] ?>">
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
						window.location = 'Harga.php';
					}
				}
			</script>
		</body>
		</html>
