<!DOCTYPE html>
<html>
<head>
	
<title>View nurses_data_cheak</title>
	<style>
		   table, th, td
		{
           background-color:#FA13BF;
		   border: 3px solid black; 
		   border-collapse: collapse;

		   
		}
	</style>
</head>


<body>

	<h1>Nurses Information :</h1>

    
	
	

<?php




$link = mysqli_connect("localhost", "root", "", "hospital");
 

    if($link === false)
	{
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 

    $sql = "SELECT * FROM nurses_info";
    if($result = mysqli_query($link, $sql))
	{
       if(mysqli_num_rows($result) > 0)
	   {
                echo "<table>";
                echo "<tr>";
                echo "<th>FIRST_NAME</th>";
                echo "<th>MIDDLE_NAME</th>";
                echo "<th>LAST_NAME</th>";
				echo "<th>DATE_OF_APPOINTMENT </th>";
				echo "<th>DATE_OF_BIRTH</th>";  
				echo "<th>PHONE_NUMBER</th>";  
			    echo "<th>CHOICE_CABIN_OR_WARD_NO</th>";
			    echo "<th>NURSES_ID</th>";
				echo "<th>SSC</th>";
				echo "<th>HSC</th>";
				echo "<th>BSC</th>";
				echo "<th>OTHER</th>";
				echo "<th>ORGANIZATION</th>";
		
                echo "</tr>";
				
        while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
			    
                echo "<td>" . $row['FIRST_NAME'] . "</td>";
                echo "<td>" . $row['MIDDLE_NAME'] . "</td>";
                echo "<td>" . $row['LAST_NAME'] . "</td>";
				echo "<td>" . $row['DATE_OF_APPOINTMENT'] . "</td>";
                echo "<td>" . $row['DATE_OF_BIRTH'] . "</td>";
				echo "<td>" . $row['PHONE_NUMBER'] . "</td>";
                echo "<td>" . $row['CHOICE_CABIN_OR_WARD_NO'] . "</td>";
				echo "<td>" . $row['NURSES_ID'] . "</td>";
                echo "<td>" . $row['SSC'] . "</td>";
				echo "<td>" . $row['HSC'] . "</td>";
				echo "<td>" . $row['BSC'] . "</td>";
				echo "<td>" . $row['OTHER'] . "</td>";
				echo "<td>" . $row['ORGANIZATION'] . "</td>";
			
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