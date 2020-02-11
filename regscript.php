<?php
include 'connect.php';

$email=$_POST['email'];
$ime=$_POST['name'];
$pass=$_POST['password'];
$telefon=$_POST['telefon'];
$adresa=$_POST['adresa'];
$duzinaimena=strlen($ime);
$duzinasifra=strlen($pass);
$duzinaadresa=strlen($adresa);
$telefonvalid=is_numeric($telefon);
if($duzinaimena>3&&$duzinasifra>3&&$duzinaadresa&&(filter_var($email, FILTER_VALIDATE_EMAIL))&&
$telefonvalid)
{
$sql="INSERT INTO korisnik(`username`, `password`, `email`, `telefon`, `adresa`,`id_privilegija`) 
VALUES ('$ime','$pass','$email','$telefon','$adresa','0')";                                                     
mysqli_query($conn,$sql);
if($sql)
header('location:log.php');
}
else {
    echo "Greska";
}


?>
