<?php
$conexion =mysqli_connect("localhost","root","","academia") or die ("problemas de conexion");

mysqli_query($conexion,"INSERT INTO blog(titulo,parrafo) VALUES ('$_REQUEST[titulo]','$_REQUEST[parrafo]')") or die("problema de seleccion" . mysqli_error($conexion));

mysqli_close($conexion);

header('Location:clase1.php')






?>