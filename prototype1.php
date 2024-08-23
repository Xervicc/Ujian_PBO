
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="home.css">
    <style>table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #697565;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td a {
            color: #007BFF;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        td a:hover.delete {
            color: red;
        }</style>
</head>
<body>
    <h1>Cabang Toko </h1>
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

require_once "tokoku.php";

$toko = new toko();
$rows = $toko->tampil();

?>

<table>
    <tr>
        <td>ID</td>
        <td>Nama Toko</td>
        <td>Alamat</td>
        <td>Manager</td>
    </tr>

    <?php foreach ($rows as $row) { ?> 
        
        <tr>
            <td> <?php echo $row['id'];?></td>
            <td> <?php echo $row['nama_toko'];?></td>
            <td> <?php echo $row['alamat_toko'];?></td>
            <td> <?php echo $row['manager'];?></td>
        </tr>   
        
        
        
        <?php } ?>
     
</table>
</main>

</body>
</html>
