
<html>
<head>

</head>

<body>
<header>
<img src="slike/header.jpg">
<a href="reg.php">Regustruj se</a>
<a href="log.php">Uloguj se</a>
</header>
<main>
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
    </div>";
}
?>
</main>
<footer id="foot">
</footer>
</body>
</html>
<style>
body{
    margin: 0px;
    padding:0px;
    background-color:rgb(230,230,230);
}
main{
    height:400px;
    width:900px;
    margin-top:25px;
    margin-left:200px;
    overflow:scroll;
    }
    .objava{
    height:370px;
    width:285px;
    display:inline-block;
    background-color:white;
    margin-top:-15px;
    }
    header img {
    width:100%;
    height:100%;
    }
    header {
    width:100%;
    height:30%;
    }
    #foot{
    width:100%;
    height:5%;
    background-color:black;
    }
header a{
    float:right;
    margin-right:5px;
}
#reg{
    position: absolute;
    height:430px;
    width:800px;
    background-color: white;
    margin-left:260px;
    margin-top:30px;
    border-radius: 20px;
}


    
     

::-webkit-input-placeholder { 
    text-align: justify;
    font-size: 20px;
}

h1{
    margin-top:-350px;
    padding-left:33px;
}

#forma{
    position: absolute;
    margin-left:500px;
    margin-top:35px;
}
#log{
position: absolute;
margin-top:50px;
margin-left:50px;
}

#foot{
position:absolute;
bottom:0px;	
	
}

</style>



