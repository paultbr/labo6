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
    <script src="js/modernizr.js" type="text/javascript">
    </script>

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
                <li class="current"><a class="smoothscroll" href="#registrar">Asistencia</a> </li>
                <li><a class="smoothscroll" href="#0">Agragar las cosas q hace el auxiliar.</a></li> <!-- /Works-->
                <li><a class="smoothscroll" href="#1">....</a></li><!-- /Boletines-->
                <li><a class="smoothscroll" href="#2">....</a></li><!-- /Sobre-->
                <li><a class="smoothscroll" href="#3">....</a></li><!-- /Contact-->
            </ul>

        </nav> <!-- /nav-wrap -->

    </div> <!-- /header-inner -->

</header>

   <!-- boletines
   ================================================== -->
   <section id="asistencia">

    <div class="row section-head">
      <div class="twelve columns">
           <h1 style="#ff0000">Registrar Asistencia<span>.</span></h1>

           <hr />
        </div>
      </div>

      <div class="row form-section">
        <div id="boletines-form" class="twelve columns">
          <form name="AsistenciaForm" id="AsistenciaForm" method="post" action="RegistrarAsistencia.php">
            <fieldset>
                <input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="5" />
                <legend> La fecha actual es:</legend>

                <form action="RecuperarDatos.php" method="post">
                    <div class="row">
                    <div class="four columns mob-whole">
                      <label for="cbGrado">Seleccione el grado:</label>
                      <select name="" id="cbGrado">
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
                    <div class="four columns mob-whole">
                      <label for="cbSeccion">Seleccione la Seccion:</label>
                      <select name="" id="cbSeccion">
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
                    <div class="four columns mob-whole">
                      <label for="Listar"></label>
                      <input type="submit" value="Listar">
                    </div>
                    
                    </div>
                      <label for="alumnos">LISTA DE ALUMNOS</label>
                      <table WIDTH="100%" BORDER="1" BGCOLOR="#F7BE81" class="alumnos">
                        <tr>
                          <th>Codigo</th>
                          <th>APaterno</th>
                          <th>AMaterno</th>
                          <th>Nombres</th>
                          <th>Asistio</th>
                          <th>Tarde</th>
                          <th>Falta</th>
                        </tr>
                        <div>
                        <?php 
                          include("RecuperarDatos.php");
                          $Con=new Recuperar();
                          $Con->RD();
                         ?>
                      </div>
                      </table>
                  </form>

                  <label for="Guardar"></label>
                  <input type="submit" value="Guardar">
                  
            </fieldset> 
          </form> <!-- /AsistenciaForm --> 
   </section>  <!-- /asistencia-->

</body>
</html> 