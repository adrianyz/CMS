<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$tbl = "tbl_movies";
		$col = "movie_id";
		$id = $_GET['id'];
		$getMovie = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
</head>
<body>

	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "<img src=\"{$row['movie_cover']}\" alt=\"{$row['movie_title']}\">
			<p>{$row['movie_title']}</p>
			<p>{$row['movie_rating']}</p>
            <p>{$row['movie_genre']}</p>
            <p>{$row['movie_desc']}</p>
			<a href=\"index.php\">Back...</a>
			";
			
		}else{
			echo "<p>{$getMovie}</p>";
		}

	?>

</body>
</html>