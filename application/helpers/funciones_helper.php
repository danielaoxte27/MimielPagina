<?php

function convertir_estatus($p){
    if($p=="1"){
        $respuesta="Activo";
    }else{
        $respuesta="Inactivo";
    }
    return $respuesta;
}

?>