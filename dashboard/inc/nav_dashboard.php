<?php
function nav($parametro){
?>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="../index.php">Inicio</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			<!--<li><a href="#">Link</a></li>-->
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre Routex <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Utilidad</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Buscar">
			</div>
			<button type="submit" class="btn btn-default">Buscar</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<?php
			if (($parametro) != "" and (!isset($_SESSION['email']))){
				echo "<li><a href='#' id='myBtn'>Iniciar sesi&oacute;n </a></li>";
			}
			//Si tenemos sessión pintamos el menú
			if (isset($_SESSION['email'])) {
			?>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i>Mi cuenta<span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="dashboard.php"><i class="fa fa-cog"></i> Perfil</a></li>
				<li><a href="#"><i class="fa fa-users"></i> Mis clientes</a></li>
				<li><a href="#"><i class="fa fa-map-signs"></i> Mis rutas</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="../funciones/desconectar.php"><i class="fa fa-lock"></i> Cerrar sesi&oacute;n</a></li>
			  </ul>
			</li>
			<?php
			}else{
			?>
			<li><a href="../registro.php">Registrarse </a></li>
			<?php
			}
			?>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
<?php
}
?>