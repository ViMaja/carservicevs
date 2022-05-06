<?php
    require_once "silla.php";
    class sillaAmerica implements ISilla{
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
    $objSilla= new sillaAmerica();
    $objSilla -> mesear();

?>
