<?php 
include("inc/cabecera_dashboard.php");
include("inc/nav_dashboard.php");
include("inc/menulateral.php");
include("inc/footer.php");
cabecera("Ruterox");
//Si tenemos sessión pintamos el menú
if (isset($_SESSION['email'])) {
?>	
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<?php nav("1"); ?>
	<br><br>
	<br><br>
	<div class="container-fluid">
	  <div class="row content">
		<?php menuLateral(3) ?>
		<br>
		
		<div class="col-sm-9">
		  <div class="well">
			<h4>Dashboard</h4>
			<p>Some text..</p>
		  </div>
		  <div class="row">
			<div class="col-sm-3">
			  <div class="well">
				<h4>Users</h4>
				<p>1 Million</p> 
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="well">
				<h4>Pages</h4>
				<p>100 Million</p> 
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="well">
				<h4>Sessions</h4>
				<p>10 Million</p> 
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="well">
				<h4>Bounce</h4>
				<p>30%</p> 
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-sm-4">
			  <div class="well">
				<p>Text</p> 
				<p>Text</p> 
				<p>Text</p> 
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="well">
				<p>Text</p> 
				<p>Text</p> 
				<p>Text</p> 
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="well">
				<p>Text</p> 
				<p>Text</p> 
				<p>Text</p> 
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-sm-8">
			  <div class="well">
				<p>Text</p> 
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="well">
				<p>Text</p> 
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
<?php footer(); ?>
</body>
</html>
<?php
}
else
{
	header('Location:../index.php');
}