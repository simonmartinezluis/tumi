<?php
     header('Content-type: application/json; charset=utf-8');

     $dato1 = $_GET['dato1'];
     $dato2 = $_GET['dato2'];
     $binario1 = decbin($dato1);
     $binario2 = decbin($dato2);

    $arr = ['binario1' => $binario1  , 'binario2' => $binario2];

     die(json_encode($arr));
?>