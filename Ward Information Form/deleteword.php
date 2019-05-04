
<h1 align="center">DELETE WORD INFO</h1>





<table align="center">
<form action="deleteword.php" method="post">

      <tr>
          <th>WARD ID</th>
	      <td><input type="number" name="wardid" placeholder="word id" required="required"/></td>
		  
          <th>WARD NAME</th> 
	      <td><input type="text" name="wardname" placeholder="word name" required="required"/></td>
	
	      <td colspan="2"><input type="submit" name="submit" value="Search"/></td>

	  </tr>

</form>
</table>









<table align="center" width="80%" border="2" style="margin-top:10px ">

         <tr > 
              <th>SERIAL NO</th>
		      <th>REGISTRAR ID</th>
		      <th>REGISTRAR NAME</th>
		      <th>SERIAL NO</th>
		      <th>BED NO</th>
			  <th>EMPTY OR NOT EMPTY</th>
			  <th>DELETEY</th>
			  
         </tr>

		 
		 
		 
		 
		 
		 
		 
<?php

     if(isset($_POST['submit']))
		 
   {
	 
	    include('connected.php');
	 

	 
	    $WARD_ID = $_POST['wardid'];
	    $WARD_NAME  =  $_POST['wardname'];
	  
	    $query = mysqli_query($conn, "SELECT * FROM `word_info` WHERE `WARD_ID`='$WARD_ID' AND `WARD_NAME` LIKE '%$WARD_NAME%'"); 

	  
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
		       <td><?php echo $data['REGISTRAR_ID'];?></td>
		       <td><?php echo $data['REGISTRAR_NAME'];?></td>
			   <td><?php echo $data['SERIAL_NO'];?></td>
			   <td><?php echo $data['BED_NO'];?></td>
			   <td><?php echo $data['EMPTY_OR_NOT_EMPTY'];?></td>
		       <td><a href="delete_form_word.php? sid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>