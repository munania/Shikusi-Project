<?php
	include("database/db.php");
?>

<?php

if(isset($_GET['uniqueIdentifier'])){

    $delete_patient_identifier = $_GET['uniqueIdentifier'];

    $delete_patient = "delete from patientRecords where uniqueIdentifier='$delete_patient_identifier'";

    $run_delete_patient = mysqli_query($con, $delete_patient);

    if ($run_delete_patient) {
 			
        echo "<script> alert('Patient Deleted Sucessfully')</script>";

       echo "<script>window.open('patients.php', '_self')</script>";

    }
}
?>