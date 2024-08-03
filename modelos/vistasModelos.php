<?php
  class vistasModelos{
    //este modelo es para obtener las vistas
    protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=['home','perfil'];
            if (in_array($vistas,$listaBlanca)) {
                if (is_file("../vistas/contenidos/".$vistas.".php")) {
                    $contenido = "../vistas/contenidos/".$vistas.".php";
                } else {
                    $contenido="404";
                }
                
            }elseif($vistas =="login" || $vistas=="index"){
                $contenido="login";
            }else{
                $contenido="404";
            };
            return $contenido;
    }
  };