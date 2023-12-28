<?php
include "DB_connect.php";
require "phpqrcode/qrlib.php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_POST['user_id'];

$sql = "SELECT * FROM department_details WHERE id = " . $userId;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $fileName = $row['link']; // Assuming the link column stores the file path

    // Generate the QR code using the URL of the HTML file
    $qrCodeFile ="qr/". str_replace(' ', '_', $row['Dept_Name']) . ".png"; // QR code file name
    $qrCodeContent = "https://statutable-disconti.000webhostapp.com/$fileName"; // Update with the correct URL for your server

    // Save the QR code to a file
    QRcode::png($qrCodeContent, $qrCodeFile, QR_ECLEVEL_L, 10);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nevbar.css">
    <script src="assets/js/timeout.js"></script>

    <style>
        .qr-code {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .qr-code img {
            width: 200px;
            height: 200px;
            margin-bottom: 10px;
        }
        

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <h1>Website of the department created Successfully! <br>
    Thank you for submitting the form. <br>
    <p>Redirecting to the home page in <span id="countdown">5</span> seconds...</p>
    

    <div class="qr-code">
        <h2>QR Code:</h2>
        <img src="<?php echo $qrCodeFile; ?>" alt="QR Code">
        <br>
    </div>
    <div class="button-container">
        <a href="<?php echo $qrCodeFile; ?>" download>Download QR Code</a>
        </div>
    </h1>
</body>
</html>

<?php
$conn->close();
?>