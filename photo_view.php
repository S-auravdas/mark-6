<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_departments";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM department_images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<img src="'.$row["image_path"].'" alt="'.$row["image_name"].'">';
    }
} else {
    echo "No images found.";
}
$conn->close();
?>