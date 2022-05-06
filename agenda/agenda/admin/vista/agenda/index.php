<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/agenda/rutas.php');?>
<?php include(MODELO_PATH.'agendaModel.php');
$vagenda = new agendaModel();
$listaAgenda = $vagenda->getAgenda();
$dato=0;
?>
<?php include(INCLUDES_PATH.'header.php'); ?>

<?php include(INCLUDES_PATH.'navbar.php'); ?>
<?php include(INCLUDES_PATH.'messajes.php'); ?>
      <form name="f1" id="f1" action="insertar.php" method="POST">
         <a href="#">Inicio </a> /Agenda/ <a href="index.php?page=1">Datos Agenda</a>
          <input type="submit" name="crear" class="btn btn-success btn-sm" value="Crear Agenda">
        </form>
    

    <div class="card" style="width: 50rem;margin-top:1rem;">
      <table name=tabla2>
        
        <tr>
          <form name="f3" action="index.php?page=1" method="get">
          <td><input type="number" name="ti" id="ti" placeholder="buscar identificacion" width="20"></td>         
          </td>
        </form>
        <form name="f4" action="index.php?page=1" method="get">
        <td><input type="text" name="tn" id="tn" placeholder="buscar Nombre"></td>
        </form> 
        <form name="f5" action="index.php?page=1" method="get">
        <td><input type="text" name="ta" id="ta" placeholder="buscar Apellido"></td>
        </form> 
        <form name="f6" action="index.php?page=1" method="get">
        <td><input type="text" name="tt" id="tt" placeholder="buscar Telefono" ></td>
        </form>   
        </tr>
       </form>
         </table> 
</div>
    
   <div class="card" style="width: 60rem;margin-top:1rem;">
      <table class="table table-hover">
        <thead>
          <tr>
          <th>#</th>
            <th>Identificacion</th>
            <th>Nombres</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <?php $num = 0; ?>
          </tr>
        </thead>
        <tbody>

          <?php foreach($listaAgenda as $row): ?>
            <form name="f1" id="f1" action="index.php=page=1" method="get">
          <tr>
          <td><?php echo $num = $num + 1; ?></td>
          <td><?php echo $row['Identificacion']; ?></td>
          <td><?php echo $row['Nombre']. " ". $row['Apellido'] ; ?></td>
            
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td>
               <a href="lista.php?id=<?php echo $row['IdAgenda'];?>" class="btn btn-primary" title="Vista">
              <img src='../../images/buscar.png' width="20" height="20">
              </a>
                            
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
          </form>
      </table>
      </div>


<?php include(INCLUDES_PATH.'footer.php'); ?>
