
<?php include 'header.php'   ?>
<script src="js.js"></script>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script>
function enviar(){
    alert("su mensaje fue enviado")
}

</script>

<DIV style="float: left;">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg><BR>USUARIO:ADMINISTRADOR
</DIV>
<div style="margin-left:350px; margin-top:50px;">

<form action="men1.php" method="post">
<label for="">Fecha</label><br>
<input type="date" name="fecha"><br>
<label for="">Enviado por:</label><br>
<input type="text" name="nombre"><br>
<label for="">Asunto</label><br>
<input type="text" name="asunto"><br>
<label for="">mensaje</label><br>

<div class="mb-3"
style="width: 200px;"
>
    
    <textarea class="form-control" name="mensaje" id="" rows="5" value="enviar" cols="50" ></textarea>


<br>
<button type="submit" value="enviar" onclick="enviar()" class="btn btn-danger" style="margin-left: 30px;">Enviar Mensaje</button>
</div>
</form>

</div>

<?php
$db_host="localhost";
$db_nombre="mensajeria";
$db_usuario="root";
$db_contrs="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contrs,$db_nombre);



mysqli_set_charset($conexion,"utf8");
$consulta="SELECT * FROM asistente";
$resultado=mysqli_query($conexion,$consulta);

while(($fila=mysqli_fetch_row($resultado))==true){


echo "<div class='container'>";

echo "<h5 style='color: blue';>";
echo "<img src='1.png' style= 'width: 50px;' >";
echo "NUEVO MENSAJE:"; 
echo "</h2>";   



echo "FECHA DE ENVIO: ";
echo $fila[0] . " ";
echo "<br>";

echo "ENVIADO POR:"; 
echo $fila[1] . " ";
ECHO "<BR>";

echo "ASUNTO: ";
echo $fila[2] . " ";

echo "<br>";

echo $fila[3] . " ";

echo "<hr>";


}

mysqli_close($conexion);


?>





































<!--form action="men1.php" method="post">
<label for="">Fecha</label>
<input type="date" name="fecha">
<label for="">Enviado por:</label>
<input type="text" name="nombre">
<label for="">Asunto</label>
<input type="text" name="asunto">
<label for="">mensaje</label>
<textarea name="mensaje" id=""></textarea>
<button type="submit" value="enviar">Enviar Mensaje</button>

</form>

<!--?php
$db_host="localhost";
$db_nombre="mensajeria";
$db_usuario="root";
$db_contrs="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contrs,$db_nombre);



mysqli_set_charset($conexion,"utf8");
$consulta="SELECT * FROM asistente";
$resultado=mysqli_query($conexion,$consulta);

while(($fila=mysqli_fetch_row($resultado))==true){




    echo "<h2 style='color: blue';>";
    echo "<img src='1.png' style= 'width: 50px;' >";
    echo "NUEVO MENSAJE:"; 
    echo "</h2>";   
    echo "<h3>";
    
    
    echo "FECHA DE ENVIO: ";
    echo $fila[0] . " ";
    echo "<br>";
    
    echo "ENVIADO POR:"; 
    echo $fila[1] . " ";
    ECHO "<BR>";
    
    echo "ASUNTO: ";
    echo $fila[2] . " ";
    echo "<br>";
    echo "<hr>";
    
    
    echo $fila[3] . " ";
    
    
    
    }
    
    mysqli_close($conexion);
    
    
    ?>






}


