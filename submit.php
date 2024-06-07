<?php
$db_conn = mysqli_connect("localhost","root","","from-data");
if($db_conn == false){
    echo"error in connection";
}else{
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];

        $form = "INSERT INTO `form`(`id`,`username`,`email`,`password`,`phone`) VALUES (null,'$username','$email','$password','$phone')";

        mysqli_query($db_conn,$form);
        echo"your data is enter";
}



?>