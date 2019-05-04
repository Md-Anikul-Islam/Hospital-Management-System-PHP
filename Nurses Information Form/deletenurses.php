
<h1 align="center">DELETE NURSES INFO</h1>





<table align="center">
<form action="deletenurses.php" method="post">

      <tr>
          <th>NURSES ID</th>
	      <td><input type="number" name="nursesid" placeholder="nurs id" required="required"/></td>
		  
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
	 

	 
	    $NURSES_ID = $_POST['nursesid'];
	    $MIDDLE_NAME  =  $_POST['middlename'];
	  
	    $query = mysqli_query($conn, "SELECT * FROM `nurses_info` WHERE `NURSES_ID`='$NURSES_ID' AND `MIDDLE_NAME` LIKE '%$MIDDLE_NAME%'"); 

	  
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
		       <td><a href="delete_form_nurses.php? sid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>