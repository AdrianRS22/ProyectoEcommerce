<?php
require_once '../../shared/header.php';
?>

<div class="row">
    <div class="container_sombreado table-responsive">
        <h1 class="text-center colorMarino"> Administrar Productos</h1>
        <hr>
        <a class="btn btn-success text-white mb-3" href="/admin/productos/add.php">Agregar Producto</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Id de Categoria</td>
                    <td>Otto</td>
                    <td>el precio</td>
                    <td>el stock</td>
                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Acci&oacute;n</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Editar</a>
                                <a class="dropdown-item" href="#">Eliminar</a>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Id de Categoria</td>
                    <td>Thornton</td>
                    <td>el precio</td>
                    <td>el stock</td>
                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Acci&oacute;n</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Editar</a>
                                <a class="dropdown-item" href="#">Eliminar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Id de Categoria</td>
                    <td>the Bird</td>
                    <td>el precio</td>
                    <td>el stock</td>
                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">Acci&oacute;n</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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

<?php require_once '../../shared/footer.php';?>

</body>

</html>