<?php include 'conec.php'   ?>


<?php
 mysqli_query($conexion, "INSERT INTO administrador(fecha,nombre,asunto,mensaje) VALUES('$_REQUEST[fecha]' ,'$_REQUEST[nombre]','$_REQUEST[asunto]', '$_REQUEST[mensaje]')") or die("problema en select" . mysqli_error($conexion));

mysqli_close($conexion);

header('Location:administrador.php');


?>

