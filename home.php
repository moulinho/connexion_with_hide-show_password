<?php 
session_start();

if (!isset($_SESSION['username'])) {
      
      header("location:index.php");  
}
require "header/header.php";
?>


<h1 style="text-align:center">Bienvenue <i> <?=$_SESSION['username']?></i></span></h1>';
<p style="text-align:center"><a href="Logout.php">Déconnection</a></p>

<?php require "footer/footer.php" ; ?>