<?php include_once('./layout/head.php'); ?>

<link rel="stylesheet" type="text/css" href="../login.css">
<form action="./phpactions/addBlog.php"  class="login-form" method="post">
    <input type="hidden" name="action" value="add_blog">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>

<?php include_once('./layout/foot.php'); ?>