<?php
    class  Conexion{
        //atributos
        private $host;
        private $usuario;
        private $clave;
        private $charset;
        private $baseDato;
        private $url;
        private $con;
        //metodos

        public function __construct(){
            $this -> host = "localhost";
            $this -> usuario = "root";
            $this -> clave = "";
            $this -> charset = "UTF8";
            $this -> baseDato = "adsi";
            $this -> url = 'mysql:host ='.  $this-> host . ';dbname='. $this -> baseDato;

            

        }
        public function conectar(){
            try{
                $this -> con = new  PDO($this -> url, $this -> usuario, $this -> clave );
                /* =========================================
                ESTABLECEMOS LA CONEXION CON Ñ Y TILDES
                ========================================= */
                $this -> con -> exec('SET CHARACTER SET'. $this -> charset);
            }catch( PDOException $e ) {
                echo "Error en el PDO".$e -> getMessage() . $e -> getLine();
            }
            echo "se a conectado";
             return $this -> con;
            
        } 
        public function __destruct(){
    
            $this -> con =NULL;
        }


    }

        $objCon = new Conexion();
        $objCon -> conectar(); 

?>  
    
