<?php 
	if (isset($_POST['titulo'])) {
		$consulta = new PostModel();
		return $consulta->create([
			
			"titulo"=> $_POST['titulo'],
			"cover"=> $_POST['cover'],			
			"contenido"=> $_POST['contenido'],
			"author"=> $_POST['author'],
			"categoria"=> $_POST['categoria'],
			"user"=> $_POST['user']
			]);
	}
?>

<section class="card padding-largo">
	<div class="row">
		<h4 class="center-align">
			Nuevo Post
		</h4>
	</div>
	<div class="row">
		<form action="" method="POST">
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<label for="titulo">Titulo del Post</label>
					<input type="text" name="titulo" id="titulo">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">					
					<label for="cov">Ruta del Cover</label>
					<input type="text" name="cover" id="cov">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<textarea id="textarea1" class="materialize-textarea" name="contenido"></textarea>
          			<label for="textarea1">Contenido del Post</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<select class="browser-default" name="categoria">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Option 1</option>
				      <option value="2">Option 2</option>
				      <option value="3">Option 3</option>
				    </select>
				</div>
			</div>
			<input type="hidden" name="author" value="">
			<input type="hidden" name="user" value="zsckare">
			<div class="row">
				<div class="center-align">
					<input type="submit" class="btn" value="Crear Nuevo Post">
				</div>
			</div>
		</form>
	</div>
</section>