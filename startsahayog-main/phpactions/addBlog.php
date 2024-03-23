<?php include_once('./layout/head.php'); ?>

<?php
// Include database connection
require_once '../connection.php';
if (isset($_POST)) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user = $_SESSION['username'];
    $sql = "INSERT INTO Blogs (Title, Content, UserID) VALUES ('$title', '$content', '$user')";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    else {
        echo "Blog added successfully";
    }
}
?>
<?php include_once('./layout/foot.php'); ?>
