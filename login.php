<?php 
 ?>
 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <title>Login Arenal Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta name="author" content="Grupo 3 Cliente - Servidor">

    <link rel="icon" type="favicon/x-icon" href="/assets/img/favicon.jpg">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    
    
</head>

<body>
    
 <div class="container py-5">
    <div class="row">
        <div class="imglogin col-md-12">
        <div class="imglogin col-md-12 text-center mb-5">
            <img class="img-fluid mx-auto imagen_login" style="width: 400px;height: auto;" src="assets/img/arenalmarket.png">
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- form card login -->
                    <div class="card rounded-0" id="login-form">
                        <div class="card-header">
                            <h3 class="mb-0">User Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
     
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="">
                        
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                     <a href="javascript:void('register-form-link');" class="register-form-link">Register</a>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                     <a href="javascript:void('forgot-form-link');" class="forgot-form-link">Forgot Password</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form card login end-->
                    
                    
                        <!-- form card register -->
                    <div class="card rounded-0" id="register-form">
                        <div class="card-header">
                            <h3 class="mb-0">New Account</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">

                                </div>
                                <div class="form-group">
                                    <label for="uname1">Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
  
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
     
                                </div>
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
               
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                     I have an account. <a href="javascript:void('register-form-load');" class="login-form-link">Login.</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Register</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form card register end -->

                    
                        <!-- form card forgot -->
                    <div class="card rounded-0" id="forgot-form">
                        <div class="card-header">
                            <h3 class="mb-0">Reset Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
               
                                </div>
                                <div>
                                <label class="custom-control custom-checkbox">
                                     <a href="javascript:void('register-form-link');" class="register-form-link">Register</a>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                     <a href="javascript:void('login-form-link');" class="login-form-link">Login</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Reset Password</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form card forgot end -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(document).ready(function(){
                $("#register-form").hide();
                $("#forgot-form").hide();   
                $(".register-form-link").click(function(e){
                    $("#login-form").slideUp(0);
                    $("#forgot-form").slideUp(0)    
                    $("#register-form").fadeIn(300);    
                });

                $(".login-form-link").click(function(e){
                    $("#register-form").slideUp(0);
                    $("#forgot-form").slideUp(0);   
                    $("#login-form").fadeIn(300);   
                });

                $(".forgot-form-link").click(function(e){
                    $("#login-form").slideUp(0);    
                    $("#forgot-form").fadeIn(300);  
                });
            });

        });
    </script>
</body>