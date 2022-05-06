<?php
    require_once "silla.php";
    class sillaEuropa implements ISilla{
        public function mesear(){
            echo "me siento";

        }
        
        public function crear():bool{
            return false;

        }

        public function eliminar(): string{
            return "hola";

        }

        

    }
    $objSilla= new sillaEuropa();
    $objSilla -> mesear();

?>
