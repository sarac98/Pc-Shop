<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/reg.css">
</head>
<body>
<header>
</header>
<main>
<div id="reg">
<img src="slike/log.png" id="log">
<form id="forma" action="regscript.php" method="post">     
<input type="text" placeholder="Email" name="email" required ><br><br>
<input type="text" placeholder="Username" name="name"required ><br><br>
<input type="password" placeholder="Password" name="password"required ><br><br>
<input type="text" placeholder="Telefon" name="telefon"required ><br><br>
<input type="text" placeholder="Adresa" name="adresa"required ><br><br>
<input type="submit" id="dugme" name="dugme" value ="REG">
<p id="err"></p>
</form>
</div>
</main>
<footer>
</footer>
</body>
</html>

