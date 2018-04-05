<?php
    function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;
		}else{
			$error = "There was a problem accessing this information.  Sorry about your luck ;)";
			return $error;
		}
		mysqli_close($link);
	}

	function getSingle($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		$runSingle = mysqli_query($link, $querySingle);
		if($runSingle){
			return $runSingle;
		}else{
			$error = "There was a problem accessing this information.  Sorry about your luck ;)";
			return $error;
		}
		mysqli_close($link);
    }
    
	function filterResults($tbl, $col, $col2, $filter) {
		include('connect.php');

		$filterQuery = "SELECT * FROM {$tbl} WHERE {$col2} ='{$filter}'";
		//echo $filterQuery;
		$runQuery = mysqli_query($link, $filterQuery);
		if($runQuery){
			return $runQuery;
		}else{
			$error = "There was a problem accessing this information.  Sorry about your luck ;)";
			return $error;
		}
		mysqli_close($link);
	}
?>