<?php
session_start(); //Iniciamos session para guardar los estados del array

// Se toman los datos que se mandaron del formulario  y los guardamos en diferentes valores
$valor = $_POST['valor'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
// Del array quitamos la separacion del "," para dejar los valores
$valores = explode(",", $_POST['valores']);
$apellidos = explode(",", $_POST['apellidos']);
$correos = explode(",", $_POST['correos']);

// Insertamos uno o varios datos al final de nuestro array
// Se utiliza la funcion de array_push
array_push($valores, $valor);
// Se utiliza la funcion de array_push
array_push($apellidos, $apellido);
// Se utiliza la funcion de array_push
array_push($correos, $correo);

// Igualamos nuestros arrays en variables
$_SESSION['data'] =$valores;
$_SESSION['apellidos'] =$apellidos;
$_SESSION['correos'] =$correos;



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
    <title>Ingreso</title>
</head>

<body>
    <h1>Alumnos Registrados</h1>
    <center>
        <img src="img/1.jpeg" alt="">

        <form action="validar.php" method="POST">
            
            <!-- Se emplea un ciclo for para añadir los siguientes alumnos que se quieran registrar -->
            <?php for($i=1;$i<= count($valores);$i++){ ;?>
                <!-- Se verifica si el array no tiene dato para no imprimirlo en pantalla -->
                <?php if(!empty($valores[$i])){ ;?>
                    <div class="formulario_reg">
                <h3>Alumno <!-- Se coloca el numero de alumno para identificar mejor --><?php echo $i?></h3>
                <!-- Se imprime el valor en nuestra plantilla de HTML -->
                <p>Nombre:<?php echo $valores[$i]."<br/>"; ?></p> 
                <!-- Se imprime el valor en nuestra plantilla de HTML -->
                <p>Apellidos:<?php echo $apellidos[$i]."<br/>"; ?></p> 
                <!-- Se imprime el valor en nuestra plantilla de HTML -->
                <p>Correo:<?php echo $correos[$i]."<br/>"; ?></p> 
                </div>
                <?php } ;?>
                
            <?php } ;?>
                
            

<!-- Redireccionamos para que se pueda volver a añadir mas estudiantes -->
            <div style="margin-top: 20px; height: 30px; width: 200px;" class="enviar">
                <button><a href="index.php">Añadir Mas</a></button>
            </div>

            <br>
        </form>

    </center>
</body>

</html>

