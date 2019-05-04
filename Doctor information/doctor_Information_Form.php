<html>


<?php

if (isset($_POST['submit'])) {
		include_once "connected.php";
		$FIRST_NAME = $_POST['firstname'];
		$MIDDLE_NAME = $_POST['middlename'];
		$LAST_NAME = $_POST['lastname'];
		$DATE_OF_APPOINTMENT = $_POST['dateofadmission'];
		$DATE_OF_BIRTH = $_POST['dateofbirth'];
		$PHONE_NUMBER	 = $_POST['mobile'];
		$CHOICE_CABIN_OR_WARD_NO = $_POST['choicecabinwardno'];
		$DOCTOR_ID= $_POST['doctorid'];
		$MEMBERSHIP = $_POST['membership'];
		$SSC = $_POST['ssc'];
		$HSC= $_POST['hsc'];
		$BSC= $_POST['bsc'];
		$OTHER= $_POST['other'];
		$ORGANIZATION= $_POST['organization'];
		
        $query = "INSERT INTO  doctor_info(FIRST_NAME, MIDDLE_NAME,  
		                                           LAST_NAME,DATE_OF_APPOINTMENT ,
												   DATE_OF_BIRTH,PHONE_NUMBER,
									               CHOICE_CABIN_OR_WARD_NO,DOCTOR_ID,MEMBERSHIP,SSC,
												   HSC,BSC,OTHER,ORGANIZATION) 
									   
									   
									   
			                   VALUES ( '".$FIRST_NAME. "', '".$MIDDLE_NAME ."' , 
							           '".$LAST_NAME."' ,'".$DATE_OF_APPOINTMENT."', '".$DATE_OF_BIRTH."' , '".$PHONE_NUMBER."' ,
									   '".$CHOICE_CABIN_OR_WARD_NO ."', '".$DOCTOR_ID ."','".$MEMBERSHIP."' , '".$SSC."' , '".$HSC ."', 
									   '".$BSC ."', '".$OTHER ."', '".$ORGANIZATION ."'	)";

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
  <title></title>
  <link rel="stylesheet" href="doctor_Information_Form.css" />
 </head>
<body>
<div class="from_name" >
<h1>Doctor Information Form</h1>

<form action="doctor_Information_Form.php" method="post">

       
	  
       <div class="first_name ">
                     FIRST NAME :
                     <p><input type="text" name="firstname" required  /></p><br/>
	   </div>			 
	   <div class="middle_name ">				 
                     MIDDLE NAME :
                     <p><input type="text" name="middlename"  required /></p><br/>
	   </div>
	   <div class="last_name ">				 
                     LAST NAME:
                     <p><input type="text"name="lastname" required /></p><br/>
	   </div>	 
	   <div class="date_of_admission">				 
                     DATE OF APPOINTMENT :
                     <p><input type="date"name="dateofadmission" required /></p><br/>
	   </div>
	   <div class="date_of_birth ">				 
                     DATE OF BIRTH:
                     <p><input type="date"name="dateofbirth" required /></p><br/>
	   </div>
	   <div class="phone">				 
                     PHONE NUMBER:
                     <p><input type="number"name="mobile" required /></p><br/>
	   </div>
	    <div class="word_no">				 
                     CHOICE CABIN OR WARD NO:
                     <p><input type="number"name="choicecabinwardno" required /></p><br/>
	   </div>
	   <div class="doctor_id">				 
                     DOCTOR ID:
                     <p><input type="number"name="doctorid" required /></p><br/>
	   </div>
	   
	   <h3>MEMBERSHIP :</h3>
	   <div class="membership">
	              
                    <input type="radio" name="membership" value="BMA" required>BMA
                    <input type="radio" name="membership" value="BMS" required>BMS
					<input type="radio" name="membership" value="AMC" required>AMC
                    <input type="radio" name="membership" value="other" required>Other
                  
       </div>
	   
	  
	 
       <h3>Result Information</h3>
       <table border="2"style="width:55%; margin-left:200px; margin-top:-300px;">
       
       <tr>
       <th>SSC INFORMATION</th>
       <td><input type="text" name="ssc"  placeholder="bord  , year  ,  cgpa" required></td>
       </tr>
	   
	   <tr>
       <th>HSC INFORMATION</th>
       <td><input type="text" name="hsc" placeholder="bord  , year  ,  cgpa" required></td>
       </tr>
	   

	   <tr>
       <th>BSC INFORMATION</th>
       <td><input type="text" name="bsc"  placeholder="bord  , year  ,  cgpa" required></td>
       </tr>
	   
	   <tr>
       <th>OTHER EXAM INFORMATION</th>
       <td><input type="text" name="other" placeholder="bord  , year  ,  cgpa" required></td>
       </tr>

	   <tr>
       <th>ORGANIZATION</th>
       <td><input type="text" name="organization" placeholder="organization" required></td>
       </tr>

	 
	  <div class="submit">
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>


</form>
</div>
</body>
</html>