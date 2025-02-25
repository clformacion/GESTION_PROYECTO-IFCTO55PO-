
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">





<?php

$db_host="localhost";
$db_nombre="academia";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

mysqli_set_charset($conexion, "utf8");

$consulta="SELECT * FROM blog" ;

$resultado=mysqli_query($conexion,$consulta);

while(($fila=mysqli_fetch_row($resultado))==true){

    



    echo "<h1 style='text-align:center;margin-top:20px;color:blue'>";
    echo $fila[0];
    echo "</h1>";


    echo "<br>";
   
    echo "<p style='margin-left:100px;margin-right:100px; text-align:justify;'>";
    echo $fila[1];
    echo "</p>";

    
}
mysqli_close($conexion);





?>