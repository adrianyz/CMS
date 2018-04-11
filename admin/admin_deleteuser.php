<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
</head>
<body>
	<h2>Say goodbye to...</h2>
	<div class="deleteU">
	<?php
		while($row = mysqli_fetch_array($users)){
			echo "<div class=\"users\"><p>{$row['user_fname']}</p> <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">See ya!</a><br> </div>";
		}
	?>
	</div>
	<a href="admin_index.php">Back</a>
</body>
</html>