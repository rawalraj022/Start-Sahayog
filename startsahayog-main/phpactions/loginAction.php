<?php
// Include database connection
require_once '../connection.php';
print_r($_POST);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);

    // Construct the SQL query
    $sql = "SELECT * FROM Users WHERE Username = '$username'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        // Fetch user data
        $row = mysqli_fetch_assoc($result);
        // Verify password
        if ($password == $row['Password']) {
            // Store username in session
            $_SESSION['username'] = $username;
            echo "session stored";
            header("Location: ../index.php");
            exit();
        } else {
            // Password is incorrect
            echo "Incorrect";
            $error = "Invalid username or password.";
        }
    } else {
        // User does not exist
        $error = "Invalid username or password.";
    }

    // Free result set
    mysqli_free_result($result);
}

// Close connection
mysqli_close($conn);

exit();
?>