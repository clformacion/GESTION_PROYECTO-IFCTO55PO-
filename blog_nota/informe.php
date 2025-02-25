<?php include 'log/header.php' ?>

<h2 style='text-align:center'>Calificacion Examen 1</h2>

<?php   include 'conct6.php';
while(($fila=mysqli_fetch_row($resultado))==true){

    $nombre="   <b>nombre del estudiante:</b> ";
    $fecha= "<b>Fecha de Entrega:</b> ";
    $respuesta = "<b>respuesta:</b> " ;
    $nota = "<b>Nota Obtenida </b>";
    
 
   
   echo "<div style= 'margin-left:150px; margin-right:50px;background-color:bisque'>";
   echo "<hr>";
   

   echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
</svg> ";
echo "<br>";
    echo $nombre . $fila[0];
    echo "<br>";
    echo $nota . $fila[1];
    echo "<br>";
    
    //echo "<hr>";
    //echo $nombre;
    //echo "<input type'text' name=''>";
    //echo " <button class='btn btn-danger' type='' style='margin-left:180px;margin-top:-10px'>nota</button>   ";
   //echo "<input type'text' name='submit' style='float:right'>";
    
    
    echo "</div>";
    




} 

mysqli_close($conexion);
?>

