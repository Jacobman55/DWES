<?php
	$db = mysqli_connect('172.16.0.2','root','1234','mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			img{
				/*CSS*/
				max-width: 300px;
				max-height:500px;
			}
			li:hover{
				color: red;
			}
			li>a:hover{
				color:red;
			}
			ul:hover{
				font-size: 20px;
			}
			a {
				text-decoration: none;
				color: blue;
			}
			a:hover {
				color: red;
			}
			a {
				transition: color 0.8s linear 0.2s;
			}
		</style>
	</head>
	<body>
		<h1>Conexión establecida </h1>
		<a href="/logout.php">Log out</a>
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
		<br>
		<a href="/compass.html">Cambiar contraseña</a>
	</body>
</html>
