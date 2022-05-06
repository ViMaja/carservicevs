<?php
require_once "view/module/header.php";
require_once "view/module/menu.php";
if ($_GET['ruta']== 'producto'){
    "view/module/producto.php";

}else{
require_once "view/module/presentation.php";
}
require_once "view/module/footer.php";

?>