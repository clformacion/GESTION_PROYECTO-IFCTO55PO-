<?php

$db_host="localhost";
$db_nombre="academia";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

mysqli_set_charset($conexion, "utf8");

$consulta="SELECT * FROM informe" ;

$resultado=mysqli_query($conexion,$consulta);


?>