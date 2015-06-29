<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<?php 
    require("conexion.php");
 ?>
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
                <li class="current"><a class="smoothscroll" href="#registrar">Registrar</a> </li>
                <li><a class="smoothscroll" href="#0">Agragar las cosas q hace el administrador.</a></li> <!-- /Works-->
                <li><a class="smoothscroll" href="#boletines">Boletines</a></li><!-- /Boletines-->
                <li><a class="smoothscroll" href="#2">,,,,,.</a></li><!-- /Sobre-->
                <li><a class="smoothscroll" href="#3">,,,,,,</a></li><!-- /Contact-->
            </ul>

        </nav> <!-- /nav-wrap -->

    </div> <!-- /header-inner -->

</header>


<!-- Registrar
  ================================================== -->
<!--<section id="registrar">
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
-->
            <!-- boton de registro -->
          <!--  <input class="btn btn-danger" type="submit" name="submit" value="Registrar" />-->
<!--
        </form>
-->
   <!-- boletines
   ================================================== -->
   <section id="boletines">

    <div class="row section-head">

      <div class="twelve columns">

           <h1 style="#ff0000">Publicar Boletines<span>.</span></h1>

           <hr />
        </div>

      </div>

      <div class="row form-section">
        
        <div id="boletines-form" class="twelve columns">

            <form name="boletinestForm" id="boletinesForm" method="post" action="guardarBoleti.php">

            <fieldset>
                                   
                        
                    

                  <div class="row">
                    <div class="four columns mob-whole">
                      <label for="BoletinTipo">Tipo de Boletin</label>
                      <select name="BoletinTipo" name="BoletinTipo" style="border:solid 1px #ff0000;">
                          <option value="">----Tipo de boletin----</option>
                          <option value="Boletin informativo">Boletin informativo</option>
                          <option value="Asamblea general">Asamblea general</option>
                          <option value="Dias festivos">Dias festivos</option>
                          <option value="Faena">Faena</option>
                        </select>
                    </div>
                    <div class="four columns mob-whole">
                      <label for="Cbgrado">Grado</label>
                      <select name="CbGrado" id="CbGrado" style="border:solid 1px #ff0000;">
                        <option value="">----grado----</option>
                        <?php 
                            $sql="SELECT idgrado FROM tgrado";
                            $rec=mysql_query($sql);
                            while ($row=mysql_fetch_array($rec)) {
                              echo"<option value='".$row['idgrado']."'>";
                              echo $row['idgrado'];
                              echo "</option>";
                            }
                         ?>
                      </select> 
                    </div>  
                    <div class=" four columns mob-whole">
                      <label for="cbseccion">Seccion</label>
                      <select name="cbSeccion" id="cbSeccion" style="border:solid 1px #ff0000;">
                        <option value="">----seccion---</option>
                        <?php 
                            $sql="SELECT idseccion FROM tseccion";
                            $rec=mysql_query($sql);
                            while ($row=mysql_fetch_array($rec)) {
                              echo"<option value='".$row['idseccion']."'>";
                              echo $row['idseccion'];
                              echo "</option>";
                            }
                         ?>
                      </select>
                    </div>  
                    </div>  
                  </div> 

                  <div class="row">
                    <div class="six columns">
                      <label for="boletinFecha">Seleccione la Fecha e introduzca la hora :</label>
                      <input type="datetime-local" name="boletinFecha" id="boletinFecha" style="border:solid 1px #ff0000;">
                    </div>
                  </div>

                  <div class="row">
                    <div class="twelve columns">
                      <label for="boletinDescipcion"></label>
                      <textarea name="boletinDescripcion" id="boletinDescripcion" cols="120" rows="10" placeholder="Descripcion" style="border:solid 1px #ff0000;"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="twelve columns">
                      <input type="submit" value="Publicar">
                    </div>
                  </div>  

            </fieldset>
              
          </form> <!-- /boletinForm --> 
   </section>  <!-- /boletin-->

    </div> <!-- .hero-content -->
</section> <!-- /Portfolio -->


</body>
</html>