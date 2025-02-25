<?php include 'log/header.php' ?>




<?php   include 'conect5.php';
while(($fila=mysqli_fetch_row($resultado))==true){

    $nombre="   <b>nombre del estudiante:</b> ";
    $fecha= "<b>Fecha de Entrega:</b> ";
    $respuesta = "<b>respuesta:</b> " ;
    
    
   
   echo "<div style= 'margin-left:50px;margin-top:50px; margin-right:50px;background-color:bisque'>";
   echo "<hr>";
   echo "<h2 style='text-align:center'>Estudiante</h2>";
    echo $fecha  . " ". $fila[1];
    echo "<br>";
    echo $nombre . $fila[0];
    echo "<br>";
    echo $respuesta . $fila[2];
    echo "<br>";
    echo $respuesta . $fila[3];
    echo "<br>";
    echo $respuesta . $fila[4];

    echo "<br>";
    echo $respuesta . $fila[5];
    echo "<br>";
    echo $respuesta .$fila[6];
    echo "<hr>";
    echo $nombre;
    echo "<form action='registro6.php' method='post'>";
    echo "<input type'text' name='nombre'>";
   
    echo "<input type'text' name='nota' style='float:right'>";


    echo "<button class='btn btn-danger' type='submit' style='margin-left:180px;margin-top:-10px'>nota</button>   ";
    echo "</form>";
 
    
    echo "</div>";
    




} 

mysqli_close($conexion);
?>


