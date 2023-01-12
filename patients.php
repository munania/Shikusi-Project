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
    <title>Patients</title>
</head>
<body>



<div class="container">
    <h2>Patient Records</h2>

    <input type="text" id="search" onkeyup="myFunction()" placeholder="Search for patients..">

    <table id="myTable" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>FullName</th>
                <th>uniqueIdentifier</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0; 

                $get_patient= "select * from patientRecords";

                $run_patient = mysqli_query($con, $get_patient);

                while ($row_patient=mysqli_fetch_array($run_patient)) {
                    
                    $fullName = $row_patient['fullName'];
                    
                    $uniqueIdentifier = $row_patient['uniqueIdentifier'];
                    
                    $i++;
            ?>

            <tr id="tr">
                <td id="td" ># <?php echo $i; ?> </td>
                <td id="td" > <a href="viewpatients.php?uniqueIdentifier=<?php echo $uniqueIdentifier; ?>"> <?php echo $fullName; ?> </a> </td>
                <td id="td" ><?php echo $uniqueIdentifier; ?> </td>
                <td id="td" ><a href="editpatient.php?uniqueIdentifier=<?php echo $uniqueIdentifier; ?> ">Edit </a></td>
                <td id="td" ><a href="deletepatient.php?uniqueIdentifier=<?php echo $uniqueIdentifier; ?> ">Delete </a></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
    
</body>
</html>

<script>
    
</script>
