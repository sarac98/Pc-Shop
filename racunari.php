<html>
<head>
<link rel="stylesheet" href="css/racunari.css">
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
session_start();
include 'connect.php';
$pretraga = '';
if(isset($_GET['pretraga'])) {
    $pretraga = $_GET['pretraga'];
}

$sql="SELECT racunar.naziv,racunar.ram,graficka.marka,graficka.memorija,procesor.markap,
procesor.opis
FROM racunar INNER JOIN graficka ON graficka.id_graf=racunar.id_graf INNER JOIN
procesor ON procesor.id_procesor=racunar.id_procesor 
WHERE racunar.naziv LIKE '%$pretraga%'";
$results=mysqli_query($conn,$sql);
echo '<table class="tabela">';
echo "<thead><tr><th>Naziv</th><th>Ram</th><th>Marka Graficke</th>
<th>Memorija graficke</th><th>Marka procesora<th>Opis procesora</th></tr></thead><tbody>";
while($row = $results->fetch_assoc())
{
    echo "<tr><td>".$row['naziv']."</td><td>".$row['ram']."
    </td><td>".$row['marka']."</td><td>".$row['memorija']."</td><td>".$row['markap']."</td>
    <td>".$row['opis']."
    </tr>";
}
echo "</tbody></table>";
?>