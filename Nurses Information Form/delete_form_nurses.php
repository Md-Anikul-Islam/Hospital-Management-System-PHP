
 
 <?php

 {
		include('connected.php');
		
		$ID=$_REQUEST['sid'];
		
		$query =mysqli_query($conn, "DELETE FROM `nurses_info` WHERE `ID`='$ID'");
		
	    if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Delete Succesfully !!');
				   window.open('deletenurses.php');
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