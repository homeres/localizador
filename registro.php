<?php 
include("inc/cabecera.php");
include("inc/nav.php");
include("inc/footer.php");
cabecera("Ruterox");
?>	
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
</head>
<body>
	<?php nav("1"); ?>
	<br><br>
	<br><br>

	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal" action="funciones/newRegistro.php" method="post" name="registro">
				<fieldset>

				<!-- Form Name -->
				<legend>Reg&iacute;strate gratis</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="txtNombre">Nombre de su empresa</label>  
				  <div class="col-md-4">
				  <input id="txtNombre" name="txtNombre" type="text" placeholder="Empresa" class="form-control input-md" required="">
				  <span class="help-block">Nombre de la empresa</span>  
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="txtCif">CIF</label>  
				  <div class="col-md-4">
				  <input id="txtCif" name="txtCif" type="text" placeholder="CIF" class="form-control input-md">
				  <span class="help-block">CIF de su empresa</span>  
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="txtEmail">Email</label>  
				  <div class="col-md-4">
				  <input id="txtEmail" name="txtEmail" type="text" placeholder="Email" class="form-control input-md" required="">
				  <span class="help-block">Email de contacto</span>  
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="txtPass">Contrase&ntilde;a</label>  
				  <div class="col-md-4">
				  <input id="txtPass" name="txtPass" type="password" placeholder="Email" class="form-control input-md" required="">
				  <span class="help-block">Escribe una contrase&ntilde;a</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="txtPassRepeat">Repite la contrase&ntilde;a</label>  
				  <div class="col-md-4">
				  <input id="txtPassRepeat" name="txtPassRepeat" type="password" placeholder="Email" class="form-control input-md" required="">
				  <span class="help-block">Repite la contrase&ntilde;a</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="txtTelefono">Teléfono</label>  
				  <div class="col-md-4">
				  <input id="txtTelefono" name="txtTelefono" type="text" placeholder="Teléfono" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="btnRegistrar"></label>
				  <div class="col-md-4">
					<button id="btnRegistrar" name="btnRegistrar" class="btn btn-primary">Registrarse</button>
				  </div>
				</div>

				</fieldset>
				</form>

		</div>
	<?php footer(); ?>
</body>
</html>