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
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
		margin-bottom: 0;
		border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
		background-color: #f2f2f2;
		padding: 25px;
    }
    
	.carousel-inner img {
		width: 100%; /* Set width to 100% */
		margin: auto;
		min-height:200px;
	}

	/* Hide the carousel text when the screen is less than 600 pixels wide */
	@media (max-width: 600px) {
		.carousel-caption {
			display: none; 
		}
	}
  </style>
</head>
<body>	
	<?php nav("1"); ?>
  
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="jumbotron">
				<div class="container">
				  <h1>Demo Ruterox</h1>
				  <p>Ahorre en gastos de planificaci&oacute;n usando el mejor software del mercado en c&aacute;lculo de rutas.</p>
				  <p><a class="btn btn-primary btn-lg" href="registro.php" role="button">Reg&iacute;strate</a></p>
				</div>
			</div>
		</div>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/slider1.jpg" alt="Chania">
				</div>

				<div class="item">
					<img src="images/slider2.jpg" alt="Chania">
				</div>

				<div class="item">
					<img src="images/slider3.jpg" alt="Flower">
				</div>

				<div class="item">
					<img src="images/slider4.jpg" alt="Flower">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		<!-- Third Container (Grid) -->
		<div class="container-fluid bg-3 text-center">    
			<h3 class="margin">Where To Find Me?</h3><br>
			<div class="row">
				<div class="col-sm-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="images/birds1.jpg" class="img-rounded img-responsive margin" style="width:100%" alt="Image">
				</div>
				<div class="col-sm-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="images/birds2.jpg" class="img-rounded img-responsive margin" style="width:100%" alt="Image">
				</div>
				<div class="col-sm-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="images/birds3.png" class="img-rounded img-responsive margin" style="width:100%" alt="Image">
				</div>
			</div>
		</div>
	<?php footer(); ?>
</body>
</html>