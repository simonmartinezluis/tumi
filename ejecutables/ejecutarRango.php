<?php
     header('Content-type: application/json; charset=utf-8');
     require_once '../clases/rango.php';

     $entrada = $_GET['entrada'];

    $rango = new rango($entrada);
    $valores = "";
    $respuesta = $rango->comprobarCaracteres();
     if($respuesta){
          $arreglo = $rango->convertirTextoArreglo();
          $arregloSinRepeteciones = $rango->eliminarRepeticiones($arreglo);
          $arregloOrdenado = $rango->ordenarArreglo($arregloSinRepeteciones);
          $arregloRespuesta = $rango->desplegarRango($arregloOrdenado);
          $respuesta = $arregloOrdenado;
          $valores = $arregloRespuesta;
     }else{
          $respuesta = false;
          $valores = "vacio";
     }

    $arr = ['resultado' => $respuesta , 'valores' => $valores];

     die(json_encode($arr));
?>