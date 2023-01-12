<?php
	include("database/db.php");
?>

<?php

if(isset($_GET['uniqueIdentifier'])){

    $edit_patient_identifier = $_GET['uniqueIdentifier'];

    $view_patient_query = "select * from patientRecords where uniqueIdentifier='$edit_patient_identifier' ";

    $run_patient = mysqli_query($con, $view_patient_query);

    $patient_edit = mysqli_fetch_array($run_patient);

    $fullname = $patient_edit['fullName'];
    $age = $patient_edit['age'];
    $weight = $patient_edit['weight'];
    $height = $patient_edit['height'];
    $pressure = $patient_edit['bloodPressure'];
    $temp = $patient_edit['temperature'];
    $phone = $patient_edit['phoneNumber'];
    $uniqueId = $patient_edit['uniqueIdentifier'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>View Patient</title>
</head>
<body>

<div class="container">

<h2>Patient Update</h2>

<form action="" class="form-login" method="post">

	Full Name <input type="text" class="form-control" value="<?php echo $fullname ?>" name="fullname" required>
	Age <input type="text" class="form-control" value="<?php echo $age ?>" name="age" required>
	Weight <input type="text" class="form-control" value="<?php echo $weight ?>" name="weight" required>
	Height <input type="text" class="form-control" value="<?php echo $height ?>" name="height" required>
	Blood Pressure <input type="text" class="form-control" value="<?php echo $pressure ?>" name="pressure" required>
    Temperature <input type="text" class="form-control" value="<?php echo $temp ?>" name="temperature" required>
	Phone Number <input type="text" class="form-control" value="<?php echo $phone ?>" name="phonenumber" required>
    <br>

	<button type="submit" class="btn btn-primary" name="update">UPDATE PATIENT</button>
    
</form>
<br><br>


</div>
    
</body>
</html>

<?php 
	
	if (isset($_POST['update'])) {
		
		$fullName = mysqli_real_escape_string($con, $_POST['fullname']);

		$age = mysqli_real_escape_string($con, $_POST['age']);

		$weight = mysqli_real_escape_string($con, $_POST['weight']);

		$height = mysqli_real_escape_string($con, $_POST['height']);

		$bloodPressure = mysqli_real_escape_string($con, $_POST['pressure']);

		$temperature = mysqli_real_escape_string($con, $_POST['temperature']);

		$phoneNumber = mysqli_real_escape_string($con, $_POST['phonenumber']);

		$uniqueIdentifier = $uniqueId;

        $update_patient = "update patientRecords SET uniqueIdentifier='$uniqueIdentifier', fullName ='$fullName', age ='$age', weight ='$weight', 
        height ='$height', bloodPressure ='$bloodPressure', temperature = '$temp', phoneNumber ='$phoneNumber' WHERE uniqueIdentifier = '$uniqueIdentifier' ";


 		$run_patient = mysqli_query($con, $update_patient);

         if ($run_patient) {
 			
            echo "<script> alert('Patient Updated Sucessfully')</script>";

            echo "<script>window.open('patients.php', '_self')</script>";

        }

	}

 ?>