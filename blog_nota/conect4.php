<?php
$conexion =mysqli_connect("localhost","root","","academia") or die ("problemas de conexion");

mysqli_query($conexion,"INSERT INTO respuestas1(nombre,fecha,respuesta1,respuesta2,respuesta3,respuesta4,respuesta5) VALUES ('$_REQUEST[nombre]','$_REQUEST[fecha]','$_REQUEST[respuesta1]', '$_REQUEST[respuesta2]','$_REQUEST[respuesta3]','$_REQUEST[respuesta4]','$_REQUEST[respuesta5]')") or die("problema de seleccion" . mysqli_error($conexion));

mysqli_close($conexion);



header('Location:examen.php');






?>