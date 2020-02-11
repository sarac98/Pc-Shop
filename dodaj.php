<?php
session_start();
if($_SESSION['priv']==0) {
    header('Location:home.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="css/dodaj.css">
</head>
<body>
<ol>
<a href="logoutscript.php">logout</a>
<a href="admin.php">adminpage</a>
<a href="home.php">Proveri Home</a>
<a href="korisnici.php"><li>Korisnici</li></a>
<a href="racunari.php"><li>Racunari</li></a>
<a href="dodaj.php"><li>Dodaj Objavu</li></a>
<a href="porudzbine.php"><li>Porudzbine</li></a>
</ol>
<form id="dodavanje" action="addslika.php" method="post" enctype="multipart/form-data">
<h3>Dodaj proizvod</h3>
<input type="text" name="naziv"  placeholder="Naziv Proizvoda">
<input type="text" name="ram"  placeholder="Ram">
<input type="text" name="id_graf"  placeholder="id_graf">
<input type="text" name="os"  placeholder="Operativni sistem">
<input type="file" name="file">
<input type="text" name="procesor"  placeholder="id_procesora"><br>
<input type="submit" name="dg" value="Dodaj">
</form>
</body>
</html>


