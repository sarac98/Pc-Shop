<?php
require "connect.php";
session_start();
$idr=$_GET['idr'];
$kor=$_SESSION['idk'];
$kom=$_POST['kom'];
$sql="INSERT INTO `komentari`(`id_korisnik`, `id_proizvod`, `komentar`) 
VALUES ('$kor','$idr','$kom')";
mysqli_query($conn,$sql);

header('Location: detalji.php?id='.$idr);
?>

