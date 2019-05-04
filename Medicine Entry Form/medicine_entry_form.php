<html>


<?php

if (isset($_POST['submit'])) {
		include_once "connected.php";
		
		$SUPPLIER_NID = $_POST['suppliernid'];
		$SUPPLIER_NAME = $_POST['suppliername'];
		$DATE_OF_SUPPLY= $_POST['dateofsupply'];
		$MEDICINE_ID = $_POST['medicineid'];
		$NAME = $_POST['name'];
		$TYPE	 = $_POST['type'];
		$UNIT_PRICE= $_POST['unitprice'];
		
		
		$EXPIRY_DATE = $_POST['expirydate'];
        $QUANTITY = $_POST['quantity'];
        $DATE_OF_MANUFACTURE = $_POST['dateofmanufacture'];
       
		
		
		
		
		$query = "INSERT INTO    medicine_info(SUPPLIER_NID,SUPPLIER_NAME,DATE_OF_SUPPLY,
		                                            MEDICINE_ID,NAME,TYPE,UNIT_PRICE,EXPIRY_DATE,
													QUANTITY,DATE_OF_MANUFACTURE) 
									   
									   
									   
			                   VALUES ('".$SUPPLIER_NID."', '".$SUPPLIER_NAME. "', '".$DATE_OF_SUPPLY ."' , 
							           '".$MEDICINE_ID."' , '".$NAME."' , '".$TYPE."' , 
									   '".$UNIT_PRICE."' ,'".$EXPIRY_DATE."','". $QUANTITY."', 
									   '".$DATE_OF_MANUFACTURE ."' )";

		if ($conn->query($query) === TRUE) 
		{
			?>
			<script>
			       alert('new record submited !!');
			</script>
			<?php
		} else {
			echo "Error: ";
		}
		$conn->close();
	}

?>


<head>
  <title>Medicine_from</title>
  <link rel="stylesheet" href="medicine_entry_form.css" />
 </head>





<body>
<div class="from_name" >
<h1>Medicine Entry Form</h1>

<form action="medicine_entry_form.php" method="post">
<form>
       
	  
       <div class="supplier_nid">
                     SUPPLIER NID:
                     <p><input type="number" name="suppliernid" required  /></p><br/>
	   </div>			 
	   <div class="supplier_name">				 
                     SUPPLIER NAME:
                     <p><input type="text" name="suppliername"  required /></p><br/>
	   </div>
	   <div class="datr_of_supply">				 
                     DATE OF SUPPLY:
                     <p><input type="date"name="dateofsupply" required /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   <h3>Medicine Information :</h3>
	   
	   <div class="medicine_id">				 
                     MEDICINE ID
                     <p><input type="number"name="medicineid" required /></p><br/>
	   </div>
	   <div class="name ">				 
                     NEME:
                     <p><input type="text"name="name" required /></p><br/>
	   </div>
	   <div class="type">				 
                     TYPE:
                     <p><input type="text"name="type" required /></p><br/>
	   </div>
	   <div class="unit_price">				 
                     UNIT PRICE:
                     <p><input type="number"name="unitprice" required /></p><br/>
	   </div>
	   <div class="expiry_date">				 
                     EXPIRY DATE:
                     <p><input type="date"name="expirydate" required /></p><br/>
	   </div>
	   <div class="quantity">				 
                     QUANTITY:
                     <p><input type="text"name="quantity" required /></p><br/>
	   </div>
	   <div class="date_of_manufacture ">				 
                     DATE OF MANUFACTURE:
                     <p><input type="date"name="dateofmanufacture" required /></p><br/>
	   </div>
	  
	   
	   
	   
	   
	   
	   
	 	  
	  <div class="submit">
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>

</form>
</form>
</div>
</body>
</html>