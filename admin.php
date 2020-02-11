<?php
session_start();
if($_SESSION['priv']==0) {
    header('Location:home.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<a href="admin.php">adminpage</a>
<a href="home.php">Proveri Home</a>
<a href="logoutscript.php">logout</a>

<form action="pretraga.php" method="post">
<input type="text" name="pretraga">
<input type="submit" value="pretrazi">
</form>
<ol>
<a href="korisnici.php"><li>Korisnici</li></a>
<a href="racunari.php"><li>Racunari</li></a>
<a href="dodaj.php"><li>Dodaj Objavu</li></a>
<a href="porudzbine.php"><li>Porudzbine</li></a>
</ol>
</body>
</html>
<style>
form{

    margin-left:600px;
    
}
form input[type=text]
{
    height:30px;
    width:40%;
}

</style>