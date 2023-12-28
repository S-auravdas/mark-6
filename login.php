<?php
// Retrieve the user credentials from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database (replace the placeholders with your database credentials)
$host = 'localhost';
$db = 'college_departments';
$user = 'root';
$pass = '';

$dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Prepare the SQL statement
$stmt = $dbh->prepare('SELECT * FROM users WHERE username = :username');
$stmt->bindParam(':username', $username);
$stmt->execute();

// Fetch the user from the database
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Validate the user credentials
if ($user && password_verify($password, $user['password'])) {
  // Successful login, redirect to the user's dashboard or homepage
  header('Location: work.html');
  exit;
} else {
  // Invalid credentials, redirect back to the login page with an error message
  header('Location: login.html?error=1');
  exit;
}