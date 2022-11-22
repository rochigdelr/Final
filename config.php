<?php 

$server="localhost";
$user="root";
$pass="root";
$db="stockarg";

$conexion = mysqli_connect($server, $user, $pass, $db);

if(!$conexion){
    die("<script>alert('Connection failed: ')</script>" . mysqli_connect_error());
}

?>