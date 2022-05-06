<?php
      session_start(); // Activar la sesiones
    class PlantillaController{
        public function ctrPlantilla(){
            //$_SESSION["login"]= false;
            if (isset($_SESSION["login"]) and $_SESSION["login"]==true){
                include_once "view/module/principal.php";
            }else{
                include_once "view/module/login.php";
            }

        }
    }


?>