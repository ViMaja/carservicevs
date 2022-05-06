<?php
require(BASE_PATH.'conectar.php');

class agendaModel extends Conectar{
     private $selec = "SELECT IdAgenda, Identificacion, Nombre, Apellido, Direccion, Telefono, Correo FROM agenda ";
     private $into = "INSERT INTO agenda(IdAgenda,Identificacion, Nombre, Apellido,Direccion, Telefono, Correo) VALUES ";
     private $inicio= 0;
     private $cantidad= 100;
     private $vpage=0;
     public function __construct(){
        parent::__construct();
    }

    public function getAgenda(){
        if(isset($_GET['ti'])){
           $ti=$_GET['ti'];
           if($ti != ""){
              $query="$this->selec WHERE Identificacion = $ti";
           }else{
            header('Location: index.php?page=1');
        }      
        }//busqueda por identificacion
        if(isset($_GET['tn'])){
            $tn=$_GET['tn'];
            if($tn != ""){
               $query="$this->selec WHERE Nombre LIKE '$tn%'";
            }else{
             header('Location: index.php?page=1');
         }      
         }//busqueda por nombre
         if(isset($_GET['ta'])){
            $ta=$_GET['ta'];
            if($ta != ""){
               $query="$this->selec WHERE Apellido LIKE '$ta%'";
            }else{
             header('Location: index.php?page=1');
         }      
         }//busqueda por apellido
         if(isset($_GET['tt'])){
            $tt=$_GET['tt'];
            if($tt != ""){
               $query="$this->selec WHERE Telefono LIKE '$tt%'";
            }else{
             header('Location: index.php?page=1');
         }      
         }//busqueda por telefono
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $query="$this->selec WHERE IdAgenda = $id";
            }//busqueda por id
        if(isset($_GET['page'])){
              $pagina = $_GET["page"];
            if($pagina > 1){
               $this->inicio = ($this->cantidad * ($pagina - 1)) +1 ;
               $this->cantidad = $this->cantidad * $pagina;
            }
            $query ="$this->selec limit $this->inicio,$this->cantidad";
        } //busqueda mostrar todo diviendo lo que viene de la tabla
        
        
       $resultado=$this->conectar_db->query($query);
       if(!$resultado) {
        die("No se encontraron datos");
      }
            $resultado->fetch_array(MYSQLI_ASSOC);
          return  $resultado;
 }//metodo getAagenda 
 
 public function postAgenda(){
   
    if(isset($_POST['gAgenda'])){
    $dni=$_POST['Iden'];
    $nombre=$_POST['Nom'];
    $apellidos=$_POST['Ape'];
    $direccion=$_POST['Dir'];
    $telefono=$_POST['Tel'];
    $correo=$_POST['Cor'];
    $query="$this->into ('null','$dni','$nombre','$apellidos','$direccion','$telefono','$correo')";
   $resultado=$this->conectar_db->query($query);
    if(!$resultado) {
        die("No se pudo guardar datos");
      }
      $_SESSION['message'] = 'Datos de Agenda guardados con exito';
      $_SESSION['message_type'] = 'success';
      header('Location: index.php?page=1');
      exit();
      return;
} 
}//cierre metodo postAgenda
public function getpostAgenda(){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="$this->selec WHERE IdAgenda = $id";
        $resultado=$this->conectar_db->query($query);
        $resultado->fetch_array(MYSQLI_ASSOC);
           return  $resultado;
    }
    if(isset($_POST['gAgenda'])){
        $id=$_POST['id'];
        $dni=$_POST['Iden'];
        $nombre=$_POST['Nom'];
        $apellidos=$_POST['Ape'];
        $direccion=$_POST['Dir'];
        $telefono=$_POST['Tel'];
        $correo=$_POST['Cor'];
        $query="UPDATE agenda SET Nombre = '$nombre', Apellido = '$apellidos', Direccion = '$direccion', Telefono = '$telefono', Correo = '$correo' WHERE IdAgenda = $id";
        $resultado=$this->conectar_db->query($query);
         if(!$resultado) {
             die("No se pudo Actualizar los datos");
           }
           $_SESSION['message'] = 'Datos de Agenda guardados con exito';
      $_SESSION['message_type'] = 'success';
      header('Location: index.php?page=1');
      exit;
      return;
    }

 }//cerrar getpostAgenda
  public function getAgendaeli($id){
        $query="DELETE FROM agenda  WHERE IdAgenda = $id";
        $resultado=$this->conectar_db->query($query);
         if(!$resultado) {
             die("No se pudo Eliminar el  datos");
           }
           header('Location: index.php?page=1');
           exit;
           return;
     
  }
}//cierre classe
?>