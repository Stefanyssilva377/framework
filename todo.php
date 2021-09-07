<?php
	require("include/header.php");
?>
<main   class="o-main">
<?php
	$file = file_get_contents('https://jsonplaceholder.typicode.com/todos');
	

	$file = json_decode($file);
	if($busca != ""){
		require("include/busca.php");
	}
	
	require("include/paginacao.php");
?>
	<table>
		<thead>
			<th>ID</th>
			<th>User ID</th>
			<th>Titulo</th>
			<th>Completado</th>
		</thead>
<?php
	for($i = 0; $i < count($file); $i++){
		$completado = array(
			"Incompleto", "Completo"
		)
?>
		<tr>
			<td><?=$file[$i]->id?></td>
			<td><?=$file[$i]->userId?></td>
			<td><?=$file[$i]->title?></td>
			<td><?=$completado[$file[$i]->completed]?></td>
		</tr>
<?php
	}
?>
	</table>




</main>

<?php
	require("include/footer.php");
?>
