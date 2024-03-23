<?php
// Include database connection
require_once '../connection.php';
print_r($_POST);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);

    $sql = "INSERT INTO Users (Username, Email, Password) VALUES ('$username','$email', '$password')";
    // Execute the query
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        die("Query failed: " . mysqli_error($conn));
        header("Location: ../login.php");
    }else{
        header("Location: ../index.php");
    }

}

// Close connection
mysqli_close($conn);

exit();
?>