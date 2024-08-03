<?php
require_once "./config/app.php";
require_once "./controladores/vistascontrolador.php";

$plantilla= new vistascontrolado();
$plantilla->obtener_plnatilla_controlador();

?>