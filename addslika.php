<?php
include 'connect.php';
$slika ="";
$imeSlike =""; 
$imeSlikeTmp ="";
$velicinaSlike ="";
$errorSlika ="";
$tipSlike = '';
if ($_FILES['file']['size'] > 0) {
$slika = $_FILES['file'];

$imeSlike= $_FILES['file']['name'];
$imeSlikeTmp= $_FILES['file']['tmp_name'];
$velicinaSlike = $_FILES['file']['size'];
$errorSlika = $_FILES['file']['error'];
$tipSlike = $_FILES['file']['type'];
$ekstSlike = explode('.', $imeSlike);
$ekstSlike[1];
$dozvoljeneEkst = ['png','PNG','jpg','JPG','jpeg','JPEG'];
if (in_array($ekstSlike[1],$dozvoljeneEkst)) {
    if ($errorSlika === 0) {
                    if ($velicinaSlike < 1000000) {
                        $novoImeSlike = uniqid('',true).".".$ekstSlike[1];
                        $destinacijaSlike = 'slike/'.$novoImeSlike;
                        move_uploaded_file($imeSlikeTmp,$destinacijaSlike);
                    } else {
                        echo 'slika je prevelike velicine';
                    }
                } else {
                    echo 'Doslo je do greske prilikom dodavanja!';
                }
            } else {
                echo 'Format nije dozvoljen';
            }
        }

$naziv=$_POST['naziv'];
$ram=$_POST['ram'];
$graf=$_POST['id_graf'];
$os=$_POST['os'];
$procesor=$_POST['procesor'];
$sql="INSERT INTO racunar (`naziv`,`ram`,`os`,`slika`,`id_procesor`,`id_graf`) 
VALUES ('$naziv','$ram','$os','$novoImeSlike','$procesor','$graf');";
mysqli_query($conn,$sql);
header('Location: admin.php');



?>