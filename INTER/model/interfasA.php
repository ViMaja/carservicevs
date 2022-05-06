<?php
require_once "interfasB.php";
class  A implements  B {
    public function mirar():void{
        echo "solo estoy mirando ";
    }
    public function prueba():void{
        echo "listo";
    }
}
$odjA = new A();
$odjA -> mirar();
?>
