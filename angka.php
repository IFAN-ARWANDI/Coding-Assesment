<!DOCTYPE html>
<html lang="en">
<head>
  <title>Angka</title>
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
      <li><a href="tambah.php">Tambah Data</a></li>
      <li class="active"><a href="angka.php">Angka</a></li>
      <!--<li><a href="#">Page 3</a></li>-->
    </ul>
  </div>
</nav>
  
<div class="container">
<?php
for ($i=8; $i>=1; --$i){
    for ($j=$i; $j>=1; --$j){
    echo $j;
    }
    echo "<br>";
}
?>

</div>

</div>

</body>
</html>