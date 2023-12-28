<?php
include "DB_connect.php";
include "fetch.php";
?>

!DOCTYPE html>
<html>
<head>
  <title>Add Department Faculty</title>
</head>
<body>
  <h2>Add Department Faculty</h2>
  <?php echo $row['id']; ?>
  <form action="update1.php" method="POST">
    <label for="department_id">Department ID:</label>
    <input type="text" name="department_id" required><br><br>
  
    <label for="faculty_name">Faculty Name:</label>
    <input type="text" name="faculty_name" required><br><br>
  
    <label for="faculty_email">Faculty Email:</label>
    <input type="email" name="faculty_email" required><br><br>
  
    <label for="faculty_phone">Faculty Phone:</label>
    <input type="tel" name="faculty_phone" required><br><br>
  
    <input type="submit" value="Submit">
  </form>
</body>
</html>