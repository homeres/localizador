<?php
session_start();
function cabecera($parametro){

	echo "<!DOCTYPE html>
			<html lang='en'>
			<head>
				<title>".$parametro."</title>
				<link rel='shortcut icon' href='images/camion.png' type='image/x-icon'>
				<link rel='icon' href='images/camion.png' type='image/x-icon'>
				<meta http-equiv='Content-type' content='text/html; charset=utf-8' />
				<meta http-equiv='X-UA-Compatible' content='IE=edge'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<link href='bootstrap-3.3.6/css/bootstrap.min.css' rel='stylesheet'>
				<!-- LIBRERIA DE ICONOS -->
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
				  <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
				  <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
				<![endif]-->
				<script src='jquery/jquery-1.12.1.min.js'></script>
				<script src='jquery-ui-1.11.4/jquery-ui.min.js'></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src='bootstrap-3.3.6/js/bootstrap.min.js'></script>
				<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
				<script type='text/javascript'>
					window.cookieconsent_options = {'message':'Ruterox utiliza cookies propias y de terceros para su funcionamiento,para mantener la sesión y personalizar la experiencia del usuario, así como para obtener estadísticas anónimas de uso de la web. Para más información sobre las cookies utilizadas consulta nuestra POLÍTICA DE COOKIES','dismiss':'Aceptar','learnMore':'Mas información','target':'_black','link':'cookies.html','theme':'dark-bottom'};
				</script>
				<script type='text/javascript' src='js/cookieconsent.min.js'></script>
				<!-- End Cookie Consent plugin -->";
}
?>
