<?php
    session_start();
    require 'connect.php';

    $pretraga =  $_POST['pretraga'];
    header("Location:racunari.php?pretraga=$pretraga");
?>