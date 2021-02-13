<?php 
session_start();
/**
 * username=toto
 * password=toto
 * 
 * username=lorem
 * password=lorem
 * 
 */

require 'Database.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $username = htmlentities($_POST['username']);

    $password =sha1(htmlentities($_POST['password']));

    $query = "SELECT * FROM datauser WHERE username='".$username."'AND password='".$password."'";

    $result =$db->prepare($query);
    $result->execute();
    $datas = $result->fetch(PDO::FETCH_ASSOC);

    if($datas > 0){

          $_SESSION['username'] = $datas['username'];
          
          echo $datas['username'];

    }

 
}

?>