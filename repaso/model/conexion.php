<?php
    class Conexion{
        //propiedades
        private $usuario;
        private $base;
        private $drive;
        private $url;
        private $host;
        private $charSet;
        private $con;
        //creamos el contructor

        public function __construct(){
            $this -> usuario = "root";
            $this -> clave = "";
            $this -> host = "localhost";
            $this -> drive = "mysql";
            $this -> base = "adsi";
            $this -> url = $this-> drive. ":host=". $this->host .";dbname=". $this -> base;
            $this -> charSet = "UTF8";
            $this -> con =  NULL;

            
        }//fin costructor
        public function conexion(){
            try {
                $this -> con = new PDO($this -> url, $this -> usuario, $this-> clave);
                $this -> con -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this -> con -> exec('SET CHARACTER SET '.$this->charSet);
                
            } catch (PDOException $e) {
                echo "Error en el metodo consultar vehiculo". $e -> getMessage();

            }
            return $this-> con;
        }
        public function __destruct(){
            $this -> con = NULL;
        }

        
    }//fin de la clase
/* 
    try {
        $c = new conexion();

        $conex = $c -> conexion();
    } catch (\Exception $e) {
        echo "Error";
        return $this -> con;
    }// fin conexion */

    

    
?>