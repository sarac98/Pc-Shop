<?php
session_start();
if($_SESSION['priv']==0) {
    header('Location:home.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="css/korisnici.css">
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
</body>
</html>


<?php
include 'connect.php';
$sql="SELECT korisnik.username,racunar.naziv,porudzbina.id_porudzbine FROM `korisnik` 
INNER JOIN `porudzbina`
ON korisnik.id_korisnik=porudzbina.id_korisnik INNER JOIN `racunar` ON porudzbina.id_proizvod=racunar.id_racunara;";

$results=mysqli_query($conn,$sql);
echo '<table class="tabela">';
echo "<thead><tr><th>Username</th><th>Naziv Racunara</th>
<th>Id Porudzbine</th><th>Vreme Porudzbine</tr></thead><tbody>";
while($row = $results->fetch_assoc())
{
    echo "<tr><td>".$row['username']."</td><td>".$row['naziv']."
    </td><td>".$row['id_porudzbine']."</td><td>".$row['vreme_porudzbine']."</td></tr>";
}
echo "</tbody></table>";
?>