<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $bd = "users_crud-php";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, "users_crud-php");

    return $connect;

}


?>