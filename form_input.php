<html>
	<head>
		<title> Belajar Boostrap | Input Barang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" style="background-color:#000000">
				<div class="col-md-12 text-center text-muted">
					<h4>KELOLA DATA BARANG</h4>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<b>Input Data Barang</b><br><br>
					<form method="POST" action="" role="form">
						<div class="form-group">
							<label>Kode</label> :	<input type="text" size="10"class="form-control" name="Kode">
						</div>
						<div class="form-group">
							<label>Nama</label> :	<input type="text" size="10"class="form-control" name="Nama">
						</div>
						<div class="form-group">
							<label>Deskripsi</label> :	<textarea size="10"class="form-control" name="Deskripsi"></textarea>
						</div>
						<div class="form-group">
							<label>Stok</label> :	<input type="text" size="10"class="form-control" name="Stok">
						</div>
						<div class="form-group">
							<label>Harga</label> :	<input type="text" size="10"class="form-control" name="Harga">
						</div>
						<div class="form-group">
							<label>Berat</label> :	<input type="text" size="10"class="form-control" name="Berat"></i>gram</i><br>
						<div class="text-right">
							<a href="index.php">Tampil Data</a> <input type="submit" class="btn btn-success" name="btnTambah" value="Tambah">
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</body>
</html>

<?php
include"koneksi.php"; 
	if(isset($_POST['btnTambah'])){
	$kode=$_POST['Kode'];
	$nama=$_POST['Nama'];
	$deskripsi=$_POST['Deskripsi'];
	$stok=$_POST['Stok'];
	$harga=$_POST['Harga'];
	$berat=$_POST['Berat'];

	$sql="insert into barang values('','$kode','$nama','$deskripsi','$stok','$harga','$berat')";
	$query=mysql_query($sql);
	}
?>