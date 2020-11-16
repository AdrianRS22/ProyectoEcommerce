<?php
session_start();

if(isset($_GET['indice'])){
    $indice = $_GET['indice'];
    $_SESSION['carrito'][$indice]['unidades']--;

    if($_SESSION['carrito'][$indice]['unidades'] == 0){
        unset($_SESSION['carrito'][$indice]);
    }
}
header("Location: /carrito");