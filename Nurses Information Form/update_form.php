<?php

  include('connected.php');
   
   $ID = $_GET['sid'];
   
   $query = mysqli_query($conn,"SELECT * FROM `nurses_info` WHERE ID='$ID'"); 
   $data = mysqli_fetch_array($query);
?>

<html>
<head>
  <title>Nurses_from</title>
  <link rel="stylesheet" href="nurses_Information_Form.css" />
 </head>





<body>
<div class="from_name" >
<h1>Nurses Update Form</h1>

<form action="update_data_form.php" method="post" enctype="multipart/form-data">

       
	  
        <div class="first_name ">
                     FIRST NAME :
                     <p><input type="text" name="firstname" value=<?php echo $data['FIRST_NAME'];?> required  /></p><br/>
	   </div>			 
	   <div class="middle_name ">				 
                     MIDDLE NAME :
                     <p><input type="text" name="middlename" value=<?php echo $data['MIDDLE_NAME'];?> required /></p><br/>
	   </div>
	   <div class="last_name ">				 
                     LAST NAME:
                     <p><input type="text"name="lastname" value=<?php echo $data['LAST_NAME'];?> required /></p><br/>
	   </div>	 
	   <div class="date_of_admission">				 
                     DATE OF APPOINTMENT :
                     <p><input type="date"name="dateofadmission" value=<?php echo $data['DATE_OF_APPOINTMENT'];?> required /></p><br/>
	   </div>
	   <div class="date_of_birth ">				 
                     DATE OF BIRTH:
                     <p><input type="date"name="dateofbirth" value=<?php echo $data['DATE_OF_BIRTH'];?> required /></p><br/>
	   </div>
	   <div class="phone">				 
                     PHONE NUMBER:
                     <p><input type="number"name="mobile" value=<?php echo $data['PHONE_NUMBER'];?> required /></p><br/>
	   </div>
	    <div class="word_no">				 
                     CHOICE CABIN OR WARD NO:
                     <p><input type="number"name="choicecabinwardno" value=<?php echo $data['CHOICE_CABIN_OR_WARD_NO'];?> required /></p><br/>
	   </div>
	   <div class="nurse_id">				 
                     NURSES ID:
                     <p><input type="number"name="nursesid" value=<?php echo $data['NURSES_ID'];?> required /></p><br/>
	   </div>
	   
	  
	 
       <h3>Result Information</h3>
       <table border="2"style="width:55%; margin-left:200px; margin-top:-300px;">
       
       <tr>
       <th>SSC INFORMATION</th>
       <td><input type="text" name="ssc"  placeholder="bord   , year  ,  cgpa" value=<?php echo $data['SSC'];?> required></td>
       </tr>
	   
	   <tr>
       <th>HSC INFORMATION</th>
       <td><input type="text" name="hsc" placeholder="bord  , year  ,  cgpa " value=<?php echo $data['HSC'];?> required></td>
       </tr>
	   

	   <tr>
       <th>BSC INFORMATION</th>
       <td><input type="text" name="bsc"  placeholder="bord  , year  ,  cgpa " value=<?php echo $data['BSC'];?> required></td>
       </tr>
	   
	   <tr>
       <th>OTHER EXAM INFORMATION</th>
       <td><input type="text" name="other" placeholder="bord  , year  ,  cgpa " value=<?php echo $data['OTHER'];?> required></td>
       </tr>

	   <tr>
       <th>ORGANIZATION</th>
       <td><input type="text" name="organization" placeholder="organization" value=<?php echo $data['ORGANIZATION'];?> required></td>
       </tr>
	     
	   
	 	  
	  <div class="submit">
	  <input type="hidden" name="sid" value="<?php echo $data['ID'];?>" />
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>

</form>

</div>
</body>
</html>