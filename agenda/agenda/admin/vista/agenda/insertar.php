

<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/agenda/rutas.php');?>
<?php include(MODELO_PATH.'agendaModel.php');
$vagenda = new agendaModel();
$listaAgenda = $vagenda->postAgenda();
?>
<?php include(INCLUDES_PATH.'header.php'); ?>
<?php include(INCLUDES_PATH.'navbar.php'); ?>
<?php include(INCLUDES_PATH.'messajes.php'); ?>

<a href="#">Inicio </a> /Agenda/ <a href="index.php?page=1">Ver Agenda</a> / Crear Agenda
<div class="card" style="width: 50rem;margin-top:1rem;">
<div class="card-body">
 <table name="tabla">
     <form name="fa" action="insertar.php" method="post">
   <tr>
   <td class="form-group"> <strong>Identificacion:</td>
       <td class="form-group"> <input type="number" name="Iden" id="Iden" class="form-control" placeholder="Ingrese identificacion" style="width: 40rem;" required></td>    
  </tr>
  <tr>
   <td class="form-group" align="right"> <strong>Nombres:</td>
       <td class="form-group"> <input type="text" name="Nom" id="Nom" class="form-control" placeholder="Ingrese Nombres" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Apellidos:</td>
       <td class="form-group"> <input type="text" name="Ape" id="Ape" class="form-control" placeholder="Ingrese Apellidos" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Direccion:</td>
       <td class="form-group"> <input type="text" name="Dir" id="Dir" class="form-control" placeholder="Ingrese Direccion" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Telefono:</td>
       <td class="form-group"> <input type="number" name="Tel" id="Tel" class="form-control" placeholder="Ingrese Telefono" style="width: 40rem;" required></td>    
  </tr>
  <td class="form-group" align="right"> <strong>Email:</td>
       <td class="form-group"> <input type="email" name="Cor" id="Cor" class="form-control" placeholder="Ingrese correo electronico ejemplo@misena.edu.co" style="width: 40rem;" required></td>    
  </tr>
  
  <td class="form-group" align="center" colspan="2"> 
    <input type="submit" name="gAgenda" id="gAgenda" class="btn btn-primary btn-lg" value="Guardar Datos" style="width: 40rem; margin-top: 20px;"></td>    
  </tr>
</form>
</table>
</div>
</div>
<?php include(INCLUDES_PATH.'footer.php'); ?>
