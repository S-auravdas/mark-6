<?php

    include "DB_connect.php";

    $qry = "select * from department_faculty join department_details on department_faculty.department_id=department_details.id;";

    $result = mysqli_query($conn,$qry);

    while ($row = $result->fetch_assoc()) {
        echo $row["faculty_name"]."\tid: ";
        echo $row["id"]."\tdepartment_id: ";
        echo $row["department_id"]."\tfaculty_id: ";
        echo $row["faculty_phone"]."<br>";
    
    }
?>