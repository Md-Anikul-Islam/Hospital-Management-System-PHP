<?php

  include('connected.php');
   
   $ID = $_GET['sid'];
   
   $query = mysqli_query($conn,"SELECT * FROM `medicine_info` WHERE ID='$ID'"); 
   $data = mysqli_fetch_array($query);
?>

<html>
<head>
  <title>Medicine_from</title>
  <link rel="stylesheet" href="medicine_entry_form.css" />
 </head>





<body>
<div class="from_name" >
<h1>Medicine Update Form</h1>

<form action="update_data_form.php" method="post" enctype="multipart/form-data">

       
	  
       <div class="supplier_nid">
                     SUPPLIER NID:
                     <p><input type="number" name="suppliernid" value=<?php echo $data['SUPPLIER_NID']; ?> required  /></p><br/>
	   </div>			 
	   <div class="supplier_name">				 
                     SUPPLIER NAME:
                     <p><input type="text" name="suppliername" value=<?php echo $data['SUPPLIER_NAME']; ?> required /></p><br/>
	   </div>
	   <div class="datr_of_supply">				 
                     DATE OF SUPPLY:
                     <p><input type="date"name="dateofsupply" value=<?php echo $data['DATE_OF_SUPPLY']; ?> required /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   <h3>Medicine Information :</h3>
	   
	   <div class="medicine_id">				 
                     MEDICINE ID
                     <p><input type="number" name="medicineid" value=<?php echo $data['MEDICINE_ID']; ?> required /></p><br/>
	   </div>
	   <div class="name ">				 
                     NEME:
                     <p><input type="text"name="name" value=<?php echo $data['NAME']; ?> required /></p><br/>
	   </div>
	   <div class="type">				 
                     TYPE:
                     <p><input type="text"name="type" value=<?php echo $data['TYPE'];?> required /></p><br/>
	   </div>
	   <div class="unit_price">				 
                     UNIT PRICE:
                     <p><input type="number"name="unitprice" value=<?php echo $data['UNIT_PRICE'];?> required /></p><br/>
	   </div>
	   <div class="expiry_date">				 
                     EXPIRY DATE:
                     <p><input type="date"name="expirydate" value=<?php echo $data['EXPIRY_DATE'];?> required /></p><br/>
	   </div>
	   <div class="quantity">				 
                     QUANTITY:
                     <p><input type="text"name="quantity" value=<?php echo $data['QUANTITY'];?> required /></p><br/>
	   </div>
	   <div class="date_of_manufacture ">				 
                     DATE OF MANUFACTURE:
                     <p><input type="date"name="dateofmanufacture" value=<?php echo $data['DATE_OF_MANUFACTURE'];?> required /></p><br/>
	   </div>
	  
	   
	   
	   
	   
	   
	   
	 	  
	  <div class="submit">
	  <input type="hidden" name="sid" value="<?php echo $data['ID'];?>" />
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>

</form>

</div>
</body>
</html>