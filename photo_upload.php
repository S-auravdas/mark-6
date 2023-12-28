<?php

// Database connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "college_departments";
include "DB_connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_POST['department_id'];

$sql = "SELECT * FROM department_details WHERE department_id = " . $userId;
$result = $conn->query($sql);


// Image upload and database insertion
if (isset($_FILES['images'])) {
    $errors = array();
    $uploadedFiles = array();
    $extension = array("jpeg", "jpg", "png", "gif");
    $UploadFolder = "uploads";

    $counter = 0;

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $temp = $_FILES['images']['tmp_name'][$key];
        $name = $_FILES['images']['name'][$key];

        if (empty($temp)) {
            break;
        }

        $counter++;
        $UploadOk = true;

        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if (in_array($ext, $extension) === false) {
            $UploadOk = false;
            array_push($errors, $name . " is an invalid file type.");
        }

        if ($UploadOk === true) {
            move_uploaded_file($temp, $UploadFolder . "/" . $name);
            array_push($uploadedFiles, $name);
            $sql = "INSERT INTO department_images (image_name, image_path, department_id) VALUES ('$name', '$UploadFolder/$name','$userId')";
            if ($conn->query($sql) === false) {
                array_push($errors, "Error: " . $sql . "<br>" . $conn->error);
            }
        }
    }

    $conn->close();

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error . "<br/>";
        }
    }

    if ($counter > 0) {
        if (count($errors) == 0) {
            echo $counter . " file(s) are successfully uploaded.";
        }
    } else {
        echo "Please, select file(s) to upload.";
    }
}

?>