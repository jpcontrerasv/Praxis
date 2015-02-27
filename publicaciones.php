<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Espacio Praxis</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
	<script src="//use.typekit.net/anz0iba.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
  </head>
  <body>
  	<header id="nohome">
    	<div class="container no-column">
        	<div id="logo-head" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            	<a href="index.php" class="logo-grande"><img src="img/logo-rojo.png" alt=""></a>
                <a href="index.php" class="logo-chico ocultar"><img src="img/logo-chico-rojo.png" alt=""></a>
            </div>
        	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-10 no-column">
                <nav> 
                  <ul> 
                    <li><a href="#">Somos</a></li> 
                    <li><a href="#">Actividad</a></li> 
                    <li><a href="publicaciones.php">Publicaciones</a></li> 
                    <li><a href="financiamiento.php">Financiamiento</a></li> 
                    <li><a href="contacto.php">Contacto</a></li> 
                  </ul> 
                </nav>
            </div>
        	<div id="buscador" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 text-center no-column">
            	<a class="open-buscador"><i class="fa fa-search fa-2x"></i></a>
                <form>
                    <input id="inputbusqueda" type="text">
                </form>
            </div>
            
            <div class="icons-rs">
            	<i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
            </div>
            
        </div>
    </header>
    
    
    <div id="contenido" class="box fwidth fleft">
        <div class="container">
            <div id="publicaciones" class="col-lg-8 col-md-8 col-sm-8 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 text-left">
            
            	<div class="titular box fwidth fleft text-center">
                	<h2>Publicaciones</h2>
                </div>
                
                <div id="botonera" class="col-lg-12">
                	
                </div>
            
				<?php
                function ae_detect_ie()
                {
                    if (isset($_SERVER['HTTP_USER_AGENT']) && 
                    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
                        return true;
                    else
                        return false;
                }
                ?>
                <?php  if (ae_detect_ie()) {  ?>
                <div class="caja-ie-publicacion" style="background-image:url(img/img.jpg);">
                    <span class="cat-rojo gris"></span>
                    <p>hola</p>
                </div>
                <?php }  else { ?>
                <div class="caja-publicacion caja-rojo" style="background-image:url(img/img.jpg);">
                    <p>hola</p>
                </div>
                <? } ?>            
                
                
                               
            </div>
            <!--/#publicaciones-->
        </div>
        
        
    </div>
    <!--/contenido-->

	<footer class="container-fluid no-column">
    	<div class="container no-column">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left no-column">
            	
                <div class="box fwidth fleft">
                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                    	<p>&copy; 2015</p>
                        <p><span>Espacio Praxis</span></p>                        
                    </div>
                	<div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                    	<p><span>Eulogia Sanchez 065</span></p>
                        <p>Santiago de Chile</p>                        
                    </div>
                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    	<p><span>Desarrollado</span></p>
                        <p><span>por <a href="#">Cerro</a></span></p>                        
                    </div>
                </div>
                
                
            </div>
        </div>

    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
  </body>
</html>