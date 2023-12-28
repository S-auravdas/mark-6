<?php
include "variables.php";
// Update the row in the database
$sql = "UPDATE department_details  SET Dept_Name='$name', Email='$email', Phone='$phone' , 
 Clg_name='$college' , Address='$address',Dept_History='$Dept_History', Dept_Mission='$Dept_Mission', Dept_vision='$Dept_vision',Dept_Result='$Dept_Result' , Dept_Library='$Dept_Library' , Dept_Activities='$Dept_Activities',Dept_Alumni='$Dept_Alumni', Dept_Road_Map='$Dept_Road_Map',Website='$Website' WHERE id='$id'";
mysqli_query($conn, $sql);
// -------------------------
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/timeout.js"></script>
</head>
<body>
    <h1>
    Thank you for submitting the form. <br>
    <p>Redirecting to the home page in <span id="countdown">5</span> seconds...</p>
    </h1>
    <!-- Add any additional success message or content here -->
</body>
</html>