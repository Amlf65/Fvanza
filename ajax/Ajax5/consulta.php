<?php
$con = mysqli_connect("localhost","root","","videoclub");
mysqli_set_charset($con, "utf8");
if (empty($_POST['genero'])) {
     $consulta = mysqli_query($con, "SELECT * FROM peliculas" );   
}
else{
    $consulta = mysqli_query($con, "SELECT * FROM peliculas where genero='".$_POST['genero']."'" );
}
if (mysqli_num_rows($consulta) > 0)
    {
    echo " <table> <thead> <tr> <th>Clave</th> <th>Título</th>  </tr> "; 
     while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) { echo "<tr>"; echo "<td>".$row['id_video']."</td>"; echo "<td>".$row['titulo']."</td>"; } echo "</tr></thead> </table>";
    } else { 
    echo " <p>Aún no hay registros en la base de datos</p> ";
    }
?>
