<?php 
    class cadena{
        var $abecedario="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
        public function __construct()
        {

        }

        public function cambiar($textoEntrada){
            $texto = $textoEntrada;
            $tamaño = strlen($texto);
            $temporal="";
            $posicion="";
            for ($i=0; $i < $tamaño; $i++) { 
                $temporal=$texto[$i];
                $posicion = strpos($this->abecedario,$temporal);
                if($posicion!==false){
                    //$texto[$i]=$this->abecedario[$posicion+1];
                    if($posicion<27){
                        $texto[$i]=$this->abecedario[$posicion+1];
                    }else{
                        if($posicion==27){
                            $texto[$i]=$this->abecedario[0];
                        }else{
                            if ($posicion<55) {
                                $texto[$i]=$this->abecedario[$posicion+1];
                            }else{
                                $texto[$i]=$this->abecedario[28];
                            }
                        }
                    }
                }else{
                    
                }
            }
            return $texto;
        }

    }
?>
