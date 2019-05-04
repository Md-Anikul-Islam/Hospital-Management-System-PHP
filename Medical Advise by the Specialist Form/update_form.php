<?php

  include('connected.php');
   
   $ID = $_GET['sid'];
   
   $query = mysqli_query($conn,"SELECT * FROM `medical_advise_by_the_specilist_info` WHERE ID='$ID'"); 
   $data = mysqli_fetch_array($query);
?>

<html>
<head>
  <title>Advis_from</title>
  <link rel="stylesheet" href="Medical_Advis_ by_the_Specialist_Form.css" />
 </head>





<body>
<div class="from_name" >
<h1>Medical Advis Update Form</h1>

<form action="update_data_form.php" method="post" enctype="multipart/form-data">

       
	  
<div class="date_of_admission">
                     DATE OF ADMITION:
                     <p><input type="date"name="dateofadmission" value=<?php echo $data['DATE_OF_ADMITION'];?> required /></p><br/>
	   </div>
       <div class="patient_id">
                     PATIENT ID:
                     <p><input type="number"name="patientid" value=<?php echo $data['PATIENT_ID'];?> required /></p><br/>
	   </div>
       <div class="first_name">
                     FIRST NAME:
                     <p><input type="text" name="firstname" value=<?php echo $data['FIRST_NAME'];?> required /></p><br/>
	   </div>			 
	   <div class="middle_name">				 
                     MIDDLE NAME:
                     <p><input type="text" name="middlename" value=<?php echo $data['MIDDLE_NAME'];?>  required /></p><br/>
	   </div>
	   <div class="last_name">				 
                     LAST NAME:
                     <p><input type="text"name="lastname" value=<?php echo $data['LAST_NAME'];?> required  /></p><br/>
	   </div>
	   
	   
	   
	   
	   
	   
	   <div class="date_of_birth">				 
                     DATE OF BIRTH:
                     <p><input type="date"name="dateofbirth" value=<?php echo $data['DATE_OF_BIRTH'];?> required  /></p><br/>
	   </div>
	   <div class="bed_no">				 
                     BED NO:
                     <p><input type="number"name="bedno" value=<?php echo $data['BED_NO'];?> required /></p><br/>
	   </div>
	   <div class="word_no">				 
                     WORD NO:
                     <p><input type="number"name="wordno" value=<?php echo $data['WORD_NO'];?> required /></p><br/>
	   </div>
	   
	   <h3>All above information will be printed from system:</h3>
	   <h3>...........................................................................................................................................................</h3>
	   <div class="date_of_advice">
                     DATE OF ADVICE:
                     <p><input type="date"name="doa" value=<?php echo $data['DATE_OF_ADVICE'];?> required /></p><br/>
	   </div>
       <div class="time">
                     TIME:
                     <p><input type="time"name="tm" value=<?php echo $data['TIME'];?> required /></p><br/>
	   </div>
	   <h3>Medicine Advice:</h3>
	   <h3>*******************************************************************************</h3>
	   
	   <table border="2"style="width:55%; margin-left:200px; margin-top:-370px;">
       
       <tr>
       <th>Medicine 01</th>
       <td><input type="text" name="medicine01"  placeholder="Name-Quantity-Times" value=<?php echo $data['MEDICINE01'];?> required></td>
       </tr>
	   
	   <tr>
       <th>Medicine 02</th>
       <td><input type="text" name="medicine02" placeholder="Name-Quantity-Times" value=<?php echo $data['MEDICINE02'];?> ></td>
       </tr>
	   

	   <tr>
       <th>Medicine 03</th>
       <td><input type="text" name="medicine03"  placeholder="Name-Quantity-Times" value=<?php echo $data['MEDICINE03'];?> ></td>
       </tr>
	   
	   <tr>
       <th>Medicine Above </th>
       <td><input type="text" name="medicineabobe" placeholder="Name-Quantity-Times" value=<?php echo $data['MEDICINE_ABOVE'];?> ></td>
       </tr>
	   
	  <div class="submit">
	  <input type="hidden" name="sid" value="<?php echo $data['ID'];?>" />
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>
	  </table>
	  <h3>Test Advice:</h3>
	  <h3>*******************************************************************************</h3>
	   
	  <table border="2"style="width:55%; margin-left:200px; margin-top:5px;">
       
      <tr>
      <th>Test Name</th>
      <td><input type="text" name="testname"  placeholder="Test Name........." value=<?php echo $data['TEST_NAME'];?> ></td>
      </tr>
	   
	   
	 	  
	 
</form>

</div>
</body>
</html>