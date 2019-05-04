
<table align="center">
<form action="updatemedicine.php" method="post">
<h1 align="center">Medicine Info Update Form</h1>

       <tr>
          <th>SUPPLIER NID</th>
	      <td><input type="number" name="suppliernid" placeholder="NID" required="required"/></td>
		  
          <th>SUPPLIER NAME</th> 
	      <td><input type="text" name="suppliername" placeholder="NAME" required="required"/></td>
	
	      <td colspan="2"><input type="submit" name="submit" value="Search"/></td>

	  </tr>

</form>
</table>









<table align="center" width="80%" border="2" style="margin-top:10px ">

           <tr > 
              <th>SERIAL NO</th>
		      <th>MEDICINE ID</th>
		      <th>NAME</th>
		      <th>UNIT PRICE</th>
		      <th>QUANTITY</th>
			  <th>EDIT</th>
         </tr>

		 
		 
		 
		 
		 
		 
		 
<?php

     if(isset($_POST['submit']))
		 
   {
	 
	    include('connected.php');

	 
	    $SUPPLIER_NID = $_POST['suppliernid'];
	    $SUPPLIER_NAME  =  $_POST['suppliername'];
	  
	    $query = mysqli_query($conn, "SELECT * FROM `medicine_info` WHERE `SUPPLIER_NID`='$SUPPLIER_NID' AND `SUPPLIER_NAME` LIKE '%$SUPPLIER_NAME%'"); 

	  
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
		       <td><?php echo $data['MEDICINE_ID'];?></td>
		       <td><?php echo $data['NAME'];?></td>
			   <td><?php echo $data['UNIT_PRICE'];?></td>
			   <td><?php echo $data['QUANTITY'];?></td>
		       <td><a href="update_form.php? sid=<?php echo $data['ID'] ?>">Edit</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>
