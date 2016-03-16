<?php 
include("inc/cabecera.php");
include("inc/nav.php");
include("inc/footer.php");
cabecera("Ruterox");
?>	
</head>
<body>
	<?php nav(""); ?>
	<br><br>
	<br><br>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-xs-6 col-xs-offset-3">

				<form class="form-signin" role="form">
					<h2 class="form-signin-heading">Iniciar sesi&oacute;n</h2>
					<input type="email" class="form-control" placeholder="Dirección de correo electrónico" required autofocus >
					<input type="password" class="form-control" placeholder="Contraseña" required >
					<div class="checkbox"><label><input type="checkbox" value="remember-me" class="checkbox"> Recu&eacute;rdame</label></div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" >Iniciar sesión</button>
				</form>
				
				<p>o</p> 
				
				<button class="btn btn-lg btn-primary btn-block" type="button" >Reg&iacute;strate</button>
			</div>
		</div>
	<?php footer(); ?>
</body>
</html>