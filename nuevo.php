<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="ani" class="col-sm-2 control-label">ANI</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ani" name="ani" placeholder="Ani" required>
					</div>
				</div>
						
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Cliente</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="Cliente">
					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="status" name="status" placeholder="Estado">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>