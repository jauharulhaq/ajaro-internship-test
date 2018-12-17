<html>
	<head>
		<title> Belajar Boostrap | Tampil Data Barang</title>
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
				<div class="col-md-4">
					<h5 class="text-left"><b>Data Barang</b></h5>
				</div>
				<div class="col-md-8 text-right">
					<a href="form_input.php" class="btn btn-success btn-sm">Tambah</a>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<table border="1" class="table table-bordered">
						<tr>
							<th class="text-center">Kode</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Harga</th>
							<th class="text-center">Aksi</th>
						</tr>
							<?php
							include"koneksi.php";
								$sql="select * from barang";
								$query=mysql_query($sql);
								while($data=mysql_fetch_array($query)){
							?>
						<tr class="text-center">
							<td><?php echo $data['kode'];?></td>
							<td><?php echo $data['nama'];?></td>
							<td>Rp.<?php echo $data['harga'];?></td>
							<td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a> <a class="text-danger" href="hapus.php?id=<?php  echo $data['id'];?>">Hapus</a></td>
						</tr> 
								<?php }?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>