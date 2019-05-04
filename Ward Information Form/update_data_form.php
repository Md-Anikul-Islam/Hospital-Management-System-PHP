<?php

 {
		include('connected.php');
		
		
		$WARD_ID= $_POST['wardid'];
		$REGISTRAR_ID = $_POST['registrarid'];
		$NURSE_SUPERVISOR_ID= $_POST['nursesupervisorid'];
		$WARD_NAME = $_POST['wardname'];
		$REGISTRAR_NAME = $_POST['registrarname'];
		$NURSE_SUPERVISOR_NAME	 = $_POST['nursesupervisorname'];
		$SERIAL_NO= $_POST['serial_no'];
		$BED_NO = $_POST['bedno'];
		$BED_TYPE = $_POST['bedtype'];
        $RENT = $_POST['rent'];
        $EMPTY_OR_NOT_EMPTY = $_POST['emptyornotempty'];
		$ID=$_POST['sid'];
		
		
		$query =mysqli_query($conn, "UPDATE `word_info` SET `WARD_ID`='$WARD_ID',`NURSE_SUPERVISOR_ID`='$NURSE_SUPERVISOR_ID',`WARD_NAME`='$WARD_NAME',`REGISTRAR_NAME`='$REGISTRAR_NAME',`NURSE_SUPERVISOR_NAME`='$NURSE_SUPERVISOR_NAME',`SERIAL_NO`='$SERIAL_NO',`BED_NO`='$BED_NO',`BED_TYPE`='$BED_TYPE',`RENT`='$RENT',`EMPTY_OR_NOT_EMPTY`='$EMPTY_OR_NOT_EMPTY'WHERE `ID` = $ID");
		
	
		
	
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