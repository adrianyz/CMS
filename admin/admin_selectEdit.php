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
<title>Select Edit</title>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
</head>
<body>
	
	<div id="selEditDiv">
	<h2>Select a Movie to Edit</h2>
	<div class="movieList">
		<?php
			while($row = mysqli_fetch_array($movies)){
				echo "<div class=\"moviesEdit\"><p id=\"editName\">{$row['movie_title']}</p>
				<a id=\"editButton\" href=\"admin_editMovie.php?id={$row['movie_id']}\">Edit Movie Details</a>
				</div> ";
			}
		?>
	 </div>
	 <a href="admin_index.php" class="homeButton">Back</a>
</div>
</body>
</html>
