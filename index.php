<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>FORMULARIO BOOTSTRAP</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, install-scale=1.0, maximum-scale">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Asap:400,700">
			<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="ibody">
			<div class="jumbotron">
				<h1>Escuela de Campeones</h1>
			</div>
			<div class="fcontacto">
				<div class="thumb pull-left">
					<img class="img-thumbnail" src="cracks.jpg" alt="Contactanos">
				</div>
				<form name="fcontacto" id="fcontacto" action="procesa.php" method="POST"
				>
					<div class="row">
						<div class="col-md-6">
							<label>Tu nombre:</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Tu email:</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
					</div>
					<label>Asunto:</label>
					<input type="text" name="asunto" id="asunto" class="form-control">
					<label>Tu mensaje:</label>
					<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
					<input type="submit" class="btn btn-info" value"Enviar">
					<div id="respuesta" style="display: none;"></div>
				</form>
			</div>
		</div>
	</body>

</html>