<?php
	include("database/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Patient Registration</title>
</head>
<body>

<div class="container">

<h2>Patient Registration</h2>

<form action="" class="form-login" method="post">

	Full Name <input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
	Age <input type="text" class="form-control" placeholder="Age" name="age" required>
	Weight <input type="text" class="form-control" placeholder="Weight" name="weight" required>
	Height <input type="text" class="form-control" placeholder="Height" name="height" required>
	Blood Pressure <input type="text" class="form-control" placeholder="Blood Pressure" name="pressure" required>
    Temperature <input type="text" class="form-control" placeholder="Temperature" name="temperature" required>
	Phone Number <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required>
    <br>

	<button type="submit" class="btn btn-primary" name="register">REGISTER PATIENT</button>
    
</form>
<br><br>

<button type="" class="btn btn-success" name="patients"><a href="patients.php">VIEW ALL PATIENTS</a></button>


</div>
    
</body>
</html>

<?php 
	
	if (isset($_POST['register'])) {
		
		$fullName = mysqli_real_escape_string($con, $_POST['fullname']);

		$age = mysqli_real_escape_string($con, $_POST['age']);

		$weight = mysqli_real_escape_string($con, $_POST['weight']);

		$height = mysqli_real_escape_string($con, $_POST['height']);

		$bloodPressure = mysqli_real_escape_string($con, $_POST['pressure']);

		$temperature = mysqli_real_escape_string($con, $_POST['temperature']);

		$phoneNumber = mysqli_real_escape_string($con, $_POST['phonenumber']);

		$uniqueIdentifier = uniqid();

        $insert_patient = "insert into patientRecords (uniqueIdentifier, fullName, age, weight, height, bloodPressure, temperature, phoneNumber) values 
        ('$uniqueIdentifier', '$fullName', '$age', '$weight', '$height', '$bloodPressure', '$temperature', '$phoneNumber')";

 		$run_patient = mysqli_query($con, $insert_patient);

         if ($run_patient) {
 			
            echo "<script> alert('Patient Inserted Sucessfully')</script>";

        }

	}

 ?>