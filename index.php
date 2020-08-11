<!DOCTYPE html>
<html lang="en">
<head>
  <title>Name Sorter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Name Sorter</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="tambah.php">Tambah Data</a></li>
      <li><a href="anka.php">Angka</a></li>
      <!--<li><a href="#">Page 3</a></li>-->
    </ul>
  </div>
</nav>
  
<div class="container">

<?php 
include 'config.php';
?>


<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input class="btn btn-primary btn-sm" type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<br>
<br>
<h3>Data</h3>
<div class="table-responsive"> 
<table class="table">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
    </thead>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from nama_sorter where nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from nama_sorter");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>
</table>
</div>

</div>

</body>
</html>


