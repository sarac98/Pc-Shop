<?php
    require 'connect.php';
    session_start();
    $idRacunara = $_GET['id'];
    $idKorisnika = $_SESSION['idk'];
    $sql="INSERT INTO `porudzbina`(`id_korisnik`, `id_proizvod`, `vreme_porudzbine`) 
    VALUES ('$idKorisnika','$idRacunara','14:15');";
    mysqli_query($conn,$sql);
    header('Location: home.php');

    
?>