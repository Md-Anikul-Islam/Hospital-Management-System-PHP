<?php

 {
		include('connected.php');
		
		$DATE_OF_ADMITION = $_POST['dateofadmission'];
		$PATIENT_ID= $_POST['patientid'];
		$FIRST_NAME = $_POST['firstname'];
		$MIDDLE_NAME = $_POST['middlename'];
		$LAST_NAME = $_POST['lastname'];
	    $DATE_OF_BIRTH = $_POST['dateofbirth'];
		$BED_NO	 = $_POST['bedno'];
		$WORD_NO = $_POST['wordno'];
		$DATE_OF_ADVICE= $_POST['doa'];
		$TIME = $_POST['tm'];
		$MEDICINE01= $_POST['medicine01'];
		$MEDICINE02= $_POST['medicine02'];
		$MEDICINE03= $_POST['medicine03'];
		$MEDICINE_ABOVE= $_POST['medicineabobe'];
		$TEST_NAME= $_POST['testname'];
		$ID=$_POST['sid'];
		
		
		
		

       
		
		$query =mysqli_query($conn, "UPDATE `medical_advise_by_the_specilist_info` SET `DATE_OF_ADMITION` = '$DATE_OF_ADMITION', 
		                    `PATIENT_ID` = '$PATIENT_ID', `FIRST_NAME` = '$FIRST_NAME', 
							`MIDDLE_NAME`='$MIDDLE_NAME', `LAST_NAME`='$LAST_NAME', 
							`DATE_OF_BIRTH` = '$DATE_OF_BIRTH' , `BED_NO` = '$BED_NO' , `WORD_NO` = '$WORD_NO' ,
							`DATE_OF_ADVICE` = '$DATE_OF_ADVICE', `TIME` = '$TIME',`MEDICINE01`='$MEDICINE01',`MEDICINE02`='$MEDICINE02',`MEDICINE03`='$MEDICINE03',`MEDICINE_ABOVE`='$MEDICINE_ABOVE',`TEST_NAME`='$TEST_NAME' WHERE `ID` = $ID");
		
	
		
	
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