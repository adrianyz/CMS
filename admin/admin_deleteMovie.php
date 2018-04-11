<?php
	require_once('phpscripts/config.php');
	// confirm_logged_in();
	$tbl = 'tbl_movies';
	$col = 'movies_title';
	$movies = getAll($tbl, $col);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie Delete</title>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
</head>
<body>
	<div id="deleteDiv">
		<h2>Delete a Movie.</h2>
		<div class="deletelist">
			<?php
				while($row = mysqli_fetch_array($movies)){
					echo "<div class=\"delItemDiv\">
					<p class=\"delName\">{$row['movie_title']}</p>
					<a class=\"delButton\" href=\"phpscripts/caller.php?caller_id=deleteMov&id={$row['movie_id']}\">Delete</a>
					</div> ";
				}
			?>
		</div>
		<a href="admin_index.php">Back</a>
	</div>
</body>
</html>
