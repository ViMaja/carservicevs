
<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/agenda/rutas.php');?>
<?php include(INCLUDES_PATH.'header.php'); ?>
<?php include(INCLUDES_PATH.'navbar.php'); ?>
<?php include(INCLUDES_PATH.'messajes.php'); ?>
<input type="text" name="conta" id="conta" value="<?php echo $conta= $_GET['ide']; ?>">
<input type="text" name="cid" id="cid" value="<?php echo $conta= $_GET['id']; ?>">
<script type="text/javascript" src="../../js/eliminar.js"></script>
<?php include(MODELO_PATH.'agendaModel.php');
$vagenda = new agendaModel();
$ide = $_GET['ide'];
$id = $_GET['id'];
if ($ide > 0){
    $listaAgenda = $vagenda->getAgendaeli($id);
}else{
    
}
//
?>