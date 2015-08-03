<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?=$title ?></title>
	<link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<!-- script  -->
		

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script src="/assets/js/ajax.js" ></script>
     
</head>
<body class="blue-grey lighten-3" >
	<header>
		<nav class="blue accent-4">
		    <div class="nav-wrapper container">
		    	<a href="/" class="brand-logo">Vagabundo Informatico</a>
		    	<ul class="right hide-on-med-and-down">
		    		<li><a href="/"><i class="material-icons left">home</i>Inicio</a></li>
		    		<li><a href="/post"><i class="material-icons left">view_module</i>Posts</a></li>
			    </ul>
		    </div>
	  	</nav>
	</header>
	
	<div class="container">
		<div >
			<?=$yield ?>	
		</div>
	</div>

</body>
</html>
