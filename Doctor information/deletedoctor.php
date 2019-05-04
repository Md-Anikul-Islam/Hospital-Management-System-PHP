
<h1 align="center">DELETE DOCTOR INFO</h1>





<table align="center">
<form action="deletedoctor.php" method="post">

      <tr>
          <th>DOCTOR ID</th>
	      <td><input type="number" name="doctorid" placeholder="doctorid id" required="required"/></td>
		  
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
		      <th>MIDDLE NAME </th>
		      <th>LAST NAME</th>
		      <th>DATE OF BIRTHO</th>
			  <th>PHONE NUMBER</th>
			  <th>DELETEY</th>
			  
         </tr>

		 
		 
		 
		 
		 
		 
		 
<?php

     if(isset($_POST['submit']))
		 
   {
	 
	    include('connected.php');
	 

	 
	    $DOCTOR_ID = $_POST['doctorid'];
	    $MIDDLE_NAME  =  $_POST['middlename'];
	  
	    $query = mysqli_query($conn, "SELECT * FROM `doctor_info` WHERE `DOCTOR_ID`='$DOCTOR_ID' AND `MIDDLE_NAME` LIKE '%$MIDDLE_NAME%'"); 

	  
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
			   <td><?php echo $data['DATE_OF_BIRTH'];?></td>
			   <td><?php echo $data['PHONE_NUMBER'];?></td>
		       <td><a href="delete_form_doctor.php? sid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>