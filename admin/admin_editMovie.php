<?php
	require_once('phpscripts/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Movie</title>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
</head>
<body>
<div class="editMovieDiv">
	<h2>Edit Movie!</h2>
	<div>
	<?php
		$tbl = "tbl_movies";
		$col = "movie_id";
		$id = $_GET['id'];
		echo single_edit($tbl, $col, $id);
	?>
	</div>
	<a href="admin_index.php">Back</a>
</div>

</body>
</html>
