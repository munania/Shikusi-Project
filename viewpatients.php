<?php
	include("database/db.php");
?>

<?php

if(isset($_GET['uniqueIdentifier'])){

    $edit_patient_identifier = $_GET['uniqueIdentifier'];

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
    <h2>Patient Record</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>uniqueIdentifier</th>
                <th>AGE</th>
                <th>WEIGHT</th>
                <th>HEIGHT</th>
                <th>Blood Pressure</th>
                <th>Temperature</th>
                <th>Phone Number</th>
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $view_patient_query = "select * from patientRecords where uniqueIdentifier='$edit_patient_identifier' ";

                $run_patient = mysqli_query($con, $view_patient_query);

                while ($row_patient=mysqli_fetch_array($run_patient)) {
                    
                    $fullname = $row_patient['fullName'];
                    $age = $row_patient['age'];
                    $weight = $row_patient['weight'];
                    $height = $row_patient['height'];
                    $pressure = $row_patient['bloodPressure'];
                    $temp = $row_patient['temperature'];
                    $phone = $row_patient['phoneNumber'];
                    $uniqueId = $row_patient['uniqueIdentifier'];
            ?>

            <tr>
                <td><?php echo $fullname; ?> </td>
                <td><?php echo $uniqueId; ?> </td>
                <td><?php echo $age; ?> </td>
                <td><?php echo $weight; ?> </td>
                <td><?php echo $height; ?> </td>
                <td><?php echo $pressure; ?> </td>
                <td><?php echo $temp; ?> </td>
                <td><?php echo $phone; ?> </td>
                <td><a href="editpatient.php?uniqueIdentifier=<?php echo $uniqueId; ?> ">Edit </a></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
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