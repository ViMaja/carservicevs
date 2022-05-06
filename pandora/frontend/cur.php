<?php

    session_start();
    $_SESSION["MENU"] = 1;
    header("location:principal.php");

?>