<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "maxvision4";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
if($con->connect_error){
    die("Error de la conexion: ".$con->connect_error);
}



  

?>