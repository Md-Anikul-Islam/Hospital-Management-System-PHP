
<h1 align="center">DELETE MEDICAL ADVIS BY THE SPECIALIST INFO</h1>





<table align="center">
<form action="deleteadvis.php" method="post">

      <tr>
          <th>PATIENT ID</th>
	      <td><input type="number" name="patientid" placeholder="patient id" required="required"/></td>
		  
          <th>MIDDLE NAME</th> 
	      <td><input type="text" name="middlename" placeholder="middle name" required="required"/></td>
	
	      <td colspan="2"><input type="submit" name="submit" value="Search"/></td>

	  </tr>

</form>
</table>









<table align="center" width="80%" border="2" style="margin-top:10px ">

         <tr > 
              <th>SERIAL NO</th>
		      <th>FIRST NAME</th>
		      <th>MIDDLE NAME</th>
		      <th>LAST NAME</th>
		      <th>BED NO</th>
			  <th>WORD NO</th>
		      <th>DELETE</th>
			  
         </tr>

		 
		 
		 
		 
		 
		 
		 
<?php

     if(isset($_POST['submit']))
		 
   {
	 
	    include('connected.php');
	 

	 
	    $PATIENT_ID = $_POST['patientid'];
	    $MIDDLE_NAME  =  $_POST['middlename'];
	  
	    $query = mysqli_query($conn, "SELECT * FROM `medical_advise_by_the_specilist_info` WHERE `PATIENT_ID`='$PATIENT_ID' AND `MIDDLE_NAME` LIKE '%$MIDDLE_NAME%'"); 

	  
	    $count = mysqli_num_rows($query);
	    if($count == "0")
	                   {
		                  $output = '<h2>No result found!</h2>';
						  ?>
			              <script>
			              alert(' not match !!');
				          </script>
			              <?php
						  
						  
						  
						   
	                   }
	    else
	                   {
		                  $count=0;
		                  while($data = mysqli_fetch_array($query))
		            
					   {
			              $count++;
						

						  
						  
?>			
           <tr> 
               <td><?php echo $count; ?></td>
		       <td><?php echo $data['FIRST_NAME'];?></td>
		       <td><?php echo $data['MIDDLE_NAME'];?></td>
			   <td><?php echo $data['LAST_NAME'];?></td>
			   <td><?php echo $data['BED_NO'];?></td>
			   <td><?php echo $data['WORD_NO'];?></td>
			  
		       <td><a href="delete_form_advis.php? sid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>