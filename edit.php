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
					<b>Update Data Barang</b><br><br>
					<form method="POST" action="" role="form">
						<?php
							include"koneksi.php";
							$id=$_GET['id'];
							$sql="select*from barang where id='$id'";
							$query=mysql_query($sql);
							while($data=mysql_fetch_array($query)){
						?>
						<div class="form-group">
							Kode :	<input type="text" size="10"class="form-control" name="Kode" value="<?php echo$data['kode'];?>">
						</div>
						<div class="form-group">
							Nama :	<input type="text" size="10"class="form-control" name="Nama" value="<?php echo$data['nama'];?>">
						</div>
						<div class="form-group">
							Deskripsi :	<textarea size="10"class="form-control" name="Deskripsi" ><?php echo$data['deskripsi'];?></textarea>
						</div>
						<div class="form-group">
							Stok :	<input type="text" size="10"class="form-control" name="Stok" value="<?php echo$data['stok'];?>">
						</div>
						<div class="form-group">
							Harga :	<input type="text" size="10"class="form-control" name="Harga" value="<?php echo$data['harga'];?>">
						</div>
						<div class="form-group">
							Berat :	<input type="text" size="10"class="form-control" name="Berat" value="<?php echo$data['berat'];?>"><i>gram</i><br>
						<div class="text-right">
							<a href="index.php">Batal</a>  <input type="submit" class="btn btn-success" name="btnSimpan" value="Simpan">
						</div>
							<?php }?>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</body>
</html>

<?php
include"koneksi.php"; 
	if(isset($_POST['btnSimpan'])){
	$kode=$_POST['Kode'];
	$nama=$_POST['Nama'];
	$deskripsi=$_POST['Deskripsi'];
	$stok=$_POST['Stok'];
	$harga=$_POST['Harga'];
	$berat=$_POST['Berat'];

	$sql="update barang set kode='$kode', nama='$nama', deskripsi='$deskripsi',stok='$stok',harga='$harga',berat='$berat' where id='$id'";
	$query=mysql_query($sql);
	}
?>