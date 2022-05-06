<?php
     

/* EL METODO GET ES PARA MOSTRAR DATOS Y EL METODO SET ES PARA CAPTURA */
    class Vehiculo{
        /* ====================================
                atributo o propiedades
        ==================================== */
        private $placa;
        private $color;
        /* ====================================
                Metodo
        ==================================== */
        public function getPlaca(){
            return $this -> placa;

        }

        public function setPlaca($placa){
            $this -> placa = $placa;

        }
        public function getColor(){
            return $this -> color;

        }

        public function setColor($color){
            $this -> color = $color;
        }
        /* esta funcion se utiliza para mostrar todas llos valores que tiene las clases */
        public function __toString() {
            echo "placa".$this -> placa. "el valor es:".$this -> color;
            
        }
        
       
        
    } //fin de la funcion

    //creacion del objeto
    /* INSTANCIACION */
    /* $objVehivulo = new Vehiculo(); */
    /* $objVehivulo -> setPlaca("KBV855");
    $objVehivulo -> setColor ("negro mate");
    echo $objVehivulo -> getPlaca(); */