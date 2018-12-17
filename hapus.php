<?php
	include"koneksi.php";
	$id=$_GET['id'];
	$sql="DELETE FROM barang where id='$id'";
	$query=mysql_query($sql);

	if ($query){
		echo"<script>alert('Penghapusan Data Berhasil Disimpan')</script>";
		echo"<meta http-equiv='refresh' content='5 url=index.php'>";
	}
	else{
		echo"<script>alert('Penghapusan Data Gagal Disimpan')</script>";
		echo"<meta http-equiv='refresh' content='5 url=index.php'>";
	}
?>