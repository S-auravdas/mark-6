<?php
include "DB_connect.php";

$name=$_POST['Dept_Name'];

$sql = "INSERT INTO `department_details` (`id`, `link`, `Dept_Name`, `Email`, `Phone`, `Dept_Faculty`, `Clg_name`, `Address`, `Dept_History`, `Dept_Mission`, `Dept_vision`, `Dept_Result`, `Dept_Library`, `Dept_Activities`, `Dept_Alumni`, `Dept_Road_Map`, `Website`) VALUES (NULL, '', '$name', '', '', '', '', '', '', '', '', '', '', '', '', '', '') ";

$rs = mysqli_query($conn, $sql);
include "select_Dept.php";
?>