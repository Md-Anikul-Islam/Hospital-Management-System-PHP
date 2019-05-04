<?php

 {
		include('connected.php');
		
		
		$DATE_OF_ADMITION = $_POST['dateofadmission'];
		$FIRST_NAME = $_POST['firstname'];
		$MIDDLE_NAME = $_POST['middlename'];
		$LAST_NAME = $_POST['lastname'];
		$DATE_OF_BIRTH = $_POST['dateofbirth'];
		$PHONE_NUMBER_01	 = $_POST['mobile01'];
		$PHONE_NUMBER_02 = $_POST['mobile02'];
		
		
		$STREET_NO_VILLAGE = $_POST['village'];
        $STREET_NEME = $_POST['streetname'];
        $AREA = $_POST['area'];
        $THANA = $_POST['thana'];
		$DISTRICT = $_POST['district'];
		
		
		
					 
        $PROFESSION = $_POST['profession'];
        $AMOUNT_DEPOSITED = $_POST['amountdeposited'];
        $CHOICE_CABIN_OR_WARD_NO = $_POST['choicecabinwardno'];
        $SIGNATURE_WITH_DATE = $_POST['signaturewithdate'];
        $RELATION_WITH_THE_PATIENT = $_POST['rlationwiththepatient'];
		
		$GENDER = $_POST['gender'];
		$ID=$_POST['sid'];
		
		
		$query =mysqli_query($conn, "UPDATE `patient_basic_info` SET `DATE_OF_ADMITION`='$DATE_OF_ADMITION',`FIRST_NAME`='$FIRST_NAME',`MIDDLE_NAME`='$MIDDLE_NAME',`LAST_NAME`='$LAST_NAME',`DATE_OF_BIRTH`='$DATE_OF_BIRTH',`PHONE_NUMBER_01`='$PHONE_NUMBER_01',`PHONE_NUMBER_02`='$PHONE_NUMBER_02',`STREET_NO_VILLAGE`='$STREET_NO_VILLAGE',`STREET_NEME`='$STREET_NEME',`AREA`='$AREA',`THANA`='$THANA',`DISTRICT`='$DISTRICT',`PROFESSION`='$PROFESSION',`AMOUNT_DEPOSITED`='$AMOUNT_DEPOSITED',`CHOICE_CABIN_OR_WARD_NO`='$CHOICE_CABIN_OR_WARD_NO',`SIGNATURE_WITH_DATE`='$SIGNATURE_WITH_DATE',`RELATION_WITH_THE_PATIENT`='$RELATION_WITH_THE_PATIENT',`GENDER`='$GENDER' WHERE `ID` = $ID");
		
	
		
	
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