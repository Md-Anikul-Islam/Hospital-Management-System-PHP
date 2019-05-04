<?php

   include('connected.php');
   
   $ID = $_GET['sid'];
   
   $query = mysqli_query($conn,"SELECT * FROM `patient_basic_info` WHERE ID='$ID'"); 
   $data = mysqli_fetch_array($query);
?>

<html>
<head>
  <title>Patient_from</title>
  <link rel="stylesheet" href="patient_admited_from.css" />
</head>





<body>
<div class="from_name" >

<h1>Patient Info Update Form</h1>

<form action="update_data_form.php" method="post" enctype="multipart/form-data">

       
	   <div class="date_of_admission">
                     DATE OF ADMITION:
                     <p><input type="date"name="dateofadmission" value=<?php echo $data['DATE_OF_ADMITION'];?> required /></p><br/>
	   </div>






       <div class="first_name">
                     FIRST NAME:
                     <p><input type="text" name="firstname" value=<?php echo $data['FIRST_NAME'];?> required /></p><br/>
	   </div>			 
	   <div class="middle_name">				 
                     MIDDLE NAME:
                     <p><input type="text" name="middlename" value=<?php echo $data['MIDDLE_NAME'];?> required /></p><br/>
	   </div>
	   <div class="last_name">				 
                     LAST NAME:
                     <p><input type="text"name="lastname" value=<?php echo $data['LAST_NAME'];?> required /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   <div class="date_of_birth">				 
                     DATE OF BIRTH:
                     <p><input type="date"name="dateofbirth" value=<?php echo $data['DATE_OF_BIRTH'];?> required  /></p><br/>
	   </div>
	   <div class="mobile01">				 
                     PHONE NUMBER 01:
                     <p><input type="number"name="mobile01" value=<?php echo $data['PHONE_NUMBER_01'];?> required /></p><br/>
	   </div>
	   <div class="mobile02">				 
                     PHONE NUMBER 02:
                     <p><input type="number"name="mobile02" value=<?php echo $data['PHONE_NUMBER_02'];?> required /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   <h3>Present Address :</h3>
	   <div class="village">				 
                     STREET NO / VILLAGE:
                     <p><input type="text"name="village" value=<?php echo $data['STREET_NO_VILLAGE'];?> required /></p><br/>
	   </div>
	   <div class="street_name ">				 
                     STREET NEME:
                     <p><input type="text"name="streetname" value=<?php echo $data['STREET_NEME'];?> required /></p><br/>
	   </div>
	   <div class="area">				 
                     AREA:
                     <p><input type="text"name="area" value=<?php echo $data['AREA'];?> required /></p><br/>
	   </div>
	   <div class="thana">				 
                     THANA:
                     <p><input type="text"name="thana" value=<?php echo $data['THANA'];?> required /></p><br/>
	   </div>
	   <div class="district">				 
                     DISTRICT:
                     <p><input type="text"name="district" value=<?php echo $data['DISTRICT'];?> required /></p><br/>
	   </div>
	  


	   <h3>Others:</h3>
	   <div class="profession">				 
                     PROFESSION:
                     <p><input type="text"name="profession" value=<?php echo $data['PROFESSION'];?> required /></p><br/>
	   </div>
	   <div class="amount_deposited ">				 
                     AMOUNT DEPOSITED:
                     <p><input type="number"name="amountdeposited" value=<?php echo $data['AMOUNT_DEPOSITED'];?> required /></p><br/>
	   </div>
	   <div class="choice_cabin_ward_no">				 
                     CHOICE CABIN OR WARD NO:
                     <p><input type="number"name="choicecabinwardno" value=<?php echo $data['CHOICE_CABIN_OR_WARD_NO'];?> required /></p><br/>
	   </div>
	   <div class="signature_with_date">				 
                     SIGNATURE WITH DATE:
                     <p><input type="text"name="signaturewithdate" value=<?php echo $data['SIGNATURE_WITH_DATE'];?> required /></p><br/>
	   </div>
	   <div class="rlation_with_the_patient">				 
                     RELATION WITH THE PATIENT:
                     <p><input type="text"name="rlationwiththepatient" value=<?php echo $data['RELATION_WITH_THE_PATIENT'];?> required /></p><br/>
	   </div>
	   
	   
	   
	    <h3>Gender :</h3>
	    <div class="gender">
	              
                    <input type="radio" name="gender" value=<?php echo $data['GENDER'];?> value="female">Female
                    <input type="radio" name="gender" value=<?php echo $data['GENDER'];?> value="male">Male
                    <input type="radio" name="gender" value=<?php echo $data['GENDER'];?> value="other">Other
                  
        </div>
	   
	  
	    
	 	  
	  <div class="submit">
	  <input type="hidden" name="sid" value="<?php echo $data['ID'];?>" />
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>

</form>

</div>
</body>
</html>