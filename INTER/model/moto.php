<?php
    require_once "ivehiculo.php";

     class Monto implements IVehuculo{
        public function __construct($name){
            echo $name;
        }
        public function getRueda():int{
            $suma = rand(1,9) + 9;
            return $suma;
        }
        public function getTipo():void{
            echo "comercial";
        }
         
     }
     $ojdMonto = new Monto("kawazaki");
?>

