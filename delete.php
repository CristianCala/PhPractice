<?php

include("conection.php");

$getId = $_GET['id'];
$consultDel = "DELETE FROM emaildb WHERE ID = '$getId'";
$queryEliminador = mysqli_query($conex2, $consultDel) or die ("Error al eliminar");
if($queryEliminador){
	Header("Location: registor.php");
}
?>