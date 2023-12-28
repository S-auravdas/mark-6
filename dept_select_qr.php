<!DOCTYPE html>
<html>
<head>
    <title>User ID Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/dropdown1.css"> 

</head>
<body>
  <div class="body">
    <form action="qr.php" method="post">
        <!-- <label for="user_id">Select User:</label> -->
        <h3>Select the department</h3>
        <div class="select">
        <select name="user_id" id="user_id">
            <?php
            // Connect to the database
            include "DB_connect.php";
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Fetch users from the database table
            $sql = "SELECT id, Dept_Name FROM department_details";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['Dept_Name'] . "</option>";
                }
            } else {
                echo "<option value=''>No users found</option>";
            }
            
            $conn->close();
            ?>
        </select>
        </div>
        <div class="btn.">
        <input class="btn" type="submit" name="Submit" value="Select">
        </div>
    </form>
  </div>
</body>
</html>