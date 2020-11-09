<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login Arenal Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta name="author" content="Grupo 3 Cliente - Servidor">

    <link rel="icon" type="favicon/x-icon" href="/assets/img/favicon.jpg">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="imglogin col-md-12">
                <div class="imglogin col-md-12 text-center mb-5">
                    <img class="img-fluid mx-auto imagen_login"
                        src="assets/img/arenalmarket.png">
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- form card login -->
                        <div class="card rounded-0" id="login-form">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" method="POST">
                                    <div class="alert d-none" id="alertaLogin">
                                        <span></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control form-control-lg rounded-0"
                                            id="correo_login" name="correo">
                                    </div>

                                    <div class="form-group">
                                        <label for="clave">Contraseña</label>
                                        <input type="password" class="form-control form-control-lg rounded-0"
                                            id="clave_login" name="clave">
                                    </div>

                                    <div>
                                        <label class="custom-control custom-checkbox">
                                            <a href="javascript:void('register-form-link');"
                                                class="register-form-link">Registrarse</a>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <a href="javascript:void('forgot-form-link');"
                                                class="forgot-form-link">Olvidé mi contraseña</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right"
                                        id="btnLogin">Login</button>
                                </form>
                            </div>
                        </div>
                        <!-- /form card login end-->


                        <!-- form card register -->
                        <div class="card rounded-0" id="register-form">
                            <div class="card-header">
                                <h3 class="mb-0">Registrarse</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" id="formRegistro" method="POST">

                                    <div class="alert d-none" id="alertaRegistro">
                                        <span></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input type="email" class="form-control form-control-lg rounded-0"
                                            id="correo_registro" name="correo">
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control form-control-lg rounded-0"
                                            id="nombre_registro" name="nombre">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control form-control-lg rounded-0"
                                            id="apellidos_registro" name="apellidos">
                                    </div>

                                    <div class="form-group">
                                        <label for="clave">Contraseña</label>
                                        <input type="password" class="form-control form-control-lg rounded-0"
                                            id="clave_registro" name="clave">
                                    </div>

                                    <div>
                                        <label class="custom-control custom-checkbox">
                                            Ya tengo una cuenta. <a href="javascript:void('register-form-load');"
                                                class="login-form-link">Login.</a>
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg float-right">Registrar</button>
                                </form>
                            </div>
                        </div>
                        <!-- /form card register end -->


                        <!-- form card forgot -->
                        <div class="card rounded-0" id="forgot-form">
                            <div class="card-header">
                                <h3 class="mb-0">Resetear contraseña</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formResetearPassword">
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control form-control-lg rounded-0"
                                            id="resetear_correo" name="correo">
                                    </div>
                                    <div>
                                        <label class="custom-control custom-checkbox">
                                            <a href="javascript:void('register-form-link');"
                                                class="register-form-link">Registrarse</a>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <a href="javascript:void('login-form-link');"
                                                class="login-form-link">Loguearse</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">
                                        Resetear contraseña</button>
                                </form>
                            </div>
                        </div>
                        <!-- /form card forgot end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/parsley.min.js"></script>
<script src="/assets/js/parsley_form_conf.js"></script>
<script src="/assets/js/pages/login.js?v=<?php echo date('his'); ?>"></script>
<script src="/assets/js/pages/registro.js?v=<?php echo date('his'); ?>"></script>