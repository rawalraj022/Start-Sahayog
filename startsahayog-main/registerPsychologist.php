<?php include_once('./layout/head.php'); ?>

<h1>Register Psychologist</h1>
<form method="post" class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Full Name:</td>
			<td><input type="text" name="fullname"></td>
		</tr>
		<tr>
			<td>Image:</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Post:</td>
			<td><input type="text" name="post"></td>
		</tr>
		<tr>
			<td>Certification:</td>
			<td><input type="file" name="certifications" accept=".pdf"></td>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td><input type="text" name="phonenumber"></td>
		</tr>
		<tr>
			<td>Specialization:</td>
			<td><input type="text" name="specialization"></td>
		</tr>
		<tr>
			<td><input type="submit" name="register" value="Register"></td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$post = $_POST['post'];
		$certifications = $_POST['certifications'];
		$phonenumber = $_POST['phonenumber'];
		$specialization = $_POST['specialization'];
		
		$sql = "INSERT INTO Psychologists (Username, FullName, Image, Post, Certifications, PhoneNumber, Specialization) VALUES ('$username','$fullname', '$image', '$post', '$certifications', '$phonenumber', '$specialization')";
		
		$result = mysqli_query($conn, $sql);
		
		if(!$result) {
			die("Query failed: " . mysqli_error($conn));
		}
		else {
			echo "Psychologist registered successfully";
		}
	}

?>

<?php include_once('./layout/foot.php'); ?>
