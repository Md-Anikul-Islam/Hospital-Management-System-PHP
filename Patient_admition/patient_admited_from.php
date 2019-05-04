<html>


<?php

if (isset($_POST['submit'])) {
		include_once "connected.php";
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
		
		
		
		
		
		$query = "INSERT INTO   patient_basic_info(DATE_OF_ADMITION ,FIRST_NAME, MIDDLE_NAME,  
		                               LAST_NAME,DATE_OF_BIRTH,PHONE_NUMBER_01,
									   PHONE_NUMBER_02,STREET_NO_VILLAGE,STREET_NEME,
									   AREA,THANA,DISTRICT,PROFESSION,AMOUNT_DEPOSITED,
									   CHOICE_CABIN_OR_WARD_NO,SIGNATURE_WITH_DATE,RELATION_WITH_THE_PATIENT ,GENDER) 
									   
									   
									   
			                   VALUES ('".$DATE_OF_ADMITION."', '".$FIRST_NAME. "', '".$MIDDLE_NAME ."' , 
							           '".$LAST_NAME."' , '".$DATE_OF_BIRTH."' , '".$PHONE_NUMBER_01."' , 
									   '".$PHONE_NUMBER_02."' ,'".$STREET_NO_VILLAGE."','". $STREET_NEME."', 
									   '".$AREA ."','". $THANA."', '".$DISTRICT."','".$PROFESSION."', 
									   '".$AMOUNT_DEPOSITED."', '".$CHOICE_CABIN_OR_WARD_NO ."', 
									   '".$SIGNATURE_WITH_DATE."','".$RELATION_WITH_THE_PATIENT."' , '".$GENDER."'  )";

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
  <link rel="stylesheet" href="patient_admited_from.css" />
 </head>





<body>
<div class="from_name" >
<h1>Patient Admission Form</h1>

<form action="patient_admited_from.php" method="post">
<form>
       
	   <div class="date_of_admission">
                     DATE OF ADMITION:
                     <p><input type="date"name="dateofadmission" required /></p><br/>
	   </div>






       <div class="first_name">
                     FIRST NAME:
                     <p><input type="text" name="firstname" required /></p><br/>
	   </div>			 
	   <div class="middle_name">				 
                     MIDDLE NAME:
                     <p><input type="text" name="middlename" required /></p><br/>
	   </div>
	   <div class="last_name">				 
                     LAST NAME:
                     <p><input type="text"name="lastname" required /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   <div class="date_of_birth">				 
                     DATE OF BIRTH:
                     <p><input type="date"name="dateofbirth" required  /></p><br/>
	   </div>
	   <div class="mobile01">				 
                     PHONE NUMBER 01:
                     <p><input type="number"name="mobile01" required /></p><br/>
	   </div>
	   <div class="mobile02">				 
                     PHONE NUMBER 02:
                     <p><input type="number"name="mobile02" required /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   <h3>Present Address :</h3>
	   <div class="village">				 
                     STREET NO / VILLAGE:
                     <p><input type="text"name="village" required /></p><br/>
	   </div>
	   <div class="street_name ">				 
                     STREET NEME:
                     <p><input type="text"name="streetname" required /></p><br/>
	   </div>
	   <div class="area">				 
                     AREA:
                     <p><input type="text"name="area" required /></p><br/>
	   </div>
	   <div class="thana">				 
                     THANA:
                     <p><input type="text"name="thana" required /></p><br/>
	   </div>
	   <div class="district">				 
                     DISTRICT:
                     <p><input type="text"name="district" required /></p><br/>
	   </div>
	  


	   <h3>Others:</h3>
	   <div class="profession">				 
                     PROFESSION:
                     <p><input type="text"name="profession" required /></p><br/>
	   </div>
	   <div class="amount_deposited ">				 
                     AMOUNT DEPOSITED:
                     <p><input type="number"name="amountdeposited" required /></p><br/>
	   </div>
	   <div class="choice_cabin_ward_no">				 
                     CHOICE CABIN OR WARD NO:
                     <p><input type="number"name="choicecabinwardno" required /></p><br/>
	   </div>
	   <div class="signature_with_date">				 
                     SIGNATURE WITH DATE:
                     <p><input type="text"name="signaturewithdate" required /></p><br/>
	   </div>
	   <div class="rlation_with_the_patient">				 
                     RELATION WITH THE PATIENT:
                     <p><input type="text"name="rlationwiththepatient" required /></p><br/>
	   </div>
	   
	   
	   
	    <h3>Gender :</h3>
	    <div class="gender">
	              
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                  
        </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	 	  
	  <div class="submit">
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>

</form>
</form>
</div>
</body>
</html>