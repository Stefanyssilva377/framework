<footer class="o-footer">
	
	<ul style="justify-content: center">
		
	<?php
		if($uri != "/"){
			if($page > 0){
				echo "<li> <a href='?page=".($page-1)."'> << </a> </li>";
			}
			
			for($i = 0; $i < $pages; $i++){
				echo "<li><a href='?page=".$i."' class='".(($page) == $i ? 'active' : '')."'>".($i + 1)."</a></li>";
			}
			
			if(($page+1) < $pages){
				echo "<li> <a href='?page=".($page+1)."'> >> </a> </li>";
			}
		}
	?>
		
	</ul>

</footer>





</body>
</html>