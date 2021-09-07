<?php
	$uri = $_SERVER['REQUEST_URI'];
	$title = "Home";
	if($uri == "/album.php"){
		$title = "Álbuns";
	}elseif($uri == "/todo.php"){
		$title = "Todos";
	}elseif($uri == "/posts.php"){
		$title = "Postagens";
	}
	
	
	$busca = "";
	if(isset($_POST['busca'])){
		$busca = $_POST['busca'];
	}

?>

<!DOCTYPE html>
<html>
<head>
<link href="css/style.css?<?=time()?>" rel="stylesheet">

<meta charset="utf-8"/>
<title><?=$title?></title>
</head>
<body>

<header class="o-header" style="display: flex; flex-direction: row; align-items: flex-end;">
	<div style="width:20%;"><a href="/"><img src="images/logo-framework.png" width="100" /></a></div>
	<div style="width:80%">
		<ul>
			<li><a href="posts.php" class="<?=$title == "Postagens" ? "active" : ""?>">Postagens</a> | </li>
			<li><a href="album.php" class="<?=$title == "Álbuns" ? "active" : ""?>">Álbuns</a> | </li>
			<li><a href="todo.php" class="<?=$title == "Todos" ? "active" : ""?>">Todos</a> </li>
			<li>
				<form action="" method="POST">
					<input type="text" placeholder="Digite o Título" name="busca"  />
					<input type="submit"  value="Buscar" />
				</form>
			</li>

		</ul>
	</div>
</header>