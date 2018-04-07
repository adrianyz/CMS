<?php
	require_once('phpscripts/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Movie</title>
<link rel="stylesheet" href="styles/reset.css">
<link rel="stylesheet" href="styles/main.css">
</head>
<body>
<a class="homeBtn" href="admin_index.php">Back</a>
<div class="editMovieDiv">
	<h2>Edit Movie!</h2>
	<?php
		$tbl = "tbl_movies";
		$col = "movie_id";
		$id = $_GET['id'];
		echo single_edit($tbl, $col, $id);
	?>
</div>

</body>
</html>
