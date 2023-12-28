<?php
// $qry = "select * from department_faculty join department_details on department_faculty.department_id=department_details.id;";

//prcess to creat html file START here

if (isset($_POST['Submit'])) 
{
   // Get department name from the form
   $name = $_POST['Dept_Name'];

   //specify the desired location to store the new php file
   // $directory = 'C:/xampp/htdocs/mark3/Departments/';
   
   // Create a new PHP file with the department name as the filename
   $newFile = $name . '.html';

   // Read the pre-built HTML code from website.php
   $preBuiltCode = file_get_contents('website.html');

   // Create the new PHP file and write the pre-built HTML code to it
   file_put_contents($newFile, $preBuiltCode);
}
include "update.php";

//prcess to creat html file END here

//prcess to FILL html file START here

// Step 1: Get input values from form
$id=$_POST['id'];
$name=$_POST['Dept_Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$faculty=$_POST['Dept_Faculty'];
$college=$_POST['Clg_name'];
$address=$_POST['Address'];
$Dept_History=$_POST['Dept_History'];
$Dept_Mission=$_POST['Dept_Mission'];
$Dept_vision=$_POST['Dept_vision'];
$Dept_Result=$_POST['Dept_Result'];
$Dept_Library=$_POST['Dept_Library'];
$Dept_Activities=$_POST['Dept_Activities'];
$Dept_Alumni=$_POST['Dept_Alumni'];
$Dept_Road_Map=$_POST['Dept_Road_Map'];
$Website=$_POST['Website'];

// -------------------------------------------------------

$department_id = $_POST['department_id'];
$faculty_name = $_POST['faculty_name'];
$faculty_email = $_POST['faculty_email'];
$faculty_phone = $_POST['faculty_phone'];



// Step 2: Read the pre-built PHP file
$filename = $name .'.html';
$file = fopen($filename, 'r');
$fileContent = fread($file, filesize($filename));
fclose($file);

// Step 3: Locate the desired location in the pre-built file
// Assuming you have a placeholder {{name}} and {{email}} to be replaced
$fileContent = str_replace('{{name}}', $name, $fileContent);
$fileContent = str_replace('{{email}}', $email, $fileContent);
$fileContent = str_replace('{{phone}}', $phone, $fileContent);
$fileContent = str_replace('{{faculty}}', $faculty, $fileContent);
$fileContent = str_replace('{{college}}', $college, $fileContent);
$fileContent = str_replace('{{address}}', $address, $fileContent);
$fileContent = str_replace('{{Dept_History}}', $Dept_History, $fileContent);
$fileContent = str_replace('{{Dept_Mission}}', $Dept_Mission, $fileContent);
$fileContent = str_replace('{{Dept_vision}}', $Dept_vision, $fileContent);
$fileContent = str_replace('{{Dept_Result}}', $Dept_Result, $fileContent);
$fileContent = str_replace('{{Dept_Library}}', $Dept_Library, $fileContent);
$fileContent = str_replace('{{Dept_Activities}}', $Dept_Activities, $fileContent);
$fileContent = str_replace('{{Dept_Alumni}}', $Dept_Alumni, $fileContent);
$fileContent = str_replace('{{Dept_Road_Map}}', $Dept_Road_Map, $fileContent);
$fileContent = str_replace('{{Website}}', $Website, $fileContent);
// -----------------------------------------------
$fileContent = str_replace('{{faculty_name}}', $faculty_name, $fileContent);
$fileContent = str_replace('{{faculty_email}}', $faculty_email, $fileContent);

// Step 4: Save the updated file content back to the pre-built file
file_put_contents($filename, $fileContent);

// Additional: You can redirect the user to a success page if desired
header('Location: web_success.html');
exit;
//prcess to FILL html file END here

?>