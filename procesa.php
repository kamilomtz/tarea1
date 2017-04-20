<head>
  <title>VISITAS</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<?php 
	$file=fopen("archivo.txt", "r");

	while (!feof($file)) {
         $linea=fgets($file);
         if($linea!=""){
		$x=explode(";", $linea);
		?>
		<div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">
              	<?= $x[0]."".$x[1]?>
              </span>
              <p>
              	<?= "Fecha de Nacimiento: ".$x[2]?>
              </p>
            </div>
            <div class="card-action">
              
            </div>
          </div>
        </div>
      </div>
      <?php
  }
	}

	fclose($file);
	$file=fopen("archivo.txt", "a");
	fwrite($file, $_POST['name'].";".$_POST['email'].";".$_POST['asunto'].PHP_EOL);
	fclose($file);
	echo "Nombres: ".$_POST['name'] . "<br>";	
	echo "Correo: ".$_POST['email'] . "<br>";	
	echo "Asunto: ".$_POST['asunto']."<br>";
 ?>
 </body>