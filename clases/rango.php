<?php 
    class rango{
        var $texto;
        var $permitidos="0123456789,";

        public function __construct($texto)
        {
            $this->texto = $texto;
        }

        public function comprobarCaracteres(){
            $tamaño = strlen($this->texto);
            $posicion = 0;
            $temporal = "";
            $respuesta = true;
            for ($i=0; $i < $tamaño; $i++) {
                $temporal=$this->texto[$i];
                $posicion = strpos($this->permitidos,$temporal);
                if ($posicion===false) {
                    $respuesta = false;
                }
            }
            return $respuesta;
        }
        public function convertirTextoArreglo(){
            $arreglo = explode(",",$this->texto);
            return $arreglo;
        }
        public function eliminarRepeticiones($arregloEliminarRepeticiones){
            $arreglo = array_unique($arregloEliminarRepeticiones);
            return $arreglo;

        }
        public function ordenarArreglo($arregloEntrada){
            $arreglo = $arregloEntrada;
            $tamaño = count($arreglo);
            for($i=1;$i<$tamaño;$i++)
            {
                    for($j=0;$j<$tamaño-$i;$j++)
                    {
                            if($arreglo[$j]>$arreglo[$j+1])
                            {$k=$arreglo[$j+1]; $arreglo[$j+1]=$arreglo[$j]; $arreglo[$j]=$k;}
                    }
            }
     
          return $arreglo;
        }
        public function desplegarRango($arregloOrdenado){
            $tamaño = count($arregloOrdenado);
            $inicio = $arregloOrdenado[0];
            $fin = $arregloOrdenado[$tamaño-1];
            $rango = $fin - $inicio;
            $rangoDesplegado=array();
            for ($i=0; $i <= $rango; $i++) { 
                $rangoDesplegado[$i]=$inicio;
                $inicio=$inicio+1;
            }
            return $rangoDesplegado;
        }

    }
?>
