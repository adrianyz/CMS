<?php
	
	function addMovie($cover, $title, $trailer, $genre, $rating, $desc, $grade) {
		include('connect.php');
		if($cover['type'] == "image/jpg" || $cover['type'] == "image/jpeg"){
			$targetpath = "../images/{$cover['name']}";

			if(move_uploaded_file($cover['tmp_name'], $targetpath)){
				//echo "File transfer complete";
			$th_copy = "../images/copy_{$cover['name']}";
				if(!copy($targetpath, $th_copy)){
					$message = "Whoops, that didn't work.";
					return $message;
				}
				//Add to database
			

				$qstring = "INSERT INTO tbl_movies VALUES(NULL,'{$cover['name']}','{$title}','{$trailer}','{$genre}','{$rating}','{$desc}','{$grade}')";
				// echo $qstring;
				$result = mysqli_query($link, $qstring);
				// var_dump($result);
				if($result) {
					redirect_to("admin_index.php");
				}else{
					$message = "Adding failed";
					return $message;
				}
			}

			//$size = getimagesize($targetpath);
			//echo $size[2];


		}else{
			echo "Only support .jpg, .jpeg!";
		}
		mysqli_close($link);
	}


	function deleteMovie($id){
		include('connect.php');
	
		$delString = "DELETE FROM tbl_movies WHERE movie_id = {$id}";
		$delQuery =  mysqli_query($link, $delString);
		if($delQuery){
		  redirect_to("../admin_index.php");
		}else{
		  $message = "Something went wrong :(";
		  return $message;
		}
		mysqli_close($link);
	  }
	



?>