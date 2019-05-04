
 
 <?php

 {
		include('connected.php');
		
		$ID=$_REQUEST['sid'];
		
		$query =mysqli_query($conn, "DELETE FROM `patient_basic_info` WHERE `ID`='$ID'");
		
	    if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Delete Succesfully !!');
				   window.open('deletpatient.php');
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