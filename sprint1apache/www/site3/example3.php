<html>
<body>
<h1> Jubilacion dicen </h1>
<?php
function edadEnDiezAños($edad){
return $edad+10;
}
$numero=$_GET["edad"];
if (edadEnDiezAños($numero) > 65){
echo "En " . 65-$numero  ." años tendras tu edad de jubilación";
}else{
echo "Disfruta de tu tiempo";
}
?>
</body>
</html>
