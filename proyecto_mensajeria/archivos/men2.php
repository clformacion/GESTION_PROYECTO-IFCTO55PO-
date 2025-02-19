<?php include 'conec.php'   ?>


<?php
 mysqli_query($conexion, "INSERT INTO asistente(fecha,nombre,asunto,mensaje) VALUES('$_REQUEST[fecha]' ,'$_REQUEST[nombre]','$_REQUEST[asunto]', '$_REQUEST[mensaje]')") or die("problema en select" . mysqli_error($conexion));

mysqli_close($conexion);

header('Location:asistente.php');

?>
