<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$tbl = "tbl_movies";
		$col = "movie_id";
		$id = $_GET['id'];
        $getMovie = getSingle($tbl, $col, $id);
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $rating = $_POST['rating'];
            $review = $_POST['review'];
            $result = addRev($id, $name, $rating, $review);
            $message = $result;
        }
        $tbl = "tbl_movies";
		$tbl2 = "tbl_reviews";
		$tbl3 = "tbl_movies_reviews";
		$col = "movie_id";
		$col2 = "review_id";
		$getReviews = reviewResults($id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie Details</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php
        echo "<div class=\"infoWrapper\">";
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
            echo "<h2>{$row['movie_title']}</h2>
            <div class=\"detailImgWrapper\"><img src=\"{$row['movie_cover']}\" alt=\"{$row['movie_title']}\"></div>
            <div class=\"detailContent\">
                <p>Movie Rating:<br>{$row['movie_rating']}</p>
                <p>Movie Genre:<br>{$row['movie_genre']}</p>
            </div>
            <div class=\"detailDesc\"><p>{$row['movie_desc']}</p></div>
			<div class=\"backBtn\"><a href=\"index.php\">Back</a></div>
			";
			
		}else{
			echo "<p>{$getMovie}</p>";
        }
        echo "</div>";

    ?>
    <div class="reviewWrapper">
        <div class="reviewForm">
            <h2>Leave a Review</h2>
            <?php
                    if(!empty($message)){
                        echo $message;
                    }
                    echo "<form action=\"detail.php?id={$id}\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"nameInput\">
                        <label>Name:</label>
                        <input type=\"text\" name=\"name\" value=\"\">
                        
                        <label>Rating:</label>
                        <select name=\"rating\">
                            <option value=\"\"></option>
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                            <option value=\"9\">9</option>
                            <option value=\"10\">10</option>
                        </select>
                    </div>
                    <br>
                    <div class=\"textBox\"><label>Review:</label><br></div>
                    <textarea type=\"text\" name=\"review\" rows\"15\" cols=\"30\"></textarea>
                    <br><br>
                    <button id=\"submitButton\" type=\"submit\" name=\"submit\">Submit Review</button>
                </form>";?>

        </div>

        <div class="reviews">
            <h2>Reviews</h2>
            <?php
                echo "<div class=\"prevReview\">";
                while($row = mysqli_fetch_array($getReviews)){
                    echo "<div class=\"singleReview\">
                    <h3 class=\"revName\">Name:{$row['review_reviewer']}</h3>
                    <h4>Rating:{$row['review_rating']}</h4>
                    <p class=\"revReview\">Review:{$row['review_content']}</p></div>";
                }
                echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>