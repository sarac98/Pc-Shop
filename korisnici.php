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
$sql="SELECT korisnik.username,korisnik.email,korisnik.telefon,korisnik.adresa,
korisnik.id_korisnik,korisnik.id_privilegija FROM korisnik;";
$results=mysqli_query($conn,$sql);
echo '<table class="tabela">';
echo "<thead><tr><th>Username</th><th>Email</th><th>Telefon</th><th>Adresa</th>
<th>Privilegija</th></tr></thead><tbody>";
while($row = $results->fetch_assoc())
{
    echo "<tr><td>".$row['username']."</td><td>".$row['email']."
    </td><td>".$row['telefon']."</td><td>".$row['adresa'].
    "</td><td>".$row['id_privilegija']."</td><td><form action='brisi.php?id=".$row['id_korisnik']."' 
    method='POST'><input type='submit' value='obrisi'>
    </form></td><td>

    <form action='update.php?idp=".$row['id_korisnik']."' 
    method='POST'><input type='submit' value='Dodeli admina'>
    </form></td>
    
    </tr>";
}
echo "</tbody></table>";
?>