<?php
  session_start();
  if ( $_SESSION["LOGIN"] == 1 ){

    include_once "head.php";
    include_once "menu.php";

    switch ($_SESSION["MENU"]) {
      case 0:
        include_once "body.php";
        break;
      case 1:
        include_once "curso.php";
        break;
      case 2:
        include_once "estudiante.php";
        break;
      case 3:
        include_once "matricula.php";
        break;
      default:
        include_once "body.php";
        break;
    }


    include_once "footer.php";

  } else {

    header("location:login.php");

  }

?>