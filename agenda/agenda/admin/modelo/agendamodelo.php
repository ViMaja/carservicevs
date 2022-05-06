<?php 
include("../modelo/base/db.php"); 
$con=$conn;
print_r($con);
function buscartodo($pagina){
    $cone=$con;
    $inicio  = 0 ;
    $cantidad = 100;
  if($pagina > 1){
   $inicio = ($cantidad * ($pagina - 1)) +1 ;
   $cantidad = $cantidad * $pagina;}
   $query = "SELECT IdAgenda,Identificacion,Nombre,Apellido,Direccion,Telefono,Correo FROM agenda limit $inicio,$cantidad";
   $c= mysqli_query($cone, $query);
}

if($_SERVER['REQUEST_METHOD'] == "GET"){
    if ( $_GET["page"] > 0){
       $pagina = $_GET["page"]; 
       $inicio  = 0 ;
       $cantidad = 100;
     if($pagina > 1){
      $inicio = ($cantidad * ($pagina - 1)) +1 ;
      $cantidad = $cantidad * $pagina;
      
     }
     $query = "SELECT IdAgenda,Identificacion,Nombre,Apellido,Direccion,Telefono,Correo FROM agenda limit $inicio,$cantidad";
   
}

if ($_GET["id"] > 0){
    $id = $_GET["id"];
    $query = "SELECT IdAgenda,Identificacion,Nombre,Apellido,Direccion,Telefono,Correo FROM agenda WHERE IdAgenda = $id";
    $idb = $_GET["idb"];
    if($idb== 0){
        $c= mysqli_query($conn, $query);
        Header("Location: lista.php?id=$id");
        
    }
}         

                 

}
//$id = $_GET["id"];

function atras(){
    $id = $_GET["id"];
    Header("Location: lista.php?page=1&id=0&idb=1"); 
    exit;
}   
$c= mysqli_query($conn, $query);


 ?>
