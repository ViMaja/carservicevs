<?php
    require_once "silla.php";
    class sillaAsiatica implements ISilla{
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
    $objSilla= new sillaAsiatica();
    $odjSiobjSillalla -> mesear();

?>

    
