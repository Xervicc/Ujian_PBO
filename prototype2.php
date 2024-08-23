<!DOCTYPE html>

<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="home.css">
     <style>
          main{
               font-size: x-large;
               font-family: sans-serif;
          }
     </style>
</head>
<body>
     <h1>Umur Saya</h1>
<nav class="navbar">
     <ul>
          <li><a href ="home.php">Keterangan Tanggal</a></li>
          <li><a href ="prototype1.php">Toko</a></li>
          <li><a href ="prototype2.php">Umur</a></li>
          <li><a href ="prototype3.php">Ada Gambar</a></li>
     </ul>
</nav>
<main>
    <?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    echo "Umur Desta: " . Carbon::createFromDate(2020, 1, 1)->age . "tahun <br>";
 
    ?>
</main>
</body>
</html>