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
                <li class="current"><a class="smoothscroll" href="#Registrar">Registrar</a> </li>
                <li><a class="smoothscroll" href="#0">Agragar las cosas q hace el administrador.</a></li> <!-- /Works-->
                <li><a class="smoothscroll" href="#1">,,,,,,.</a></li><!-- /Services-->
                <li><a class="smoothscroll" href="#2">,,,,,.</a></li><!-- /Sobre-->
                <li><a class="smoothscroll" href="#3">,,,,.</a></li><!-- /Contact-->
            </ul>

        </nav> <!-- /nav-wrap -->

    </div> <!-- /header-inner -->

</header>


<!-- Registrar
  ================================================== -->
<section id="registrar">
    <div class="row hero-content">

        <h2>Registrarce</h2>
        <form action="insertarNuevo.php" method="post">

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
                <label><h3>Email</h3></label>
                <input type="text" name="mail2" class="form-control" placeholder="Email" />
            </div>

            <div>
                <label><h3>Usuario</h3></label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" />
            </div>

            <div>
                <label><h3>Contraseña</h3></label>
                <input type="password" name="pass" class="form-control" placeholder="Contraseña" />
            </div>

            <div>
                <label><h3>Repita la Contraseña</h3></label>
                <input type="password" name="rpass" class="form-control" placeholder="Contraseña" />
            </div>

            <div>
                <label><h3>Categoria de Cuenta</h3></label>
                <input type="tex" name="categoria" class="form-control" placeholder="categoria" />
            </div>

            <!-- boton de registro -->
            <input class="btn btn-danger" type="submit" name="submit" value="Registrar" />

        </form>


    </div> <!-- .hero-content -->
</section> <!-- /Portfolio -->


</body>