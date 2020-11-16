<?php
session_start();

if(isset($_GET['indice'])){
    $indice = $_GET['indice'];
    $_SESSION['carrito'][$indice]['unidades']++;
}
header("Location: /carrito");