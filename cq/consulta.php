<?php 
	$dbh = mysqli_connect('localhost', 'root','','bdusuarios'); 
	//connect to MySQL server if (!$dbh)     
    
    
	   
	$sql_stmt = "SELECT * FROM usuarios"; 
    //SQL select query 
    
     $result = mysqli_query($dbh,$sql_stmt);
     //execute SQL statement 
     
	       
		$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
    
	if ($rows) {     
        echo '<table width=100%><tr><th>ID</th><th>Nombre<th></tr>';
	    while ($row = mysqli_fetch_array($result)) {         
            echo  '<tr><td>' . $row['ID_Usuario'] . '</td>';         
            echo  '<td>' .$row['nombreUsuario'] . '</td></tr>';            
        } 
        echo '</table>';
	} 

mysqli_close($dbh); //close the database connection 
?>