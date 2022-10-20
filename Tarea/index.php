<?php 
    session_start();
    // Creamos las secciones para guardar nuestros arrays
    if(!isset($_SESSION['data'])){
        $_SESSION['data'] = array();
        $_SESSION['apellidos'] = array();
        $_SESSION['correos'] = array();
    }
        

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <title>Registar</title>
</head>

<body>
    <h1>Registre a los alumnos</h1>
    <center>
        <img src="2.jpeg" alt="">
<!-- Utilizamos el envio por cabezeras en este caso por el metodo POST-->
<!-- Al momento de enviar al formulario este se enviara a validar.php-->
        <form action="validar.php" method="POST">
            
            <div class="formulario_reg">
                <h3>Alumno </h3>
                <p>Ingresa Nombre</p> <br><input type="text" name="valor">
                <!-- Hacemos que los datos se metan en un array y se separen por una "," para posteriormente enviarlo -->
                <input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data']) ?>">
                <p>Ingresa Apellidos</p> <br><input type="text" name="apellido">
                <!-- Hacemos que los datos se metan en un array y se separen por una "," para posteriormente enviarlo -->
                <input type="hidden" name="apellidos" value="<?php echo implode(",", $_SESSION['apellidos']) ?>">
                <p>Ingresa Correo</p> <br><input type="email" name="correo">
                <!-- Hacemos que los datos se metan en un array y se separen por una "," para posteriormente enviarlo -->
                <input type="hidden" name="correos" value="<?php echo implode(",", $_SESSION['correos']) ?>">
            </div>


            <div style="margin-top: 20px; height: 30px; width: 200px;" class="enviar">
                <input type="submit" value="Ingresar">
            </div>

            <br>
        </form>

    </center>
</body>

</html>
