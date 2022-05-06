<?php
/*
codigoPersonal
cedula 
nombre 
apellido 
telefono 
direccion 
email 
profesion 
paisNacimiento 
nivelEducativo 
fechaNacimiento 
sexo 
grupoSanguineo 
estadoCivil 
cargoFamiliar
*/

class Personal{ 

public $codigoPersonal;
public $cedula;
public $nombre ;
public $apellido ;
public $direccion ;
public $email;
public $profesion;
public $paisNacimiento;
public $nivelEducativo;
public $fechaNacimiento;
public $sexo;
public $grupoSanguineo ;
public $estadoCivil 
public $cargoFamiliar ;

//PROPIEDADES O FUNCIONES
    
             //GETTERS - get  

              public function getCodigoPersonal(){
                //Devuelve el valor = Codigo
                return $this->codigoPersonal;
            }
            public function getCedula(){
                return $this->cedula;
            }
        
            public function getNombre(){
              return $this->nombre;
            }
        
            public function getApellido(){
             return $this->apellido;
            }
    
            public function getDireccion(){
            return $this->direccion;
            }
    
            public function geEmail(){
            return $this->email;
            }
    
            public function getProfesion(){
            return $this->profesion;
            
            }
    
            public function getPaisNacimiento(){
            return $this->paisNacimiento;
            }
    
            public function getNivelEducativo(){
            return $this->nivelEducativo;
            }
    
            public function getFechaNacimiento(){
            return $this->fechaNacimiento;
            }
    
            public function getSexo(){
            return $this->sexo;
            }
    
            public function getGrupoSanguineo(){
            return $this->grupoSanguineo;
            }
    
            public function getEstadoCivil(){
            return $this->estadoCivil;
            }
    
            public function getCargoFamiliar(){
            return $this->cargoFamiliar;
            }
    

             //SETTERS - set
        
             public function setCodigoPersonal($codigoPersonal){
                $this -> codigoPersonal = $CodigoPersonal;
            }
    
             
             public function setCedula($cedula){
                $this -> cedula = $cedula;
            }
    
            
             public function setNombre($nombre){
                $this -> nombre = $nombre;
            
            }
    
             
             public function setApellido($apellido){
                $this -> pellido = $apellido;
            }
    
             
             public function setDireccion($direccion){
                $this -> direccion = $direccion;
            }
    
             
             public function setEmail($email){
                $this -> email = $email;
            }
    
             
             public function setProfesion($profesion){
                $this -> profesion= $profesion;
            }
    
             
             public function setePaisNacimiento($paisNacimiento){
                $this -> paisNacimiento = $paisNacimiento;
            }
    
            
             public function setNivelEducativo($nivelEducativo){
                $this -> nivelEducativo= $nivelEducativo;
            }
    
             
             public function setFechaNacimiento($fechaNacimiento){
                $this -> fechaNacimiento= $fechaNacimiento;
            }
    
            
             public function setSexo($sexo){
                $this -> sexo = $sexo;
            }
    
    
            
             public function setGrupoSanguineo($grupoSanguineo){
                $this -> grupoSanguineo = $grupoSanguineo;
            }
    
             
             public function setEstadoCivil($estadoCivil){
                $this -> estadoCivil = $estadoCivil;
            }
            public function setCargoFamiliar($cargoFamiliar){
             $this -> cargoFamiliar = $cargoFamiliar;
            }     
            /*
            */
    

$objPersonal =new Personal();
$objPersonal ->setCodigoPersonal("2009");
$objPersonal->setCedula ("1010035121");
echo $objPersonal->getCodigoPersonal();
    ?>
        


