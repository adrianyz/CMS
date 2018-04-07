<?php
	require_once('admin/phpscripts/config.php');

	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$col = "movies_id";
		$col2 = "movie_genre";
		$filter = $_GET['filter'];
		$getMovies = filterResults($tbl, $col, $col2, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Movie Review Site</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
</head>
<body>
<?php
	include('includes/nav.html');
	echo "<div class=\"movies\">";
	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "<div class=\"singleMovie\">
				<div class=\"imgWrapper\"><img src=\"{$row['movie_cover']}\" alt=\"{$row['movie_title']}\"></div>
				<h2>{$row['movie_title']}</h2>
				<p>Genre: {$row['movie_genre']}</p>
				<a href=\"detail.php?id={$row['movie_id']}\">Learn More...</a>
				</div>
			";
		}
	}else{
		echo "<p class=\"error\">{$getMovies}</p>";
	}
	echo "</div>";
	include('includes/footer.html');
?>
</body>
</html>