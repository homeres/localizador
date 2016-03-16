<?php

function nav($parametro){
	$hash = "";
	//Si tenemos cookie y no tenemos session rehacemos la sesion
	if(isset($_COOKIE["hash"]) and !isset($_SESSION['email'])) {
		include ("inc/conexion.php");
		
		$hash = $_COOKIE["hash"];
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT email FROM usuario WHERE hash = '".mysql_real_escape_string($hash)."'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$_SESSION["email"] = $row['email'];
			}
		}
	}
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
		  <a class="navbar-brand" href="index.php">Inicio</a>
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
				<li><a href="dashboard/dashboard.php"><i class="fa fa-cog"></i> Perfil</a></li>
				<li><a href="#"><i class="fa fa-users"></i> Mis clientes</a></li>
				<li><a href="#"><i class="fa fa-map-signs"></i> Mis rutas</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="funciones/desconectar.php"><i class="fa fa-lock"></i> Cerrar sesi&oacute;n</a></li>
			  </ul>
			</li>
			<?php
			}else{
			?>
			<li><a href="registro.php">Registrarse </a></li>
			<?php
			}
			?>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="padding:35px 50px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
					<form role="form" action="funciones/logueo.php" name="login" method="post">
						<div class="form-group">
							<label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
							<input type="text" class="form-control" id="usrname" name="usrname" placeholder="Introduce su email">
						</div>
						<div class="form-group">
							<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contrase&ntilde;a</label>
							<input type="password" class="form-control" id="psw" name="psw" placeholder="Introduce contrase&ntilde;a">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="1" checked name="recuerdame">Recu&eacute;rdame</label>
						</div>
						<button type="submit" name="inciar_sesion" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Iniciar sesi&oacute;n</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					<p>¿No est&aacute; registrado? <a href="registro.php">Dar de alta</a></p>
					<p>¿Olvid&oacute; su <a href="restablecerPass.php">contrase&ntilde;a?</a></p>
				</div>
			</div>
      
		</div>
	</div> 
<?php
}
?>