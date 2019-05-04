
<h1 align="center">DELETE PATIENT INFO</h1>





<table align="center">
<form action="deletepatient.php" method="post">

      <tr>
          <th>CHOICE CABIN OR WARD NO</th>
	      <td><input type="number" name="choicecabinwardno" placeholder="word id" required="required"/></td>
		  
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
		      <th>PHONE NUMBER 01</th>
			  <th>STREET NO / VILLAGE</th>
			  <th>DISTRICT</th>
			  <th>DELETE</th>
			  
         </tr>

		 
		 
		 
		 
		 
		 
		 
<?php

     if(isset($_POST['submit']))
		 
   {
	 
	    include('connected.php');
	 

	 
	    $CHOICE_CABIN_OR_WARD_NO = $_POST['choicecabinwardno'];
	    $MIDDLE_NAME  =  $_POST['middlename'];
	  
	    $query = mysqli_query($conn, "SELECT * FROM `patient_basic_info` WHERE `CHOICE_CABIN_OR_WARD_NO`='$CHOICE_CABIN_OR_WARD_NO' AND `MIDDLE_NAME` LIKE '%$MIDDLE_NAME%'"); 

	  
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
			   <td><?php echo $data['PHONE_NUMBER_01'];?></td>
			   <td><?php echo $data['STREET_NO_VILLAGE'];?></td>
			   <td><?php echo $data['DISTRICT'];?></td>
		       <td><a href="delete_form_patient.php? sid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>