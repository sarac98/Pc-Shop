<?php
    session_start();
?>
<head>
<link rel="stylesheet" href="css/log.css">
</head>

<body>
<header>
</header>
<main>
<div id="reg">
<img src="slike/log.png" id="log">
<form id="for" action="logscript.php" method="post">
<input type="text" placeholder="Username" name="ime" required ><br><br>
<input type="password" placeholder="Password" name="password"required ><br><br>
<input type="submit"  id ="dugme" name="dugme" value ="LOGIN">
<p id="err"></p>
</form>
</div>
</main>
<footer>
</footer>
</body>
</html>







<?php 




?>