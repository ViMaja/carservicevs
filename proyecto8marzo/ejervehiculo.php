<?php

class Vehiculo{

    public $marca;
    public $modelo;
    private $llanta;
    public $arrancar; 
    public $frenar;
    public $saltar;
    private $pinchar;
    public $color;
    public $nombre;
    public $tipo; 

    public function mostrar()
    {
        echo $this->marca;
        echo $this->modelo;
        echo $this->color;
        echo $this->nombre;
        echo $this->tipo;
    } //fin mostra

    public function arrancar(){
        echo "El carro arranca";
    }//fin arrancar 
    public function frenar(){
        echo "El carro frena";
    }//fin fenar 
    public function saltar(){
        echo "El carro salta";
    }//fin saltar

}

$objVeh = new Vehiculo();
$objVeh->marca = "chevrolet";
$objVeh->modelo = "Onix";
$objVeh->color = "Gris";
$objVeh->nombre = "2022";
$objVeh->tipo = "Suv";
$objVeh->mostrar();

$objVeh1 = new Vehiculo();
$objVeh1->arrancar();
$objVeh2 = new Vehiculo();
$objVeh2->frenar();
$objVeh2 = new Vehiculo();
$objVeh2->saltar();