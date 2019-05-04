<!DOCTYPE html>
<html>
<head>
	
<title>Word_from</title>
	<style>
		   table, th, td
		{
           background-color:#5DF2E0;
		   border: 3px solid black; 
		   border-collapse: collapse;

		   
		}
	</style>
</head>


<body>

	<h1>Word Information :</h1>

    
	
	

<?php




$link = mysqli_connect("localhost", "root", "", "hospital");
 

    if($link === false)
	{
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 

    $sql = "SELECT * FROM word_info";
    if($result = mysqli_query($link, $sql))
	{
       if(mysqli_num_rows($result) > 0)
	   {
                echo "<table>";
                echo "<tr>";
				echo "<th>WARD_ID</th>";
                echo "<th>REGISTRAR_ID</th>";
                echo "<th>NURSE_SUPERVISOR_ID</th>";
                echo "<th>WARD_NAME</th>";
				echo "<th>REGISTRAR_NAME</th>";
				echo "<th>NURSE_SUPERVISOR_NAME</th>";  
				echo "<th>SERIAL_NO </th>";  
			    echo "<th>BED_NO</th>";
			    echo "<th>BED_TYPE</th>";
				echo "<th>RENT</th>";
				echo "<th>EMPTY_OR_NOT_EMPTY</th>";
				
                echo "</tr>";
				
        while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
			    echo "<td>" . $row['WARD_ID'] . "</td>";
                echo "<td>" . $row['REGISTRAR_ID'] . "</td>";
                echo "<td>" . $row['NURSE_SUPERVISOR_ID'] . "</td>";
                echo "<td>" . $row['WARD_NAME'] . "</td>";
				echo "<td>" . $row['REGISTRAR_NAME'] . "</td>";
                echo "<td>" . $row['NURSE_SUPERVISOR_NAME'] . "</td>";
				echo "<td>" . $row['SERIAL_NO'] . "</td>";
                echo "<td>" . $row['BED_NO'] . "</td>";
				echo "<td>" . $row['BED_TYPE'] . "</td>";
                echo "<td>" . $row['RENT'] . "</td>";
				echo "<td>" . $row['EMPTY_OR_NOT_EMPTY'] . "</td>";
				
            echo "</tr>";
        }
            echo "</table>";
       
           mysqli_free_result($result);
        } 
	  else
	      {
           echo "No records matching your query were found.";
          }

    }
		  else
		  {
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
 

         mysqli_close($link);
?>





</body>
</html>