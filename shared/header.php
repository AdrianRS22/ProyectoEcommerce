<?php require_once 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Arenal Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta name="author" content="Grupo 3 Cliente - Servidor">

    <link rel="icon" type="favicon/x-icon" href="/assets/img/favicon.jpg">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <header id="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-darkblue static-top">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <i class="las la-2x la-store-alt" id="logo">
                        Arenal Market
                    </i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <?php if (isset($_SESSION['usuario'])): ?>

                        <?php if($_SESSION['usuario']['rol_id'] == 2):?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="AdminDropDown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administrar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="AdminDropDown">
                                <a class="dropdown-item" href="/admin/productos/index.php">Productos</a>
                                <a class="dropdown-item" href="/admin/categorias/index.php">Categorías</a>
                                <a class="dropdown-item" href="#">Reportes</a>
                            </div>
                        </li>
                        <?php endif; ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="UsuarioDropDown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?='Bienvenido, ' . $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="UsuarioDropDown">
                                <a class="dropdown-item" href="/perfil.php">Perfil</a>
                                <a class="dropdown-item" href="/logout.php">Log out</a>
                            </div>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login.php">Iniciar Sesión</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 mb-5" id="contenedor_principal">