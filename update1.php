<?php
// Connect to the database
// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "college_departments";
// $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include "DB_connect.php";

// Get data from the form
$department_id   = $_POST['department_id'];
$faculty_name = $_POST['faculty_name'];
$faculty_email = $_POST['faculty_email'];
$faculty_phone = $_POST['faculty_phone'];

// Insert data into the child table
$sql = "INSERT INTO department_faculty (department_id, faculty_name, faculty_email, faculty_phone)
        VALUES ('$department_id','$faculty_name', '$faculty_email', '$faculty_phone')";
if (mysqli_query($conn, $sql)) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>