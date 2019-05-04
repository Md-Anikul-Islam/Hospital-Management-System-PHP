<?php

 {
		include('connected.php');
		
		
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
		$ID=$_POST['sid'];
		
		
		
		

       
		
		$query =mysqli_query($conn, "UPDATE `medicine_info` SET `SUPPLIER_NID` = '$SUPPLIER_NID', 
		                    `SUPPLIER_NAME` = '$SUPPLIER_NAME', `DATE_OF_SUPPLY` = '$DATE_OF_SUPPLY', 
							`MEDICINE_ID`='$MEDICINE_ID', `NAME`='$NAME', 
							`TYPE` = '$TYPE' , `UNIT_PRICE` = '$UNIT_PRICE' , `EXPIRY_DATE` = '$EXPIRY_DATE' ,
							`QUANTITY` = '$QUANTITY', `DATE_OF_MANUFACTURE` = '$DATE_OF_MANUFACTURE' WHERE `ID` = $ID");
		
	
		
	
		if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Update Succesfully !!');
				   window.open('update_form.php?sid=<?php echo $ID; ?>');
			</script>
			<?php
		}
		} else 
		{
			echo "   Error: ";
		}
		$conn->close();
			
			
	}

?>