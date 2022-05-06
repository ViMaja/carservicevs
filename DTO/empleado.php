<?php
/*
codigoEmpleados  
primerNombre
segundoNombre
primerApellido
segundoApellido
sexo 
religion
escolaridad
deporte
telefono
celular
direccion
fechaNacimiento
cedula
correo 

  */

         //NOMBRE DE CLASE
         class Empleado{

            //ATRIBUTOS
                 public $codEmpleados ;
                 public $primerNombre;
                 public $segundoNombre
                 public $primerApellido;
                 public $segundoAppellido;
                 public $sexo;
                 public $religion;
                 public $escolaridad;
                 public $deporte;
                 public $telefono;
                 public $celular;
                 public $direccion;
                 public $fechaNacimiento;
                 public $cedula;
                 public $correo;
                
             //PROPIEDADES O FUNCIONES
    
             //GETTERS - get  
              public function codEmpleados(){
                //Devuelve el valor = Codigo
                return $this->codEmpleados;
            }
            public function getPrimerNombre(){
                return $this->primerNombre;
            }
            
            public function getSegundoNombre(){
            return $this->segundoNombre;
            }
            public function getPrimerApellido(){
                return $this->PrimerApellido;
            
            public function getSegundoAppellido(){
            return $this->segundoAppellido;
        
            }
            public function getSexo(){
             return $this->sexo;
            
            }
            public function getReligion(){
            return $this->religion;
            }

            public function getEscolaridad(){
            return $this->escolaridad;
            }
    
            public function getDeporte(){
            return $this->deporte;
            }
    
            public function getTelefono (){
            return $this->telefono;
            }
    
            public function getCelular(){
            return $this->celular;
            }
    
            public function getDireccion(){
            return $this->direccion;
            }
    
            public function getFechaNacimiento(){
            return $this->fechaNacimiento;
            }
    
            public function getCedula(){
            return $this->cedula;
            }
    
            public function getPrimerNombre(){
            return $this->primerNombre;
            }
    
            public function getPrimerNombre(){
            return $this->primerNombre;
            }
    
            public function getPrimerNombre(){
            return $this->correo;
            }
    
             
             //SETTERS - set
        
             public function setCodEmpleados($codEmpleados){
                $this -> codEmpleados = $codEmpleados;
            }
    
             
             public function setPrimerNombre($primerNombre){
                $this -> primerNombre = $primerNombre;
            }
    
            
             public function setSegundoNombre($segundoNombre){
                $this -> segundoNombre = $segundoNombre;
            }
    
             
             public function setprimerApellido($primerApellido){
                $this -> primerApellido = $primerApellido;
            }
    
             
             public function setSegundoAppellido($segundoAppellido){
                $this -> segundoAppellido = $segundoAppellido;
            }
    
             
             public function setSexo($sexo){
                $this -> sexo = $sexo;
            }
    
             
             public function setReligion($religion){
                $this -> religion = $religion;
            }
    
             
             public function setEscolaridad($escolaridad){
                $this -> escolaridad = $escolaridad;
            }
    
             
             public function setDeporte($deporte){
                $this -> deporte = $deporte;
            }
    
            
             public function setTelefono($telefono){
                $this -> telefono= $telefono;
            }
    
             
             public function setCelular($celular){
                $this -> celular= $celular;
            }
    
            
             public function setDireccion($direccion){
                $this -> direccion = $direccion;
            }
    
    
            
             public function setFechaNacimiento($fechaNacimiento){
                $this -> fechaNacimiento = $fechaNacimiento;
            }
    
             
             public function setCedula($cedula){
                $this -> cedula = $cedula;
            }
    
            public function setCorreo($Correo){
             $this -> correo = $correo;
            }     
            

$objEmpleado =new Empleado()
$objEmpleado ->setCodigoEmpleado ("ANA");
$objEmpleado->setPrimerNombre ("MARIA");
echo $objEmpleado->getCodigoEmpleado();
    ?>