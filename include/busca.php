<?php
	$fileBusca = array();
	for($i = 0; $i < count($file); $i++){
		if(strpos($file[$i]->title, $busca) !== false){
			
			array_push($fileBusca, $file[$i]);
		}
	}
	
	$file = $fileBusca;
?>