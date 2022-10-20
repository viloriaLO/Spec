
<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
      function ConfirmAvi() {
      var mensaje = confirm("Aviso de Privacidad , Spectralabmx.com protege tus datos para no ser usados con otro tipo de finalidades acepta o denega si quieres enviar tus datos");
      if (mensaje) {
      alert("Se enviaron tus datos");
      }else {
        alert("No se tomaran tus datos");
        window.close();
}
}
</script>
    <title>Spectralab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/spec.ico">
    <meta name="keywords" content="Disoluciones, Spectralab, Spectralab Analytical, Equipo de Distek">
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
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-4 col-xl-2">
            <a class="navbar-brand" href="index.html">
                <div class="imagen">
    <img src="images/spec.png" width="340" height="80">
    </div>
  </a>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Inicio</a></li>
                <li><a href="index.html" class="nav-link">Conocenos</a></li>
                <li><a href="index.html" class="nav-link">Equipos</a></li>
                <li><a href="index.html" class="nav-link">Servicios</a></li>
                <li><a href="index.html" class="nav-link">Contacto</a></li>
                <li><a href="index.html" class="nav-link">Cursos</a></li>
                <li><a href="index.html" class="nav-link">Catalogo</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
<div class="espacion" style="height: 150px"></div>

<center>

    <h1 style="color: #e81050"> Dejanos tu correo para enviarte la cotizacion </h1>
    <br>
    <form action="coti_canastillas.php" method="POST">
    <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="correo_cot">Correo:</label>
                  <input type="text" name="correo_cot" class="form-control">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="nombre">Nombre:</label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="empresa">Empresa:</label>
                  <input type="text" name="empresa" class="form-control">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="telefono">Telefono:</label>
                  <input type="text" name="telefono" class="form-control">
                </div>
                <br>
                <input type="submit"  value="Enviar Correo" class="btn btn-dark btn-md text-white">
    </form>
    <br>
    <br>






</center>



<section class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contactanos para mas información</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="contacto.php" method="POST" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contactanos</h2> 

              <div class="row form-group" data-aos="zoom-in-right" data-aos-delay="500">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="nombre">Nombre</label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="apellidos">Apellidos</label>
                  <input type="text" name="apellidos" class="form-control">
                </div>
              </div>

              <div class="row form-group" data-aos="zoom-in-right" data-aos-delay="500">
                
                <div class="col-md-12">
                  <label class="text-black" for="empresa">Empresa</label> 
                  <input type="text" name="empresa" class="form-control">
                </div>
                <div class="col-md-12">
                  <label class="text-black" for="area">Area</label> 
                  <input type="text" name="area" class="form-control">
                </div>
                <div class="col-md-12">
                  <label class="text-black" for="puesto">Puesto</label> 
                  <input type="text" name="puesto" class="form-control">
                </div>
                <div class="col-md-12">
                  <label class="text-black" for="email">Correo</label> 
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="col-md-12">
                  <label class="text-black" for="telefono">Telefono</label> 
                  <input type="text" name="telefono" class="form-control">
                </div>

              </div>

              <div class="row form-group">
                

              </div>

              <div class="row form-group" data-aos="zoom-in-right" data-aos-delay="500">
                <div class="col-md-12">
                  <label class="text-black" for="mensaje">Mensaje</label> 
                  <textarea name="mensaje" id="mensaje" cols="30" rows="7" class="form-control" placeholder="Escribe tus dudas o cotizaciones"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                    <a href="index.html">
                  <input type="submit" onclick="ConfirmAvi()" value="Enviar Mensaje" class="btn btn-dark btn-md text-white">
                  </a>
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5" data-aos="fade-up-left" data-aos-delay="500">
            
            <div class="p-4 mb-3 bg-white">
              

              <p class="mb-0 font-weight-bold"><span class="text-primary icon-phone"></span>&nbsp;&nbsp;Telefono</p>
              <p class="mb-4"><a href="#"><span class="text-primary icon-user"></span>&nbsp;&nbsp;01-(55)-57-01-86-34</a></p>
              <p class="mb-4"><a href="#"><span class="text-primary icon-user"></span>&nbsp;&nbsp;01-(55)-15-45-20-43</a></p>

              <p class="mb-0 font-weight-bold"><span class="text-primary icon-mail4"></span>&nbsp;&nbsp;Correo Electronico</p>
              <p class="mb-0"><span class="text-primary icon-user"></span>&nbsp;&nbsp;César Estrada Flores <br><a href="#">cestrada@spectralabmx.com</a></p>
              <p class="mb-0"><span class="text-primary icon-user"></span>&nbsp;&nbsp;Rolando Vázquez Baldin  <br><a href="#">rvazquez@spectralabmx.com</a></p>

              <p class="mb-0 font-weight-bold"><span class="text-primary icon-location2"></span>&nbsp;&nbsp;Domicilio</p>
              <p class="mb-4">Chimalpopoca N°76, Arenal 2A 
              Sección, Venustiano Carranza, CDMX, C.P. 15680.</p>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6755087120832!2d-99.05822234186614!3d19.4264213947105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fc7d468f0a19%3A0x5f2fa19e8e0b70c7!2sChimalpopoca+76%2C+Arenal+2da+Secc%2C+15660+Arenal+2A.+Secc%2C+CDMX!5e0!3m2!1ses!2smx!4v1558567071710!5m2!1ses!2smx" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
          </div>
        </div>
      </div>
    </section>


          <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="111129497051192"
  theme_color="#0f0b4d"
  logged_in_greeting="Hola, ¿En que te puedo ayudar?"
  logged_out_greeting="Hola, ¿En que te puedo ayudar?">
      </div>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Política de Calidad</h2>
                <p>Mantener e incrementar el nivel de puntualidad, disponibilidad, confiabilidad y buenas prácticas en las calibraciones, servicio de mantenimiento preventivo, correctivo y la capacitación.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Redirección Rapida</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section"><span class="text-primary icon-users"></span>&nbsp;&nbsp;Conocenos</a></li>
                  <li><a href="#team-section"><span class="text-primary icon-lab"></span>&nbsp;&nbsp;Equipos</a></li>
                  <li><a href="#services-section"><span class="text-primary icon-wrench"></span>&nbsp;&nbsp;Servicios</a></li>
                  
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribete </h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Ingresa tu correo" aria-label="Ingresa tu correo" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Enviar</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Siguenos</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        
       Spectralab Instrumentación Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
       
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>