<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Name</title>
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
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="tambah.php">Tambah Data</a></li>
      <li><a href="angka.php">Angka</a></li>
      <!--<li><a href="#">Page 3</a></li>-->
    </ul>
  </div>
</nav>
  
<div class="container">

	<br/>
	<h3>Input data baru</h3>
	<form action="tambah_aksi.php" method="post">		
		<table>
			<tr>
				<td><b>Nama</b></td>
				<td>&nbsp;&nbsp;<input type="text" name="nama"></td>					
			
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary btn-sm" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</div>

</div>

</body>
</html>