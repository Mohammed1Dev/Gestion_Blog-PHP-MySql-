<?php

 include('connexion.php') ;
 if(isset($_GET["cin"]))
 {
   $cin=$_GET["cin"];

 $query="delete from employer where cin=$cin";
 $conn->exec($query);
header("location:afficher.php");
}
?>