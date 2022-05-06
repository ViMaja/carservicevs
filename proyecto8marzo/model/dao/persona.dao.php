<?php
include_once "../dto/persona.dto.php";
include_once "../conexionBD.php";

    class ModeloPersona{
        private $cedula;
        private $nombre;
        private $edad;
        private $estado = false ;

        public function __construct($objPersona){
            $this -> cedula = $objPersona ->  getCedula();
            $this -> nombre = $objPersona ->  getNombre();
            $this -> edad = $objPersona ->  getEdad();

        }

        public function mdlInsertarpersona(){
            $sql ="INSERT INTO `persona`(`CEDULA`, `NOMBRE`, `EDAD`) VALUES (?,?,?)";
            try{
                $conexion = new Conexion();
                $stmlt = $conexion -> conectar() -> prepare($sql);
                $stmlt -> bindParam( 1, $this -> cedula , PDO :: PARAM_INT);
                $stmlt -> bindParam(2,$this -> nombre, PDO :: PARAM_STR_CHAR);
                $stmlt -> bindParam(3, $this -> edad, PDO :: PARAM_INT);
                $stmlt -> execute();
                $this -> estado = true;

            }catch(PDOException $e){
                 echo "error al insertar datos";

            }


        }
        public function mdlMostrarpersona(){

        }
        public function mdlModificarpersona(){

        }
        public function mdlEliminarpersona(){

        }
        
    }
     //Creamos los objetos 
        $objDtoPersona = new Persona();
        //llamamos los atributos
        $objDtoPersona -> setCedula(100332099);
        $objDtoPersona -> setNombre("sebax");
        $objDtoPersona -> setEdad(39);

        $objModPer = new ModeloPersona($objDtoPersona );
        if ($objModPer -> mdlInsertarpersona()){
            echo "inserto";
        }
?>