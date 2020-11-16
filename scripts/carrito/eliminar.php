<?php
session_start();

if(isset($_GET['indice'])){
    $indice = $_GET['indice'];
    unset($_SESSION['carrito'][$indice]);
}
header("Location: /carrito");