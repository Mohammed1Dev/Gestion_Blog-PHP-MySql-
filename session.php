<?php

if(!empty($_SESSION["user"])){
return false;
}
else{
    header("location:login.php");
}
?>
