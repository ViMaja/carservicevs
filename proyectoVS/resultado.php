<?php
        echo $_POST ["txtnom"];
        if (isset($_POST ['usuario'])){
            if ($_POST["usuario"] == "sebax" and $_POST["clave"] == "123"){
                echo "<h1> Bienvenido  al Sistema </h1>";

            }else{
                echo "<br> ERROR...!";
                
            }
        }
?>