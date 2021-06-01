<?php

include("conection.php");


$idUpdate=$_POST['id'];
$emailUpdate=$_POST['email'];
$passwordUpdate=$_POST['password'];
$fecha_regUpdate=$_POST['fecha_reg'];

$consultaUpdate="UPDATE emaildb SET  ID='$idUpdate',email='$emailUpdate', password='$passwordUpdate', fecha_reg = '$fecha_regUpdate' WHERE ID='$idUpdate'";
$queryUpdate=mysqli_query($conex2,$consultaUpdate) or die ("Error al actualizar");

    if($queryUpdate){
        Header("Location: registor.php");
    }
?>