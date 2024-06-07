<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;


header("location:login.php");


?>