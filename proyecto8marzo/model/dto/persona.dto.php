<?php
    class Persona{
        private $cedula;
        private $nombre;
        private $edad;

        public function setCedula($ced){
            $this-> cedula=$ced;



        }//FIN setCedula
        public function getCedula(){
            return $this -> cedula;
            
        }
        public function setNombre($nom){
            $this-> nombre=$nom;



        }
        public function getNombre(){
            return $this -> nombre;
            
        }//FIN setNombre
        public function setEdad($eda){
            $this-> edad=$eda;



        }
        public function getEdad(){
            return $this -> edad;
            
        }//FIN setEdad

        public function toString(){
            return " <br> cedula: " . $this -> cedula . " <br> nombre: ". $this -> nombre . " <br> edad: " . $this -> edad;

        }


    }//FIN Clase
    /* Imprimir */ 
    $Obj = new Persona();
    /*$Obj -> setCedula(123456);
    echo $Obj -> getCedula();
    $Obj -> setNombre("Luis Perez");
    echo $Obj -> getNombre();
    $Obj -> setEdad(25);
    echo "<br>" . $Obj -> getEdad(); 
    echo $Obj -> toString();  
     */


?>