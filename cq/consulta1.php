<?php 
	$dbh = mysqli_connect('localhost', 'root','','bdusuarios'); 
	//connect to MySQL server if (!$dbh)     
    
    
	//if connection failed output error message 
    //if (!mysqli_select_db($dbh,'bdusuarios'))     
    
	//die("Unable to select database: " . mysqli_error()); 
    //if selection fails output error message 
    
	$sql_stmt = "SELECT * FROM claves"; 
    //SQL select query 
    
     $result = mysqli_query($dbh,$sql_stmt);
     //execute SQL statement 
     
	//if (!$result)     
	//	die("Database access failed: " . mysqli_error()); 
    	//output error message if query execution failed 
        
		$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
    
	if ($rows) {     
        echo '<table width=100%><tr><th>Usuario</th><th>Contraseña<th></tr>';
	    while ($row = mysqli_fetch_array($result)) {         
            echo  '<tr><td>' . $row['usuario'] . '</td>';         
            echo  '<td>' .$row['password'] . '</td></tr>';            
        } 
        echo '</table>';
	} 

mysqli_close($dbh); //close the database connection 
?>