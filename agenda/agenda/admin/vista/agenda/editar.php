<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/agenda/rutas.php');?>
<?php include(MODELO_PATH.'agendaModel.php');
$vagenda = new agendaModel();
$listaAgenda = $vagenda->getpostAgenda();
?>
<?php include(INCLUDES_PATH.'header.php'); ?>
<?php include(INCLUDES_PATH.'navbar.php'); ?>
<?php include(INCLUDES_PATH.'messajes.php'); ?>
<script type="text/javascript" src="../../js/validartexto.js"></script>
<a href="#">Inicio </a> /Agenda/ <a href="lista.php?id=<?php echo $id = $_GET['id']; ?>">Ver Agenda</a> / Editar Agenda
<div class="card" style="width: 50rem;margin-top:1rem;">
<div class="card-body">
 <table name="tabla">
     <form name="fa" action="editar.php" method="post">
     <?php foreach($listaAgenda as $row): ?>
   <tr>
   <td class="form-group"> <strong>Identificacion:</td>
       <td class="form-group"> <input type="number" name="Ident" id="Ident" class="form-control" value="<?php echo $row['Identificacion']?>" placeholder="Ingrese identificacion" style="width: 40rem;" disabled></td>    
  </tr>
  <tr>
   <td class="form-group" align="right"> <strong>Nombres:</td>
       <td class="form-group"> <input type="text" name="Nom" id="Nom" class="form-control" value="<?php echo $row['Nombre']?>" placeholder="Ingrese Nombres" onkeypress="return sololetras(event)" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Apellidos:</td>
       <td class="form-group"> <input type="text" name="Ape" id="Ape" class="form-control" value="<?php echo $row['Apellido']?>" placeholder="Ingrese Apellidos" onkeypress="return sololetras(event)" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Direccion:</td>
       <td class="form-group"> <input type="text" name="Dir" id="Dir" class="form-control" value="<?php echo $row['Direccion']?>" placeholder="Ingrese Direccion" onkeypress="return solodir(event)" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Telefono:</td>
       <td class="form-group"> <input type="number" name="Tel" id="Tel" class="form-control" value="<?php echo $row['Telefono']?>" placeholder="Ingrese Telefono" onkeypress="return solonumeros(event)" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Email:</td>
       <td class="form-group"> <input type="email" name="Cor" id="Cor" class="form-control" value="<?php echo $row['Correo']?>" placeholder="Ingrese correo electronico ejemplo@misena.edu.co" style="width: 40rem;" required></td>    
  </tr>
  <input type="hidden" name="Iden" id="Iden" value="<?php echo $row['Identificacion']?>">
  <input type="hidden" name="id" id="id" value="<?php echo $row['IdAgenda']?>">
  <td class="form-group" align="center" colspan="2"> 
    <input type="submit" name="gAgenda" id="gAgenda" class="btn btn-primary btn-lg" value="Guardar Datos" style="width: 40rem; margin-top: 20px;"></td>    
  </tr>
  <?php endforeach ?>
</form>
</table>
</div>
</div>
<?php include(INCLUDES_PATH.'footer.php'); ?>