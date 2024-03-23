
<?php include_once('./layout/head.php'); ?>

<link rel="stylesheet" type="text/css" href="../login.css">
<h2>Login</h2>
<form action="./phpactions/loginAction.php" class="login-form" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php include_once('./layout/foot.php'); ?>