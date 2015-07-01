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

           <h1 style="colour:ff0045">REGISTRAR DOCENTE<span></span></h1>

           <hr>

           <p>Aqui usted podra REGISTRAR un nuevo docente del centro educativo.
           Complete los campos. Gracias
           </p>

      </div>
    </div>
      
    <div class="row form-section">    

        <form action="insertarDocente.php" method="post">

            <div class="form-group">
                <label><h3>DNI</h3></label>
                <input type="text" name="dni" class="form-control" placeholder="Ingresar DNI" />
            </div>

            <div class="form-group">
                <label><h3>Nombres</h3></label>
                <input type="text" name="realname" class="form-control" placeholder="Nombres" />
            </div>

            <div class="form-group">
                <label><h3>Apellido Paterno</h3></label>
                <input type="text" name="apellidop" class="form-control" placeholder="Apellido Paterno" />
            </div>

            <div>
                <label><h3>Apellido Materno</h3></label>
                <input type="text" name="apellidom" class="form-control" placeholder="Apellido Materno" />
            </div>

            <div>
                <label><h3>Direccion</h3></label>
                <input type="text" name="direccion" class="form-control" placeholder="Ingresar Direccion" />
            </div>

            <div>
                <label><h3>Telefono</h3></label>
                <input type="text" name="telefono" class="form-control" placeholder="Ingresar Telefono" />
            </div>

            <div>
                <label><h3>E-mail</h3></label>
                <input type="text" name="email" class="form-control" placeholder="Email" />
            </div>
<!--
            <div>
                <label><h3>Usuario</h3></label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" />
            </div>
-->
            <div>
                <label><h3>Fecha de inicio</h3></label>
                <input type="datetime-local" name="boletinFecha" id="boletinFecha" style="border:solid 1px #ff0000;">
            </div>

            <div>
                <label><h3>Contraseña</h3></label>
                <input type="text" name="password" class="form-control" placeholder="Ingresar contraseña" />
            </div>

            <br>
            
            <!-- boton de registro -->
          <input class="btn btn-danger" type="submit" name="submit" value="Registrar Docente" />

        </form>


    </div>

    
   </section>  <!-- /boletin-->

   
</section> <!-- /Portfolio -->


</body>