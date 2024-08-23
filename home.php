<?php 
session_start();
use Carbon\Carbon;

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

     
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="home.css">
     <style>
          main{
               text-align: center;
               font-size: xx-large;
          }
     </style>

</head>
<body>
     <h1>Keterangan Tanggal</h1>
<nav class="navbar">
     <ul>
          <li><a href ="home.php">Keterangan Tanggal</a></li>
          <li><a href ="prototype1.php">Toko</a></li>
          <li><a href ="prototype2.php">Umur</a></li>
          <li><a href ="prototype3.php">Ada Gambar</a></li>
     </ul>
</nav>

<main>
     <br>
     

<?php
 
require 'vendor/autoload.php';
 
$Jakarta_now = Carbon::now('Asia/Jakarta');

echo "$Jakarta_now  <br><br><br>";
 
 
?>



     <a href="logout.php">Logout</a>

</main>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>