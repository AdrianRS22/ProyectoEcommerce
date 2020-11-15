<?php

if(isset($_SESSION['usuario'])){

    if($_SESSION['usuario']['rol_id'] != 2){
        header("Location: /index.php");
    }
}else{
    header("Location: /index.php");
}