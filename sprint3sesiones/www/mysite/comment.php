<?php
	$db=mysqli_connect('172.16.0.2','root','1234','mysitedb') or die('Fallo');
?>
<html>
	<body>
		<?php
			session_start();
			$user_id=NULL;
			if (!empty($_SESSION['user_id'])) {
				$user_id=$_SESSION['user_id'];
			}
			//Cargamos las variables
			$juego_id=$_POST['juego_id'];
			$comentario=$_POST['new_comment'];
			//Insertamos dentro de la tabla el comentario
			$ahora=date('Y-m-d');
			//$query="INSERT INTO tComentarios(comentario,usuario_id,juego_id,fecha) VALUES ('".$comentario."',NULL,".$juego_id.",now())";
			echo '<p>si rompe</p>';
			$comprobacion=$db->prepare("INSERT INTO tComentarios(comentario,usuario_id,juego_id,fecha) VALUES (?,?,?,?)");
            $comprobacion->bind_param("siis",$comentario,$user_id,$juego_id,$ahora);
			echo $comentario;
			echo '<br>';
			echo $user_id;
			echo '<br>';
			echo $juego_id;
			echo '<br>';
			echo $ahora;
			echo '<p>eyeccion</p>';
            $comprobacion->execute();
			echo '<p>no rompio</p>';
			//Creamos lo que se muestra por pantalla
			echo "<p>Nuevo comentario ";
			echo mysqli_insert_id($db);
			echo "añadido</p>";
			echo "<a href='/detail.php?juego_id=".$juego_id."'>Volver</a>";
			$comprobacion->close();
			mysqli_close($db);
		?>
	</body>
</html>
