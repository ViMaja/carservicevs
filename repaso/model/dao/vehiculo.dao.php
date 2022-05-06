<?php
     include_once "../dto/vehiculo.dto.php";
    /* include_once "../conexion.php";  */
    include_once "../model/dto/vehiculo.dto.php;";
    include_once "../conexion.php";

    class ModelVehiculo{
        private $placa;
        private $color;
        private $sql;
        private $estado;
        


        public function __construct($objVehiculo){
            $this -> placa = $objVehiculo -> getplaca();
            $this -> color = $objVehiculo -> getcolor();


        }

        public function mdlInsertar(){
            $sql = "INSERT INTO `vehiculo`(`PLACA`, `COLOR`) VALUES (?,?)";
            $this -> estado = FALSE;

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1,$this -> placa, PDO::PARAM_STR);
                $stmt -> bindParam(2,$this -> color, PDO::PARAM_STR);
                $stmt -> execute();
                $this -> estado = true;
                print $this -> color;

            } catch (PDOException $e ){
                echo "Error en el metodo indsertar vehiculo". $e -> getMessage();


            }
            return $this -> estado;
                
        }
        public function mdlConsultar(){
            $resultSet= NULL;
           $sql=  "SELECT * FROM `vehiculo` WHERE PLACA = ? limit 1";
            try {
                $con = new Conexion();
                $stmt =  $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1,$this -> placa, PDO :: PARAM_STR);
                $stmt -> execute();
                $resultSet= $stmt ; 

            } catch (PDOException $e ){
                echo "Error en el metodo consultar vehiculo". $e -> getMessage();

            }
            return $resultSet;


        }
        public function mdlModificar(){
            
            $sql=  "UPDATE VEHICULO SET COLOR =? WHERE PLACA =?";
            $this -> estado = FALSE;

            try {
                $con = new Conexion();
                $stmt =  $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(2,$this -> placa, PDO :: PARAM_STR);
                $stmt -> bindParam(1,$this -> color, PDO :: PARAM_STR);
                $stmt -> execute();
                $this -> estado = FALSE;
            

            } catch (PDOException $e ){
                echo "Error en el metodo modificar  vehiculo". $e -> getMessage();

            }
           


        }
    
        public function mdlEliminar(){
            $sql=  "DELETE FROM VEHICULO   WHERE PLACA =?";
            $this -> estado = FALSE;

            try {
                $con = new Conexion();
                $stmt =  $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1,$this -> placa, PDO :: PARAM_STR);
                
                $stmt -> execute();
                $this -> estado = FALSE;
            

            } catch (PDOException $e ){
                echo "Error en el metodo eliminar  vehiculo". $e -> getMessage();

            }
           
        }

 

    } //fin de la clase
    $objVehivulo = new Vehiculo();
    $objVehivulo -> setPlaca("kbk855");
    $objVehivulo -> setColor("blue");
    $odjMondelVe = new ModelVehiculo($objVehivulo);
    $odjMondelVe -> mdlEliminar();  

   

     
    

?>