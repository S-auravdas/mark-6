<?php
include "DB_connect.php";
include "fetch.php";

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
      <div class="text">
         Department Information Form
         <p>Department ID : <?php echo $row['id']; ?></p>
      </div>
      <form name="info_form" class="info_form" method="post" action="update.php">
      <div class="input-data">
               <?php echo "<input type='hidden' name='id' value='".$row['id']."' required >";?>
            </div>
            <div class="form-row">
            <div class="input-data">
               <?php echo "<input type='text' name='Dept_Name'  value='".$row['Dept_Name']."' required ><br>";?>
               <div class="underline"></div>
               <label for="Dept_name">Department Name</label>
            </div>
            <div class="input-data">
            <?php echo "<input type='text' name='Phone' value='".$row['Phone']."' required >";?>
               <div class="underline"></div>
               <label for="Dept_phone">Department Phone</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
            <?php echo "<input type='text' name='Email'  value='".$row['Email']."' required >";?>
               <div class="underline"></div>
               <label for="email">Email Address</label>
            </div>
            <div class="input-data">
            <?php echo "<input type='text' name='Website'  value='".$row['Website']."' required >";?>
               <div class="underline"></div>
               <label for="College Website">College Website</label>
            </div>
         </div>
         <div class="form-row">

            <div class="input-data">
            <?php echo "<input type='text' name='Clg_name'  value='".$row['Clg_name']."' required >";?>
               <div class="underline"></div>
               <label for="College Name">College Name</label>
            </div>
         </div>
<!------------------------------------------------------------------------------------------------------------------------>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_History" id="Dept_History" required><?php echo $row['Dept_History']; ?></textarea>
               <div class="underline"></div>
               <label for="Departmental History">Departmental History</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_Mission" id="Dept_Mission" required><?php echo $row['Dept_Mission']; ?></textarea>
               <div class="underline"></div>
               <label for="Mision of the department">Mision of the department</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_vision" id="Dept_vision" required><?php echo $row['Dept_vision']; ?></textarea>
               <div class="underline"></div>
               <label for="Vision of the department">Vision of the department</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_Result" id="Dept_Result" required><?php echo $row['Dept_Result']; ?></textarea>
               <div class="underline"></div>
               <label for="Departmental Result">Departmental Result</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_Library" id="Dept_Library" required><?php echo $row['Dept_Library']; ?></textarea>
               <div class="underline"></div>
               <label for="Departmental library Records">Departmental library Records</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_Activities" id="Dept_Activities" required><?php echo $row['Dept_Activities']; ?></textarea>
               <div class="underline"></div>
               <label for="Departmental Activities">Departmental Activities</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_Alumni" id="Dept_Alumni" required><?php echo $row['Dept_Alumni']; ?></textarea>
               <div class="underline"></div>
               <label for="Departmental Alumni Record">Departmental Alumni Record</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <textarea name="Dept_Road_Map" id="Dept_Road_Map" required><?php echo $row['Dept_Road_Map']; ?></textarea>
               <div class="underline"></div>
               <label for="Departmental Road Map">Departmental Road Map</label>
            </div>   
         </div>
         <!--WEBSITE fill-->
         <!--Department History-->
         <!--Courses in form-->
         <div class="form-row">
               <div class="input-data textarea">
                  <textarea name="Address" id="Address" required><?php echo $row['Address']; ?></textarea>
                  <br>
                  <div class="underline"></div>
                  <label for="Address">Address</label>
               </div>
               <div class="form-row">
            <div class="input-data textarea">
               <p>To Create departmental faculty profiles click <a href="insert_faculty.php">HERE</a></P>
            </div>
         </div>   
               <!--<div>
                  <input type="file" name="Image" required>
               </div>-->
         </div>
      <div class="btn.">
         <input class="btn" type="submit" name="Submit" id="Submit" value="SUBMIT">
      </div>
      </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

