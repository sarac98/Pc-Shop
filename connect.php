<?php 
error_reporting( E_ALL & ~E_NOTICE ^ E_DEPRECATED );
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$baza="prodaja_servis_racunara";
$conn = new mysqli($servername, $username, $password,$baza);

?>


