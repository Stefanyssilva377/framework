<?php
	
	$page = 0;
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	$perPage = 10;
	$total = count($file);
	$pages = $total / $perPage;
	$offset = $page * $perPage;
	$count = 0;
	$pagination = array();
	for($i = $offset; $i < $total; $i++){
		array_push($pagination, $file[$i]);
		$count ++;
		if($count >= 10){
			break;
		}

	}
	
	$file = $pagination;
?>