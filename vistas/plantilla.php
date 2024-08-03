<?php
$peticionAjax=false;
require_once './config/app.php';
require_once './controladores/vistascontrolador.php';
$IV=new vistascontrolado();

$vistas=$IV->obtener_vistas_controlador();

if ($vistas == "login" || $vistas="404") {
    require_once "./vistas/contenidos/".$vistas.'.php';
}else{
        echo "aca va todo lo que se comparte";
}