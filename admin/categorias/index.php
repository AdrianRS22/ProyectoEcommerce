<?php
    require_once '../../shared/header.php';
?>

<div class="row">

	<div class="container_sombreado table-responsive">
		<h1 class="text-center colorMarino">Administrar Categorias</h1>
		<hr>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Subcategorias</th>
					<th scope="col">Accion</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td id="primeraFila"></td>
					<td>Otto</td>
					<td><div class="dropdown show">
						<a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Accion</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="subcategoria.php">Subcategorias</a>
							<a class="dropdown-item" href="#">Editar</a>
							<a class="dropdown-item" href="#">Eliminar</a>
						</div>
					</div>
				</td>

			</tr>
			<tr>
				<th scope="row">2</th>
				<td id="SegundaFila"></td>
				<td>Thornton</td>
				<td><div class="dropdown show">
					<a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Accion</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="subcategoria.php">Subcategorias</a>
						<a class="dropdown-item" href="#">Editar</a>
						<a class="dropdown-item" href="#">Eliminar</a>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">3</th>
			<td>Larry</td>
			<td>the Bird</td>
			<td><div class="dropdown show">
				<a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Accion</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="subcategoria.php">Subcategorias</a>
					<a class="dropdown-item" href="#">Editar</a>
					<a class="dropdown-item" href="#">Eliminar</a>
				</div>
			</div>
		</td>
	</tr>
</tbody>
</table>        	
</div>
</div>

<?php require_once '../../shared/footer.php'; ?>
<script type="text/javascript" src="../../assets/js/pages/administrar_categorias.js" ></script>

</body>

</html>