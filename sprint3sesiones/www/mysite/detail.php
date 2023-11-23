<?php
	$db = mysqli_connect('172.16.0.2','root','1234','mysitedb') or die('Fail');
?>
<html>
	<head>
	<style>
		/*Puro css*/
		img{
			max-width:300px;
			max-height:400px;
		}
	</style>
	</head>
	<body>
		<?php
			//Encontramos el juego al que le a clikado la persona  y cargamos
			//los datos de ese juego
			if(!isset($_GET['juego_id'])){
				die('No se ha especificado un juego');
			}
			$juego_id=$_GET['juego_id'];
			$query='SELECT * FROM tJuegos WHERE id='.$juego_id;
			$result = mysqli_query($db,$query) or die('Query error');
			$only_row=mysqli_fetch_array($result);
			//Pintamos en pantalla los datos que recogimos de antes
			echo '<h1>'.$only_row['nombre'].'</h1>';
			echo '<img src='.$only_row['url_imagen'].'></img>';
			echo '<h2>'.$only_row['año'].'</h2>';
			echo '<h2>'.$only_row['compañia'].'</h2>';
		?>
		<h3>Comentarios:</h3>
		<ul>
			<?php
				//Buscamos en la BBDD los comentarios que hay guardados
				//para mostrarlos por pantalla
				$query2='SELECT * FROM tComentarios WHERE juego_id='.$juego_id;
				$result2=mysqli_query($db,$query2) or die('Query error');
				while($row=mysqli_fetch_array($result2)){
					echo '<li>'.$row['comentario'].'<br>'.$row['fecha'].'</li>';
				}
				mysqli_close($db);
				//Creamos un formulario para crear nuevos comentarios
			?>
		</ul>
		<br>
		<p>Deja un nuevo comentario:</p>
		<form action="/comment.php"method="post">
			<textarea rows="4" cols="50" name="new_comment"></textarea><br>
			<input type="hidden" name="juego_id" value="<?php echo $juego_id;?>">
			<input type="submit" value="Comentar">
		</form>
		<a href="/logout.php">Log out</a>
	</body>
</html>
