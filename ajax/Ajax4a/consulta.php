<?php
$con = mysqli_connect("localhost","root","","bdusuarios");
$consulta = mysqli_query($con, "SELECT * FROM usuarios");
if (mysqli_num_rows($consulta) > 0)
{
echo " <table> <thead> <tr> <th>Id_Usuario</th> <th>Nombre</th>  </tr> "; 
 while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) { echo "<tr>"; echo "<td>".$row['ID_Usuario']."</td>"; echo "<td>".$row['nombreUsuario']."</td>"; } echo "</tr></thead> </table>";
} else { 
echo " <p>Aún no hay registros en la base de datos</p> ";
}
?>