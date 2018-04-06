<?php
    function addRev($id, $name, $rating, $review){
        include('connect.php');
        if(!empty($name) && !empty($rating) && !empty($review)){
            $qstring = "INSERT INTO tbl_reviews VALUES (NULL, '{$name}','{$rating}','{$review}')";
            $revResult = mysqli_query($link, $qstring);
            if($revResult){
                $qstring2 = "SELECT * FROM tbl_reviews ORDER BY review_id DESC LIMIT 1";
                $revResult2 = mysqli_query($link, $qstring2);
                $row = mysqli_fetch_array($revResult2);
                $revID = $row['review_id'];
                $qstring3 = "INSERT INTO tbl_movies_reviews VALUES (NULL, '{$id}', '{$revID}') ";
                $movieResult3 = mysqli_query($link, $qstring3);
                $message = "Thanks for your review!";
                return $message;
            }else{
                $message = "Error, please contact admin and try again.";
                return $message;
            }
        }else{
            $message = "Please fill out all required fields.";
            return $message;
        }

        mysqli_close($link);
    }
?>
