<?php
session_start();
require("confi.php");

class Conectar{
    protected $conectar_db;

    public function __construct(){
        $this->conectar_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_BD);
        if($this->conectar_db->connect_errno){
            $_SESSION['message'] = 'Error al conectar base datos';
            $_SESSION['message_type'] = 'danger';
            return;
        }
        
    }
}
?>