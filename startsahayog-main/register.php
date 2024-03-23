<?php include_once('./layout/head.php'); ?>

<h2>Register</h2>
<link rel="stylesheet" type="text/css" href="../login.css">
<form action="./phpactions/registerAction.php"  class="login-form" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php include_once('./layout/foot.php'); ?>
