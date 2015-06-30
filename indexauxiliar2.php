<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<?php 
    require("conexionBD.php");
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
    <script type="text/javascript" src="js/ajax.js">
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
        
        <div class="row">
              <?//php include ("conexion.php");?>
              <?//php mysql_select_db($baseDatos);?>
              <?php 
                $sql="SELECT * from tgrado";
                $res=mysql_query($sql);
              ?>

              <form name="form1" action="Registrar.php" method="post">
                  <div class="four columns mob-whole">
                      <div>
                        Grado:
                            <select name="Grado" id="Grado" onchange="from(document.form1.Grado.value,'seccion','grado.php')" >
                                <option value="0">-----Grado-----</option>
                                <?php while ($fila=mysql_fetch_array($res)){ ?>
                                  <option value="<?php echo $fila['idgrado']?>"><?php echo $fila['idgrado']?></option>
                                <?php }?>
                            </select> 
                      </div>
                  </div>
                  
                  <div class="eight columns mob-whole">
                      <div id="seccion">
                        Seccion:
                          <select name="" id="">
                              <option value="">-----seccion----</option>
                          </select>
                      </div> 
                  </div> 

                  <label for="alumnos">LISTA DE ALUMNOS</label>
                      <table WIDTH="100%" BORDER="1" BGCOLOR="#F7BE81" class="alumnos">
                        <tr>
                          <th>Codigo</th>
                          <th>APaterno</th>
                          <th>AMaterno</th>
                          <th>Nombres</th>
                          <th>Presente</th>
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
                  <label for="Guardar"></label>
                  <input type="submit" value="Guardar">

              </form>

              
        </div>

   </section>  <!-- /asistencia-->

</body>
</html> 