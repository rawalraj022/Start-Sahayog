<?php
// Include database connection
require_once 'connection.php';

// Retrieve blogs from the database
$sql = "SELECT * FROM Blogs";
$result = mysqli_query($conn, $sql);

// Check if there are any blogs
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . $row["Title"] . "</h2>";
        echo "<p>" . $row["Content"] . "</p>";
        echo "<p>Publication Date: " . $row["PublicationDate"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No blogs found.";
}

// Close connection
mysqli_close($conn);
?>
