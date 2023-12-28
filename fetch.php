<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $selectedId = $_POST["dropdown"];

    // Fetch the selected row from the database
    $sql = "SELECT * FROM department_details  WHERE id = $selectedId";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>