<?php
require_once './config/app.php';
include_once "./modelos/vistasModelos.php";

class vistascontrolado extends vistasModelos{
        //controlador obtener plantillas
        public function obtener_plnatilla_controlador(){
            return require_once "./vistas/plantilla.php";
        }
         //controlador obtenervistas
         public function obtener_vistas_controlador(){
            if (isset($_GET['vistas'])) {
                $ruta=explode("/",$_GET['vistas']);
                $respuesta=vistasModelos::obtener_vistas_modelo($ruta[0]);
            }else{
                    $respuesta="login";
            }
            return $respuesta;
         }


}