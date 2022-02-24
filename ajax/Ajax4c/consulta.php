<?php
$con = mysqli_connect("localhost","root","","videoclub");
mysqli_set_charset($con, "utf8");
$consulta = mysqli_query($con, "SELECT id_video,titulo,genero FROM peliculas");
if (mysqli_num_rows($consulta) > 0)
{
echo " <table> <thead> <tr> <th>Identificador</th> <th>Título</th> <th>Género</th> </tr></thead> </table> <hr/> "; 
 while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) { echo "<table> <thead> <tr>"; echo "<td>".$row['id_video']."</td>"; echo "<td>".$row['titulo']."</td>";echo "<td>".$row['genero']."</td>"; } echo "</tr></thead> </table>";
} else { 
echo " <p>No hay registros seleccionados en la base de datos</p> ";
}
?>
