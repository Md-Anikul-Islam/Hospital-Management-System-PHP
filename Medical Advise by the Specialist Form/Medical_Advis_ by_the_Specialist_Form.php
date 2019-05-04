<html>
<?php

if (isset($_POST['submit'])) {
		include_once "connected.php";
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
		
        $query = "INSERT INTO  medical_advise_by_the_specilist_info(DATE_OF_ADMITION,PATIENT_ID,
		                       FIRST_NAME,MIDDLE_NAME,LAST_NAME,DATE_OF_BIRTH,BED_NO,WORD_NO,DATE_OF_ADVICE,
							   TIME,MEDICINE01,MEDICINE02,MEDICINE03,MEDICINE_ABOVE,TEST_NAME) 
									   
									   
									   
			                   VALUES ('".$DATE_OF_ADMITION."','".$PATIENT_ID."','".$FIRST_NAME."',
							           '".$MIDDLE_NAME."','".$LAST_NAME."','".$DATE_OF_BIRTH."',
									   '".$BED_NO."','".$WORD_NO."','".$DATE_OF_ADVICE."',
									   '".$TIME."','".$MEDICINE01."','".$MEDICINE02."','".$MEDICINE03."',
									   '".$MEDICINE_ABOVE."','".$TEST_NAME."')";

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
  <title>patient_from</title>
  <link rel="stylesheet" href="Medical_Advis_ by_the_Specialist_Form.css" />
 </head>





<body>
<div class="from_name" >
<h1>Medical Advis by the Specialist Form</h1>

<form action="Medical_Advis_ by_the_Specialist_Form.php" method="post">
<form>
       
	   <div class="date_of_admission">
                     DATE OF ADMITION:
                     <p><input type="date"name="dateofadmission" required /></p><br/>
	   </div>
       <div class="patient_id">
                     PATIENT ID:
                     <p><input type="number"name="patientid" required /></p><br/>
	   </div>
       <div class="first_name">
                     FIRST NAME:
                     <p><input type="text" name="firstname" required /></p><br/>
	   </div>			 
	   <div class="middle_name">				 
                     MIDDLE NAME:
                     <p><input type="text" name="middlename"  required /></p><br/>
	   </div>
	   <div class="last_name">				 
                     LAST NAME:
                     <p><input type="text"name="lastname" required  /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   <div class="date_of_birth">				 
                     DATE OF BIRTH:
                     <p><input type="date"name="dateofbirth" required  /></p><br/>
	   </div>
	   <div class="bed_no">				 
                     BED NO:
                     <p><input type="number"name="bedno" required /></p><br/>
	   </div>
	   <div class="word_no">				 
                     WORD NO:
                     <p><input type="number"name="wordno" required /></p><br/>
	   </div>
	   
	   <h3>All above information will be printed from system:</h3>
	   <h3>...........................................................................................................................................................</h3>
	   <div class="date_of_advice">
                     DATE OF ADVICE:
                     <p><input type="date"name="doa" required /></p><br/>
	   </div>
       <div class="time">
                     TIME:
                     <p><input type="time"name="tm" required /></p><br/>
	   </div>
	   <h3>Medicine Advice:</h3>
	   <h3>*******************************************************************************</h3>
	   
	   <table border="2"style="width:55%; margin-left:200px; margin-top:-370px;">
       
       <tr>
       <th>Medicine 01</th>
       <td><input type="text" name="medicine01"  placeholder="Name-Quantity-Times" required></td>
       </tr>
	   
	   <tr>
       <th>Medicine 02</th>
       <td><input type="text" name="medicine02" placeholder="Name-Quantity-Times" ></td>
       </tr>
	   

	   <tr>
       <th>Medicine 03</th>
       <td><input type="text" name="medicine03"  placeholder="Name-Quantity-Times" ></td>
       </tr>
	   
	   <tr>
       <th>Medicine Above </th>
       <td><input type="text" name="medicineabobe" placeholder="Name-Quantity-Times" ></td>
       </tr>
	   
	  <div class="submit">
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>
	  </table>
	  <h3>Test Advice:</h3>
	  <h3>*******************************************************************************</h3>
	   
	   <table border="2"style="width:55%; margin-left:200px; margin-top:5px;">
       
       <tr>
       <th>Test Name</th>
       <td><input type="text" name="testname"  placeholder="Test Name........." ></td>
       </tr>
	   </table>
	  

</form>
</form>
</div>
</body>
</html>