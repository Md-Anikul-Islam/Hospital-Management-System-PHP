<!DOCTYPE html>
<html>
<head>
	
<title>Medicine_from</title>
	<style>
		   table, th, td
		{
           background-color:#9BF04F;
		   border: 3px solid black; 
		   border-collapse: collapse;

		   
		}
	</style>
</head>


<body>

	<h1>Medicine Information :</h1>

    
	
	

<?php




$link = mysqli_connect("localhost", "root", "", "hospital");
 

    if($link === false)
	{
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 

    $sql = "SELECT * FROM medicine_info";
    if($result = mysqli_query($link, $sql))
	{
       if(mysqli_num_rows($result) > 0)
	   {
                echo "<table>";
                echo "<tr>";
				echo "<th>SUPPLIER_NID</th>";
                echo "<th>SUPPLIER_NAME</th>";
                echo "<th>DATE_OF_SUPPLY</th>";
                echo "<th>MEDICINE_ID</th>";
				echo "<th>NAME  </th>";
				echo "<th>TYPE </th>";  
				echo "<th>UNIT_PRICE </th>";  
			    echo "<th>EXPIRY_DATE </th>";
			    echo "<th>QUANTITY</th>";
				echo "<th>DATE_OF_MANUFACTURE</th>";
				
                echo "</tr>";
				
        while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
			    echo "<td>" . $row['SUPPLIER_NID'] . "</td>";
                echo "<td>" . $row['SUPPLIER_NAME'] . "</td>";
                echo "<td>" . $row['DATE_OF_SUPPLY'] . "</td>";
                echo "<td>" . $row['MEDICINE_ID'] . "</td>";
				echo "<td>" . $row['NAME'] . "</td>";
                echo "<td>" . $row['TYPE'] . "</td>";
				echo "<td>" . $row['UNIT_PRICE'] . "</td>";
                echo "<td>" . $row['EXPIRY_DATE'] . "</td>";
				echo "<td>" . $row['QUANTITY'] . "</td>";
                echo "<td>" . $row['DATE_OF_MANUFACTURE'] . "</td>";
				
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