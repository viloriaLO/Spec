<?php 
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
    if( !file_exists('archivo') ){
        mkdir('archivos',0777,true);
        if( file_exists('archivos') ){
            if( move_uploaded_file($guardado, 'archivos/'.$nombre) ){               
                echo "Archivo guardado con exito";
            }else{
                echo "Archivo no se pudo guardar";
            }
        }else{
            if( move_uploaded_file($guardado, 'archivos/'.$nombre) ){ 
                 exit;
                 echo "Archivo guardado con exito";
            }else{
                echo "Archivo no se pudo guardar";
            }
        }

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Spectralab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/spec.ico">
        <meta name="keywords" content="Disoluciones, Equipo de Distek,2500 distek,2500 Select Distek">
        <meta name="author" content="Spectralab">
    
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Courgette|EB+Garamond|Lobster|Manjari|Oleo+Script&display=swap" rel="stylesheet">
    
    
    
        
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
        <link rel="stylesheet" href="css/font-awesome.min.css">
    
        <link rel="stylesheet" href="css/aos.css">
    
        <link rel="stylesheet" href="css/style.css">
        
      </head>
<body style="background: url(images/fondo_log.png) ;">
    <div class="ss">
        <button><a href="index.html"> <h2><strong><i class="fa fa-home fa-3x"></i>  El procedimiento se hizo correctamenten toca el boton para regresar al inicio</a> </strong></h2></button>
    </div>
</body>
</html>