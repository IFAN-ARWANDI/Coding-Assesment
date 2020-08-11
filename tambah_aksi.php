<?php 
include 'config.php';
$nama = $_POST['nama'];


mysql_query("INSERT INTO nama_sorter VALUES('','$nama')");

header("location:tambah.php");
?>