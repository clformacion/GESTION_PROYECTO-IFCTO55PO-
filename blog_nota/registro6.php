<?php
$conexion =mysqli_connect("localhost","root","","academia") or die ("problemas de conexion");

mysqli_query($conexion,"INSERT INTO informe(nombre,nota) VALUES ('$_REQUEST[nombre]','$_REQUEST[nota]' )") or die("problema de seleccion" . mysqli_error($conexion));

mysqli_close($conexion);

header('Location:informe.php')

?>