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
    <script stype="text/javascript" src="js/ajax.js"></script>

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

<!--==================================================================================-->

   <section id="boletines">

    <div class="row section-head">
      <div class="twelve columns">
           <h1 style="#ff0000">Publicar Boletines<span>.</span></h1>

           <hr />
      </div>
    </div>

    <div class="row form-section">
        
          <div class="twelve columns">



                <form name="form1" id="form1" method="post" action="guardarBoletin.php">

                                    <?php 
                                      $sql="SELECT * from tgrado";
                                      $res=mysql_query($sql);
                                    ?>

                      <fieldset>
                            <div class="row">
                                    <div class="four columns mob-whole">
                                          <label for="BoletinTipo"></label>
                                          Tipo de Boletin:
                                          <select name="BoletinTipo" name="BoletinTipo" style="border:solid 1px #ff0000;">
                                              <option value="">----Tipo de boletin----</option>
                                              <option value="Boletin informativo">Boletin informativo</option>
                                              <option value="Asamblea general">Asamblea general</option>
                                              <option value="Dias festivos">Dias festivos</option>
                                              <option value="Faena">Faena</option>
                                          </select>
                                    </div>
                                    

                                    <div class="four columns mob-whole">
                                          <div>
                                            Grado:
                                                <select name="Grado" id="Grado" onchange="from(document.form1.Grado.value,'seccion','grado.php')" style="border:solid 1px #ff0000;">
                                                    <option value="0">-----Grado-----</option>
                                                    <?php while ($fila=mysql_fetch_array($res)){ ?>
                                                      <option value="<?php echo $fila['idgrado']?>"><?php echo $fila['idgrado']?></option>
                                                    <?php }?>
                                                </select> 
                                          </div>
                                    </div>  

                                    <div class=" four columns mob-whole">
                                          <div id="seccion">
                                            Seccion:
                                              <select name="" id="" style="border:solid 1px #ff0000;">
                                                  <option value="">-----seccion----</option>
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
          </div> 
   </section>  <!-- /boletin-->
</body>
</html>