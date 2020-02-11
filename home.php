
<html>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<header>
<img src="slike/header.jpg">
<a href="logoutscript.php">logout</a>
<?php
include 'connect.php';
session_start();
echo "Dobrodosao: ".$_SESSION['ime'];
if($_SESSION['priv']==1)
{
    echo"<a href='admin.php'>Predji na Admin stranu</a>";
}


?>
</header>
<main id="m">
<?php
include 'connect.php';
$sql="SELECT *,
procesor.markap,procesor.opis,graficka.marka,graficka.memorija,graficka.integrisana
 FROM racunar INNER JOIN procesor ON procesor.id_procesor=racunar.id_procesor INNER JOIN 
 graficka ON graficka.id_graf=racunar.id_graf
";
$results=mysqli_query($conn,$sql);
while($row = $results->fetch_assoc()){
    $id = $row['id_racunara'];
    echo "<div class='objava'>
    <img src='slike/".$row['slika']."'>
    <p>naziv: ".$row['naziv']."<br>ram memorija: ".$row['ram']."
    <br>sistem: ".$row['os']."<br>Marka Procesora :".$row['markap']."
    <br>Marka Graficke: ".$row['marka']."<br>Memorija: ".$row['memorija']."
    <br>Integirsana".$row['integrisana']."</p>
    <form action='novaPorudzbina.php?id=$id' method='post'>
        <input type='submit' value='kupi' name='kupi'>
    </form>
    <form action='detalji.php?id=$id' method='post'>
        <input type='submit' value='komentar' name='kupi'>
    </form>
    </div>";
}

?>
</main>
<footer id="foot">
</footer>
</body>
</html>
<style>

.objava{
    height:500px;
    width:270px;
    margin-top:-15px;
}
form input[type='submit']
{
    margin-top:0px;
}
#m{
    margin-top:30px;
}
</style>