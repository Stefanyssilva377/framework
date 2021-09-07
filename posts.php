<?php
	require("include/header.php");
?>

<main   class="o-main">
<?php
	$file = file_get_contents('https://jsonplaceholder.typicode.com/posts');
	

	$file = json_decode($file);
	
	if($busca != ""){
		require("include/busca.php");
	}
	
	require("include/paginacao.php");
?>
	<table >
		<thead>
			<th style="width: 5%">ID</th>
			<th style="width: 10%">User ID</th>
			<th style="width: 35%">Titulo</th>
			<th style="width: 50%">Post</th>
		</thead>
<?php
	for($i = 0; $i < count($file); $i++){
?>
		<tr>
			<td ><?=$file[$i]->id?></td>
			<td ><?=$file[$i]->userId?></td>
			<td ><?=$file[$i]->title?></td>
			<td ><?=$file[$i]->body?></td>
		</tr>
<?php
	}
	
	
?>
	</table>
	
	<?php
		if(count($file) == 0){
			echo "<center><h3>Nenhum resultado encontrado!</h3></center>";
		}
	?>
</main>



<?php
	require("include/footer.php");
?>
