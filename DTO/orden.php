<?php
/*
codigoOrden 
fecha
numero 
proveedor
ubicacion 
ruta
telefono
email 
producto
cantidad 
estampilla
cabezote 
furgon 
llantas 
estado 
*/

class Orden{ 

public $codigoOrden ;
public $fecha;
public $numero;
public $proveedor;
public $ubicacion ;
public $ruta;
public $telefono;
public $email;
public $producto;
public $cantidad;
public $estampilla;
public $cabezote;
public $furgon;
public $llantas;
public $estado;


//PROPIEDADES O FUNCIONES
    
             //GETTERS - get  

              public function getCodigoOrden(){
                //Devuelve el valor = Codigo
                return $this->codigoOrden;
            }
            public function getFecha(){
                return $this->fe
                cha;
            }
            public function getNumero(){
            return $this->numero;

            }
            public function getProveedor(){
             return $this->proveedor;
            }

            public function getUbicacion(){
            return $this->ubicacion;
            }
    
            public function getRuta(){
            return $this->ruta;
            }
    
            public function getTelefono(){
            return $this->telefono;
            
            }
    
            public function getEmail(){
            return $this->email;
            }
    
            public function getProducto(){
            return $this->producto;
            }

            public function getCantidad(){
            return $this->cantidad;
            }
    
            public function getEstampilla(){
            return $this->estampilla;
            }
    
            public function getCabezote(){
            return $this->cabezote;
            }

            public function getFurgon(){
            return $this->furgon;
            }
    
            public function getLlantas(){
            return $this->llantas;
            }

            public function getEstado(){
                return $this->estado;

             }
    
             
             //SETTERS - set
        
             public function setCodigoOrden($CodigoOrden){
                $this -> codigoOrden = $CodigoOrden;
            }
    
             
             public function setPrimerNombre($fecha){
                $this -> fecha = $fecha;
            }
    
            
             public function setNumero($numero){
                $this -> numero = $numero;
            
            }
    
             
             public function setProveedor($proveedor){
                $this -> proveedor = $proveedor;
            }
    
             
             public function setUbicacion($ubicacion){
                $this -> ubicacion = $ubicacion;
            }
    
             
             public function setRuta($ruta){
                $this -> ruta = $ruta;
            }
    
             
             public function setTelefono($telefono){
                $this -> telefono= $telefono;
            }
    
             
             public function setEmail($email){
                $this -> email = $email;
            }
    
            
             public function setPruducto($pruducto){
                $this -> producto= $producto;
            }
    
             
             public function setCantiad($cantidad){
                $this -> cantidad= $cantidad;
            }
    
            
             public function setEstampilla($estampilla){
                $this -> estampilla = $estampilla;
            }
    
    
            
             public function setCabezote($cabezote){
                $this -> cabezote = $cabezote;
            }
    
             
             public function setFurgon($furgon){
                $this -> furgon = $furgon;
            }
    
            }
            public function setLlantas($llantas){
             $this -> llantas = $llantas;
            }     
            public function setEstado($estado){
                $this -> estado = $estado;
            /*
            */

$objOrden =new Orden();
$objOrden ->setCodigoOrden ("2310");
$objOrden->setFecha ("13/01/2020");
echo $objOrden->getCodigoOrden();
    ?>
                

