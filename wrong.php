<?php
session_start();

if(isset($_GET["error"])&& $_GET["error"]==1){
    header("location:wronguser.php");
}elseif(isset($_GET["error"])&& $_GET["error"]==2)
{
    header("location:wrongpassword.php");
}else{
    header("location:welcome.php");
}


?>