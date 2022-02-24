<?php
    $usuario = $_GET['usuario'];
    $con = mysqli_connect("localhost","root","","bdusuarios");
    $result = mysqli_query($con,"SELECT * FROM usuarios WHERE nombreUsuario='".$usuario."'");
if(mysqli_num_rows($result)>0)
    echo "1";
else echo "0";
?>
