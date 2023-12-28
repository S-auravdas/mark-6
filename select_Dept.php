<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/dropdown1.css"> 

<div class="body">
<form action="form.php" method="POST">
  <!-- <label for="dropdown">Select a row:</label> -->
  <h3>Select the department</h3>
  <div class="select">
  <select name="dropdown" id="dropdown">
    <?php
    include "DB_connect.php";

    // Fetch rows from the database table
    $sql = "SELECT `id`,`Dept_Name` FROM department_details ";
    $result = mysqli_query($conn, $sql);

    // Generate dropdown options
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='".$row['id']."'>".$row['Dept_Name']."</option>";
    }
    ?>
  </select>
  </div>
  <div class="btn.">
  <input class="btn" type="submit" name="Submit" value="Select">
  </div>
<!------------------------------------------------------------------------------------------->
</form>
</div>

