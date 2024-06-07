<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if(isset($_POST["username"]) && $_SESSION["username"] == $username){
    if(isset($_POST["password"]) && $_SESSION["password"] == $password){
        header("location:welcome.php");
    }else
    {
        header("location:wrong.php?error=2");
    }
}else{
    header("location:wrong.php?error=1");
}
?>