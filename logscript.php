<?php
    session_start();
?>
<?php 
include 'connect.php';
if(isset($_POST['dugme']))
{
$username = $_POST['ime'];
$pass = $_POST['password'];

$sql = "SELECT * FROM korisnik WHERE username= '$username';";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    
        
    while($row = $result->fetch_assoc()) {
        if($pass != $row['password']) {
           echo "Greska";
        }
        else {
            $_SESSION['ime'] = $row['username'];
            $_SESSION['priv']=$row['id_privilegija'];
            $_SESSION['idk']=$row['id_korisnik'];
            header('Location: home.php');
        
           }
          
        }            
    }

}
?>




