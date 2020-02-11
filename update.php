<?php 
require "connect.php";
$id=$_GET['idp'];
$sql="UPDATE `korisnik` SET korisnik.id_privilegija=1 WHERE korisnik.id_korisnik='$id'";
mysqli_query($conn,$sql);
header('Location: korisnici.php');

?>