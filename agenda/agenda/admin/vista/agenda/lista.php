
<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/agenda/rutas.php');?>
<?php include(MODELO_PATH.'agendaModel.php');
$vagenda = new agendaModel();
$listaAgenda = $vagenda->getAgenda();
?>
<?php include(INCLUDES_PATH.'header.php'); ?>
<?php include(INCLUDES_PATH.'navbar.php'); ?>
<?php include(INCLUDES_PATH.'messajes.php'); ?>
<?php include(INCLUDES_PATH.'footer.php'); ?>
<a href="#">Inicio </a> /Agenda/ <a href="index.php?page=1"> Agenda</a> / Ver Agenda
<br><br>
<div class="card" style="width: 20rem; margin-left : 1rem;" >
<div class="card body">
<?php foreach($listaAgenda as $row): ?>
    <table>
    
        <tr>
        <td><a href="index.php?page=1"  title="Atras"><button name="b1" class="btn btn-primary"><img src="../../images/atras.png" width="20" height="20">Atras</button></a></td>
       
        
        <td><a href="editar.php?id=<?php echo $row['IdAgenda']?>"  title="Editar"><button name="b2" class="btn btn-warning"><img src="../../images/lapiz.png" width="20" height="20">Editar</button></a></td>   

        
        <td><a href="eliminar.php?id=<?php echo $row['IdAgenda']?>&ide=0"  title="Eliminar"><button name="b3" class="btn btn-danger"><img src="../../images/eliminar.png" width="20" height="20">Eliminar</button></a></td>          
         </tr>

</table>
<?php endforeach ?>
</div>
</div>
<br>

<div style="margin-left : 1rem;">
    
      <table class="table table-sm">
        <thead>
        <?php foreach($listaAgenda as $row): ?>
          <tr>
               <th width="10%">Identificacion: </td>
               <td><?php echo $row['Identificacion']; ?></td>
            </tr>
            <tr>
            <th>Nombres: </th>
            <th><?php echo $row['Nombre']. " ". $row['Apellido'] ; ?></th>
            </tr>
            </tr>
            <th>Direccion: </th>
            <th><?php echo $row['Direccion']; ?></th>
            </tr>
            <tr>
            <th>Telefono: </th>
            <th><?php echo $row['Telefono']; ?></th>
            </tr>
            <tr>
            <th>Correo: </th>
            <td><?php echo $row['Correo']; ?></td>
          </tr>
          
        </thead>
        <tbody>
        <?php endforeach ?>
        </tbody>
      </table>

         
      <?php include(INCLUDES_PATH.'footer.php'); ?>
