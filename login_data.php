<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "ranit";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

// Query the database to check if the provided credentials match
$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare statement failed: " . $conn->error);
}

// Bind the parameters
$stmt->bind_param("ss", $email, $password); // Assuming password is stored as plain text in this example

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // User exists and credentials are correct
    session_start();
    $_SESSION['email'] = $email;
    header("Location: landing.html"); // Redirect to the user's dashboard or a protected page
} else {
    // Incorrect credentials
    echo '<script>';
    echo 'alert("Invalid Username or Password");';
    echo 'window.location="login.php";';
    echo '</script>';
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
