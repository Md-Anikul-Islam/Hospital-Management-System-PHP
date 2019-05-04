<!DOCTYPE html>
<html>
<head>
	
<title>Medical_Advis_ by_the_Specialist_Form</title>
	<style>
		   table, th, td
		{
           background-color:#FFC300;
		   border: 3px solid black; 
		   border-collapse: collapse;

		   
		}
	</style>
</head>


<body>

	<h1>Medical Advis by the Specialist Form Information :</h1>

    
	
	

<?php




$link = mysqli_connect("localhost", "root", "", "hospital");
 

    if($link === false)
	{
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 

    $sql = "SELECT * FROM medical_advise_by_the_specilist_info";
    if($result = mysqli_query($link, $sql))
	{
       if(mysqli_num_rows($result) > 0)
	   {
                echo "<table>";
                echo "<tr>";
				echo "<th>DATE_OF_ADMITION</th>";
                echo "<th>PATIENT_ID</th>";
                echo "<th>FIRST_NAME</th>";
                echo "<th>MIDDLE_NAME</th>";
				echo "<th>LAST_NAME  </th>";
				echo "<th>DATE_OF_BIRTH </th>";  
				echo "<th>BED_NO </th>";  
			    echo "<th>WORD_NO </th>";
			    echo "<th>DATE_OF_ADVICE</th>";
				echo "<th>TIME </th>";
				echo "<th>MEDICINE01</th>";
				echo "<th>MEDICINE02</th>";
				echo "<th>MEDICINE03</th>";
				echo "<th>MEDICINE_ABOVE</th>";
				echo "<th>TEST_NAME</th>";
				
				
                echo "</tr>";
				
        while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
			    echo "<td>" . $row['DATE_OF_ADMITION'] . "</td>";
                echo "<td>" . $row['PATIENT_ID'] . "</td>";
                echo "<td>" . $row['FIRST_NAME'] . "</td>";
                echo "<td>" . $row['MIDDLE_NAME'] . "</td>";
				echo "<td>" . $row['LAST_NAME'] . "</td>";
                echo "<td>" . $row['DATE_OF_BIRTH'] . "</td>";
				echo "<td>" . $row['BED_NO'] . "</td>";
                echo "<td>" . $row['WORD_NO'] . "</td>";
				echo "<td>" . $row['DATE_OF_ADVICE'] . "</td>";
                echo "<td>" . $row['TIME'] . "</td>";
				echo "<td>" . $row['MEDICINE01'] . "</td>";
				echo "<td>" . $row['MEDICINE02'] . "</td>";
				echo "<td>" . $row['MEDICINE03'] . "</td>";
				echo "<td>" . $row['MEDICINE_ABOVE'] . "</td>";
			    echo "<td>" . $row['TEST_NAME'] . "</td>";
				
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