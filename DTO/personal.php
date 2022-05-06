<?php

/*
codigopersonal 
tipoDocumento
documento 
nombres
apellidos
sexo 
telefono 
celular 
direccion 
fechaNacimiento 
ciudad 
*>

*/
class Personal{ 

public $codigoPersonal;
public $tipoDocumento;
public $nombres;
public $Apelidos;
public $Sexo;
public $telefono;
public $Celular;
public $direccion;
public $fechaNacimiento;
public $ciudad;

/*
     getthers and setthers
*/

     public function getCodigoPersonal (){
         return $this->codigoPersonal;
     }
     public function getTipoDocumento(){
        return $this->tipodocumento;
    }
     public function getDocumento (){
        return $this->documento;
     }

     public function getNombres(){
        return $this->nombres; 
     }
     public function getApellidos(){
        return $this->apellidos;
    
     }
     public function getSexo(){
        return $this->sexo;
     }
     public function getTelefono(){
        return $this->telefono;
     }
     public function getCelular(){
        return $this->celular;
     }
     public function getDireccion(){
        return $this->direccion;
     }
     public function getFechaNacimiento(){
        return $this->fechaNacimeinto;
     }
     public function getCiudad(){
         return $this->ciudad;
     }


    /*SETTERS*/

    public function setCodigoPersonal ($codigoPersonal) {
            $this-> codigoPersonal = $codigoPersonal;
    }

    public function setTipoDocumento ($tipoDocumento) {
            $this-> tipoDocumento = $tipoDocumento;
    }
        
    public function setDocumento  ($documento) {
            $this-> documento = $documento;
    }
    public function setNombres ($nombres) {
        $this-> nombres = $nombres;
    }

     public function setApellidos ($apellidos) {
            $this-> apellidos = $apellidos;
    }
        
    public function setSexo ($sexo) {
            $this-> sexo = $sexo;
    }

    public function setTelefono ($telefono) {
            $this-> telefono = $telefono;
    }
            
    public function setCelular ($celular) {
            $this-> celular = $celular;
    }
    
    public function setDireccion ($direccion) {
           $this-> direccion = $direccion;
    }
    
    public function setFechaNacimiento ($fechaNacimiento) {
            $this-> fechaNacimiento = $fechaNacimiento;
    }
            
    public function setCiudad ($ciudad) {
            $this-> ciudad = $ciudad;
    }

}
/* se crea un objeto por fuera de la clase pra variar que funciona todo bien */
echo "lll";
$objPersonal =new Personal();

/* se capturan los nombres y apellidos */ 

$objPersonal ->setNombres ("ANA MARIA");
$objPersonal->setApellidos ("LONDOÑO");

/* se imprime con el metodo get lo que fue ingresado */
echo "lll".$objPersonal->getNombres();

                
    

    

    ?>