<?php 
	$texto = strtoupper($_SESSION['nombreT']) . ": " . strtoupper($_SESSION['nombre']) . " " . strtoupper($_SESSION['app']) 
?>
<div class="container col-xs-12">
	<h1>Bienvenido</h1>
	<hr>
	<img src="https://api.fnkr.net/testimg/1000x100/00CED1/FFF/?text=<?php echo $texto ?>" class="img-responsive img-responsive" alt="Image">
</div>