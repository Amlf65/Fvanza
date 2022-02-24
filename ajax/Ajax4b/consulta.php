<?php
$con = mysqli_connect("localhost","root","","bdusuarios");
$consulta = mysqli_query($con, "SELECT * FROM claves");
if (mysqli_num_rows($consulta) > 0)
{
echo " <table> <thead> <tr> <th>Usuario</th> <th>Clave</th>  </tr> "; 
 while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) { echo "<tr>"; echo "<td>".$row['usuario']."</td>"; echo "<td>".$row['password']."</td>"; } echo "</tr></thead> </table>";
} else { 
echo " <p>Aún no hay registros en la base de datos</p> ";
}
?>
