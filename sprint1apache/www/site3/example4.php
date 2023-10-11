<html>
<body>
<h1> Otra jubilacion dicen </h1>
<?php
function edadEnCincoAños($edad){
return $edad + 5;
}

	function mensaje($age){
	if(edadEnCincoAños($age) > 65){
		return "En " . 65 - $age . "años tendras edad de jubilacion";
	}else{
		return "Disfuta de tu tiempo";
	}
}
?>

<table>
	<tr>
	<th> Edad </th>
	<th> Info </th>
	</tr>

<?php
	$lista = array(53,54,55,56,57,58,59,60,61,62,63);
	foreach($lista as $valor){
	echo "<tr>";
	echo "<td>".$valor."</td>";
	echo "<td>".mensaje($valor)."</td>";
	echo "</tr>";
}
?>
</table>
</body>
</html>
