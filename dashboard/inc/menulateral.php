<?php
function menuLateral($activa){
	$activateDash = "";
	$activateRuta = "";
	$activateClie = "";
	$activateEmpl = "";
	switch ($activa){
		case 1:
			$activateDash = "class='active'";
			break;
		case 2:
			$activateRuta = "class='active'";
			break;
		case 3:
			$activateClie = "class='active'";
			break;
		case 4:
			$activateEmpl = "class='active'";	
			break;			
	}
?>
	<div class="col-sm-3 sidenav hidden-xs">
		<h2>Logo</h2>
		<ul class="nav nav-pills nav-stacked">
			<li <?php echo $activateDash ?>><a href="dashboard.php">Dashboard</a></li>
			<li <?php echo $activateRuta ?>><a href="rutas.php">Rutas</a></li>
			<li <?php echo $activateClie ?>><a href="clientes.php">Clientes</a></li>
			<li <?php echo $activateEmpl ?>><a href="empleados.php">Empleados</a></li>
		</ul><br>
	</div>
<?php
}
?>