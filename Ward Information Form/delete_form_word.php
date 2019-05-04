
 
 <?php

 {
		include('connected.php');
		
		$ID=$_REQUEST['sid'];
		
		$query =mysqli_query($conn, "DELETE FROM `word_info` WHERE `ID`='$ID'");
		
	    if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Delete Succesfully !!');
				   window.open('deleteword.php');
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