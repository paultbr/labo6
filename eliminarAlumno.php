<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
       <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>FE Y ALEGRIA N°21</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Script
    =================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
     =================================================== -->
    <link rel="shortcut icon" href="kevincito.png" >

</head>
<body>
<header id="main-header">

    <div class="row header-inner">

        <div class="logo">
            <a class="smoothscroll" href="#inicio">"Fe Alegria".</a>
        </div>

        <nav id="nav-wrap">

            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                <span class='menu-text'>Show Menu</span>
                <span class="menu-icon"></span>
            </a>
            <a class="mobile-btn" href="#" title="Hide navigation">
                <span class='menu-text'>Hide Menu</span>
                <span class="menu-icon"></span>
            </a>

            <ul id="nav" class="nav">
                <li><a class="smoothscroll" href="#registrar">Registrar</a> </li>
                <li><a class="smoothscroll" href="#0">Agragar las cosas q hace el administrador.</a></li> <!-- /Works-->
                <li><a class="smoothscroll" href="#boletines">Publicar Boletines</a></li><!-- /Boletines-->
                <li class="current"><a class="smoothscroll" href="#mantenimiento">Mantenimiento</a></li><!-- /Sobre-->
                <li><a class="smoothscroll" href="#3">,,,,,,</a></li><!-- /Contact-->
            </ul>

        </nav> <!-- /nav-wrap -->

    </div> <!-- /header-inner -->

</header>

    

   <!-- Mantenimiento
   ================================================== -->
  <br >
  <br >
  <br >
  <br >
   <section id="mantenimiento" >

    <div class="row section-head">
      <div class="twelve columns">

           <h1 style="colour:ff0045">ELIMINAR ALUMNO<span></span></h1>

           <hr>

           <p>Aqui usted podra ELIMINAR un alumno del centro educativo.
           Complete los campos, por favor. Gracias
           </p>

      </div>
    </div>
      
    <div class="row form-section">    

        <form action="borrarAlumno .php" method="post">

            <div class="form-group">
                <label><h3>DNI</h3></label>
                <input type="text" name="dni" class="form-control" placeholder="Ingresar DNI" />
            </div>
    
            <!-- boton de registro -->
          <input class="btn btn-danger" type="submit" name="submit" value="Eliminar Alumno" />

        </form>


    </div>

    
   </section>  <!-- /boletin-->

   
</section> <!-- /Portfolio -->


</body>