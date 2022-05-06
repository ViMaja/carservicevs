<?php
    require_once "padre.php";
    class Hijo extends Padre{
        public function miniteca(){
            echo "baila regueton";

        }
        public function conquistar(){
            echo "mujeriego";
        }
    }
    $objHijo = new Hijo();
    $objHijo -> viajar();
?>