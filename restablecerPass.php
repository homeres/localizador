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
    <div class="container" role="main">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form id="frmRestablecer" action="funciones/validaremail.php" method="post">
          <div class="panel panel-default">
            <div class="panel-heading"> Restaurar contraseña </div>
            <div class="panel-body">
              <p></p>
              <div class="form-group">
                <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Recuperar contraseña" >
              </div>
            </div>
          </div>
        </form>
        <div id="mensaje">
          
        </div>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#frmRestablecer").submit(function(event){
			event.preventDefault();
			$.ajax({
				url:'funciones/validaremail.php',
				type:'post',
				dataType:'json',
				data:$("#frmRestablecer").serializeArray()
			}).done(function(respuesta){
				$("#mensaje").html(respuesta.mensaje);
				$("#email").val('');
			});
        });
    });
    </script>
  </body>
</html>