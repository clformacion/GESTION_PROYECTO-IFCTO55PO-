<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
           <nav class="navbar navbar-expand navbar-light bg-primary">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page"
                        ><img src="img/1.png" alt="" style="width: 50px;"><span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Examen 1</a>
                </li>
            </ul>
           </nav>
           
        </header>
        <main>
<body style="background-color: grey;">

        <div
    class="container"
    style="margin-top:20px"
> 

<form action="conect4.php" method="post">

<div class="mb-3">
    <label for="" class="form-label">Nombre del Estudiante:</label>
    <input
        type="text"
        class="form-control"
        name="nombre"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 200px;"
    />
    
</div>


<div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input
        type="date"
        class="form-control"
        name="fecha"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="float: right; width:150px; margin-top:-50px"
    />

</div>





       <?php   include 'conect2.php';
while(($fila=mysqli_fetch_row($resultado))==true){
    echo "<h3>";
    echo $fila[0];
    echo "</h3>"; 
 


} 


?>

<div class="mb-3"
style="width: 600px;"

>
    <label for="" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>Respusta: </label>
    <textarea class="form-control" name="respuesta1" id="" rows="5"></textarea>
</div>



<?php   include 'conect2.php';
while(($fila=mysqli_fetch_row($resultado))==true){
    echo "<h3>";
    echo $fila[1];
    echo "</h3>"; 
    

} 
?>

<div class="mb-3"
style="width: 600px;"

>
    <label for="" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>Respusta: </label>
    <textarea class="form-control" name="respuesta2" id="" rows="5"></textarea>
</div>


<?php   include 'conect2.php';
while(($fila=mysqli_fetch_row($resultado))==true){
    echo "<h3>";
    echo $fila[2];
    echo "</h3>";  
   

} 
?>


<div class="mb-3"
style="width: 600px;"

>
    <label for="" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>Respusta: </label>
    <textarea class="form-control" name="respuesta3" id="" rows="5"></textarea>
</div>

<?php   include 'conect2.php';
while(($fila=mysqli_fetch_row($resultado))==true){
    echo "<h3>";
    echo $fila[3];
    echo "</h3>";
    

} 
?>


<div class="mb-3"
style="width: 600px;"

>
    <label for="" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>Respusta: </label>
    <textarea class="form-control" name="respuesta4" id="" rows="5"></textarea>
</div>


<?php   include 'conect2.php';
while(($fila=mysqli_fetch_row($resultado))==true){
    echo "<h3>";
    echo $fila[4];
    echo "</h3>";
    

} 

mysqli_close($conexion);

?>


<div class="mb-3"
style="width: 600px;"

>
    <label for="" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>Respusta: </label>
    <textarea class="form-control" name="respuesta5" id="" rows="5"></textarea>
</div>


<button type="submit"  onclick="enviar()" class="btn btn-danger">Enviar</button>

</form>

<script>

function enviar(){
    alert("Su Examen fue enviado al formador para su revision")
}




</script>

<br><br>
</div>

</body>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
