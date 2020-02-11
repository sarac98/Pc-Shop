<html>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<header>
<img src="slike/header.jpg">
<a href="logoutscript.php">logout</a>
<a href="home.php">Back to home</a>
<?php
include 'connect.php';
session_start();

if($_SESSION['priv']==1)
{
    echo"<a href='admin.php'>Predji na Admin stranu</a>";
}


?>
</header>
<main id="p">
<?php
include 'connect.php';

$idracunar=$_GET['id'];
$sql="SELECT * FROM racunar WHERE id_racunara='$idracunar'";
$results=mysqli_query($conn,$sql);

while($row = $results->fetch_assoc()){

    echo "<div id='obj'>
    <img src='slike/".$row['slika']."'>
    <form action='commscript.php?idr=$idracunar' method='POST'>
<textarea name='kom'></textarea><br>
<input type='submit' value='komentarisi'>
</form></div>";
}

?>
<?php
echo "<b>KOMENTARI</b>";
$idracunar=$_GET['id']; 
$sql="SELECT korisnik.username,racunar.naziv,komentari.komentar FROM korisnik 
INNER JOIN komentari ON korisnik.id_korisnik=komentari.id_korisnik 
INNER JOIN racunar ON racunar.id_racunara=komentari.id_proizvod WHERE
id_racunara='$idracunar';" ;
$results=mysqli_query($conn,$sql);

while($row = $results->fetch_assoc())
{
    echo "<div id='kom'>username
    ".$row['username']."<br>naziv:".$row['naziv']."<br>komentar:".$row['komentar']."</div>";
    
}

?>

</main>
<footer id="foot">
</footer>
</body>
</html>
<style>
b{
    margin-left:10px;
}
#p{
    
    
    
}
#kom{
    background-color:white;
    border:1px solid black;
    margin-top:5px;
    width:40%;
    margin-left:10px;
    border-radius:10px;
    
}

</style>