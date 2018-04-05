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
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
</head>
<body>
<?php
	include('includes/nav.html');

	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "<img src=\"{$row['movie_cover']}\" alt=\"{$row['movie_title']}\">
				<h2>{$row['movie_title']}</h2>
				<p>{$row['movie_genre']}</p>
				<a href=\"detail.php?id={$row['movie_id']}\">More Details...</a><br><br>
			";
		}
	}else{
		echo "<p class=\"error\">{$getMovies}</p>";
	}

	include('includes/footer.html');
?>
</body>
</html>