<?php

 {
		include('connected.php');
		
		
        $FIRST_NAME = $_POST['firstname'];
		$MIDDLE_NAME = $_POST['middlename'];
		$LAST_NAME = $_POST['lastname'];
		$DATE_OF_APPOINTMENT = $_POST['dateofadmission'];
		$DATE_OF_BIRTH = $_POST['dateofbirth'];
		$PHONE_NUMBER	 = $_POST['mobile'];
		$CHOICE_CABIN_OR_WARD_NO = $_POST['choicecabinwardno'];
		$NURSES_ID= $_POST['nursesid'];
		$SSC = $_POST['ssc'];
		$HSC= $_POST['hsc'];
		$BSC= $_POST['bsc'];
		$OTHER= $_POST['other'];
		$ORGANIZATION= $_POST['organization'];
		$ID=$_POST['sid'];
		
		
		$query =mysqli_query($conn, "UPDATE `nurses_info` SET `FIRST_NAME` = '$FIRST_NAME', `MIDDLE_NAME` = '$MIDDLE_NAME', `LAST_NAME` = '$LAST_NAME',`DATE_OF_APPOINTMENT`='$DATE_OF_APPOINTMENT',`DATE_OF_BIRTH`='$DATE_OF_BIRTH',`PHONE_NUMBER`='$PHONE_NUMBER',`CHOICE_CABIN_OR_WARD_NO`='$CHOICE_CABIN_OR_WARD_NO',`NURSES_ID`='$NURSES_ID',`SSC`='$SSC',`HSC`='$HSC',`BSC`='$BSC',`OTHER`='$OTHER',`ORGANIZATION`='$ORGANIZATION'	 WHERE `ID` = $ID");	
		

       
		
	
		
	
		
	
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