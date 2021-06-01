<?php

$server = "127.0.0.1";
$user = "root";
$passwording = "";
$db = "microtable";

$conex3 = mysqli_connect($server,$user,$passwording) or die ("Conexión 3 error");

$conex2 = mysqli_connect($server, $user, $passwording, $db) or die ("Conexion 2 error");
?>