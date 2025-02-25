<?php
$conexion =mysqli_connect("localhost","root","","academia") or die ("problemas de conexion");

mysqli_query($conexion,"INSERT INTO examen(pregunta1,pregunta2,pregunta3,pregunta4,pregunta5) VALUES ('$_REQUEST[pregunta1]','$_REQUEST[pregunta2]','$_REQUEST[pregunta3]','$_REQUEST[pregunta4]','$_REQUEST[pregunta5]' )") or die("problema de seleccion" . mysqli_error($conexion));

mysqli_close($conexion);

header('Location:examen.php')

?>