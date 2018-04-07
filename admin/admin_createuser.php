<?php
	require_once('phpscripts/config.php');
	// confirm_logged_in();

	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$lvllist = $_POST['lvllist'];
		if(empty($lvllist)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $lvllist);
			$message = $result;
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
<title>Create User</title>
</head>
<body>
	<h2>Create User</h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post" class="userCreateForm">
		<label>First Name:</label>
		<input type="text" name="fname" value=""><br><br>
		<label>Username:</label>
		<input type="text" name="username" value=""><br><br>
		<label>Password:</label>
		<input type="text" name="password" value=""><br><br>
		<label>Email:</label>
		<input type="text" name="email" value=""><br><br>
		<select name="lvllist">
			<option value="">Select User Level</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select><br><br>
		<input type="submit" name="submit" value="Create User">
	</form>
	<a href="admin_index.php">Back</a>
</body>
</html>