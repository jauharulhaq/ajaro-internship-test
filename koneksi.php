<?php
$hostname="localhost";
$username="root";
$password="";
$database="barang";


$koneksi=mysql_connect($hostname,$username,$password);
$db=mysql_select_db($database);

?>