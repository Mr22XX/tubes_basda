<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "einformatika";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    die("ERROR : " . mysqli_connect_error());
}


?>