<!DOCTYPE html>
<html>
<head>
	
<title>View patient_admition_data_cheak Information</title>
	<style>
		   table, th, td
		{
           background-color:#F0EB47;
		   border: 5px solid black; 
		   border-color:green;
		   border-collapse: collapse;

		   
		}
	</style>
</head>


<body>

	<h1>Patient Information :</h1>

    
	
	

<?php




$link = mysqli_connect("localhost", "root", "", "hospital");
 

    if($link === false)
	{
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 

    $sql = "SELECT * FROM patient_basic_info";
    if($result = mysqli_query($link, $sql))
	{
       if(mysqli_num_rows($result) > 0)
	   {
                echo "<table>";
                echo "<tr>";
				echo "<th>DATE_OF_ADMITION</th>";
                echo "<th>FIRST_NAME</th>";
                echo "<th>MIDDLE_NAME</th>";
                echo "<th>LAST_NAME</th>";
				echo "<th>DATE_OF_BIRTH </th>";
				echo "<th>PHONE_NUMBER_01 </th>";  
				echo "<th>PHONE_NUMBER_02 </th>";  
			    echo "<th>STREET_NO_VILLAGE</th>";
			    echo "<th>STREET_NEME</th>";
				echo "<th>AREA</th>";
				echo "<th>THANA</th>";
				echo "<th>DISTRICT</th>";
				echo "<th>PROFESSION</th>";
				echo "<th>AMOUNT_DEPOSITED</th>";
				echo "<th>CHOICE_CABIN_OR_WARD_NO</th>";
				echo "<th>SIGNATURE_WITH_DATE</th>";
				echo "<th>RELATION_WITH_THE_PATIENT</th>";
			    echo "<th>GENDER</th>";
                echo "</tr>";
				
        while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
			    echo "<td>" . $row['DATE_OF_ADMITION'] . "</td>";
                echo "<td>" . $row['FIRST_NAME'] . "</td>";
                echo "<td>" . $row['MIDDLE_NAME'] . "</td>";
                echo "<td>" . $row['LAST_NAME'] . "</td>";
				echo "<td>" . $row['DATE_OF_BIRTH'] . "</td>";
                echo "<td>" . $row['PHONE_NUMBER_01'] . "</td>";
				echo "<td>" . $row['PHONE_NUMBER_02'] . "</td>";
                echo "<td>" . $row['STREET_NO_VILLAGE'] . "</td>";
				echo "<td>" . $row['STREET_NEME'] . "</td>";
                echo "<td>" . $row['AREA'] . "</td>";
				echo "<td>" . $row['THANA'] . "</td>";
				echo "<td>" . $row['DISTRICT'] . "</td>";
				echo "<td>" . $row['PROFESSION'] . "</td>";
				echo "<td>" . $row['AMOUNT_DEPOSITED'] . "</td>";
				echo "<td>" . $row['CHOICE_CABIN_OR_WARD_NO'] . "</td>";
				echo "<td>" . $row['SIGNATURE_WITH_DATE'] . "</td>";
				echo "<td>" . $row['RELATION_WITH_THE_PATIENT'] . "</td>";
				echo "<td>" . $row['GENDER'] . "</td>";
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