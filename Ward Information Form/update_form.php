<?php

  include('connected.php');
   
   $ID = $_GET['sid'];
   
   $query = mysqli_query($conn,"SELECT * FROM `word_info` WHERE ID='$ID'"); 
   $data = mysqli_fetch_array($query);
?>

<html>
<head>
  <title>Word_from</title>
  <link rel="stylesheet" href="Ward_Information_Form.css" />
 </head>





<body>
<div class="from_name" >

<h1>Word Info Update Form</h1>

<form action="update_data_form.php" method="post" enctype="multipart/form-data">

       
	  
      <div class="ward_id ">
                     WARD ID :
                     <p><input type="number" name="wardid" value=<?php echo $data['WARD_ID'];?> required  /></p><br/>
	   </div>			 
	   <div class="registrar_id">				 
                     REGISTRAR ID :
                     <p><input type="number" name="registrarid" value=<?php echo $data['REGISTRAR_ID'];?>  required /></p><br/>
	   </div>
	   <div class="nurse_supervisor_id">				 
                     NURSE SUPERVISOR ID:
                     <p><input type="number"name="nursesupervisorid" value=<?php echo $data['NURSE_SUPERVISOR_ID'];?> required /></p><br/>
	   </div>	 
	   <div class="ward_name">				 
                     WARD NAME:
                     <p><input type="text"name="wardname" value=<?php echo $data['WARD_NAME'];?> required  /></p><br/>
	   </div>
	   <div class="registrar_name ">				 
                     REGISTRAR NAME:
                     <p><input type="text"name="registrarname" value=<?php echo $data['REGISTRAR_NAME'];?> required /></p><br/>
	   </div>
	   <div class="nurse_supervisor_name">				 
                     NURSE SUPERVISOR NAME:
                     <p><input type="text"name="nursesupervisorname" value=<?php echo $data['NURSE_SUPERVISOR_NAME'];?> required /></p><br/>
	   </div>
	   
	  
	 
       <h3>Bed Information</h3>
       <table border="2"style="width:55%; margin-left:200px; margin-top:-300px;">
       
       <tr>
       <th>SERIAL NO</th>
       <td><input type="number" name="serial_no" placeholder="Serial No" value=<?php echo $data['SERIAL_NO'];?> required></td>
       </tr>
	   
	   <tr>
       <th>BED NO</th>
       <td><input type="number" name="bedno" placeholder="Bed No" value=<?php echo $data['BED_NO'];?> required></td>
       </tr>
	   

	   <tr>
       <th>BED TYPE</th>
       <td><input type="text" name="bedtype" placeholder="Bed Type" value=<?php echo $data['BED_TYPE'];?> required></td>
       </tr>
	   
	   <tr>
       <th>RENT</th>
       <td><input type="number" name="rent" placeholder="Rent" value=<?php echo $data['RENT'];?> required></td>
       </tr>

	   <tr>
       <th>EMPTY OR NOT EMPTY</th>
       <td><input type="text" name="emptyornotempty" placeholder="Empty or Not Empty" value=<?php echo $data['EMPTY_OR_NOT_EMPTY'];?> required></td>
       </tr>
	    
	 	  
	  <div class="submit">
	  <input type="hidden" name="sid" value="<?php echo $data['ID'];?>" />
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>

</form>

</div>
</body>
</html>