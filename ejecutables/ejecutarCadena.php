<?php
     header('Content-type: application/json; charset=utf-8');
     require_once '../clases/cadena.php';

     $entrada = $_GET['entrada'];

     $Cadena = new cadena();
     $respuesta = $Cadena->cambiar($entrada);
    
    $arr = ['resultado' => $respuesta];

     die(json_encode($arr));
?>
