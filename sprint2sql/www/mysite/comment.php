<?php
	$db=mysqli_connect('localhost','root','1234','mysitedb') or die('Fallo');
?>
<html>
	<body>
		<?php
			//Cargamos las variables
			$juego_id=$_POST['juego_id'];
			$comentario=$_POST['new_comment'];
			//Insertamos dentro de la tabla el comentario
			$query="INSERT INTO tComentarios(comentario,usuario_id,juego_id,fecha) VALUES ('".$comentario."',NULL,".$juego_id.",now())";
		mysqli_query($db,$query) or die('Error');
		//Creamos lo que se muestra por pantalla
		echo "<p>Nuevo comentario ";
		echo mysqli_insert_id($db);
		echo "añadido</p>";
		echo "<a href='/detail.php?juego_id=".$juego_id."'>Volver</a>";
		mysqli_close($db);
		?>
	</body>
</html>
