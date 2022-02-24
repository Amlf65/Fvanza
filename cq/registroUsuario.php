<?php
    $usuario = $_GET['usuario'];
    $contra = $_GET['contra'];
    $respuesta="";
        
    $con = mysqli_connect("localhost","root","","bdusuarios");
    if (!mysqli_connect_errno()) {
    if(mysqli_query($con,"INSERT claves VALUES('".$usuario."','".$contra."')"))
        $respuesta= "<h1>Registro realizado<h1>";
    else 
        $respuesta= "<h1>Error en registro<h1>";
    }
    echo $respuesta;
?>
