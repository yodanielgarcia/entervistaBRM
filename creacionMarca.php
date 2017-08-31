<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Catalogo BRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondo1.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
		<li class=""><a href="creacionMarca.php">Creacion de marcas</a></li>
		<li class=""><a href="admin.php">Administracion de marcas</a></li>
		<li class=""><a href="creacionProducto.php">Creacion de Productos</a></li>
		<li class=""><a href="admin1.php">Administracion de Productos</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->


<form method="post" action="" >
  <fieldset>
  <center>
    <legend  style="font-size: 18pt"><b>Crea tu marca</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa el nombre de la marca</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Marca..." />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #000;"><b>Ingresa su referencia </b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Referencia"/>
    </div>         
    <input  class="btn btn-danger" type="submit" name="submit" value="Agregar"/>
</center>
  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("crearmarca.php");
		}
	?>
	

<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>Daniel Garcia Entrevisata BRM <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>