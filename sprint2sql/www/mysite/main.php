<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			img{
				max-width: 300px;
				max-height:500px;
			}
		</style>
	</head>
	<body>
		<h1>Conexión establecida </h1>
		<?php
			//Lanza la sentencia
			$query='SELECT * FROM tJuegos';
			$result=mysqli_query($db,$query) or die('Query error');
			//Recorre el resultado
			while($row=mysqli_fetch_array($result)){
				echo '<ul>';
				echo '<li><a href="/detail.php?juego_id='.$row[0].'">Nombre: '.$row[1].'</a></li>';
				echo '<img src='.$row[2].'></img>';
				echo '<br>';
				echo '<li>Año: '.$row[3].'</li>';
				echo '<li>Compañia:'.$row[4].'</li>';
				echo '</ul>';
				echo '<hr>';
			}
			mysqli_close($db);
		?>
	</body>
</html>
