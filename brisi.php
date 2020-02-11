<?php
require "connect.php";
$id_korisnika=$_GET['id'];

$sql="DELETE FROM `korisnik` WHERE id_korisnik='$id_korisnika'";
mysqli_query($conn,$sql);
header('Location: korisnici.php');
?>