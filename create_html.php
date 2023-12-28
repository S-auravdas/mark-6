<?php
include "DB_connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_POST['user_id'];

$sql = "SELECT * FROM department_details WHERE id = " . $userId;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $templateFile = "website.html";
    $templateContent = file_get_contents($templateFile);

    $replacements = array(
        '{name}' => $row['Dept_Name'],
        '{email}' => $row['Email'],
        '{phone}' => $row['Phone'],
        '{Dept_Mission}' => $row['Dept_Mission'],
        '{Clg_name}' => $row['Clg_name'],
        '{Address}' => $row['Address'],
        '{Dept_History}' => $row['Dept_History'],
        '{Dept_vision}' => $row['Dept_vision'],
        '{Dept_Result}' => $row['Dept_Result'],
        '{Dept_Library}' => $row['Dept_Library'],
        '{Dept_Activities}' => $row['Dept_Activities'],
        '{Dept_Alumni}' => $row['Dept_Alumni'],
        '{Dept_Road_Map}' => $row['Dept_Road_Map'],
        '{Website}' => $row['Website']
    );

    $newContent = str_replace(array_keys($replacements), array_values($replacements), $templateContent);

    $fileName = str_replace(' ', '_', $row['Dept_Name']) . ".html";
    $filePath = "html/" . $fileName;

    file_put_contents($filePath, $newContent);
    
    $sql = "UPDATE department_details SET link='$filePath' WHERE id=" . $userId;
    $conn->query($sql);
} else {
    echo "No user found for the given ID.";
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nevbar.css">
    
    <style>
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Website of the department created Successfully! <br>
    Thank you for submitting the form.

    <p>Redirecting to the home page in <span id="countdown">10</span> seconds...</p>    

    <div class="button-container">
        <a href="<?php echo $filePath; ?>" download class="btn btn-primary">Download HTML File</a>
    </div>
</h1>
<script src="assets/js/timeout.js"></script>

</body>
</html>