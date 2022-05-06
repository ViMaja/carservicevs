<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>vehiculo</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="Placa">
            <input type="text" name="color">

            <input type="submit" value="gurdar">

        </form>
        <?php
            if (isset($_POST["Placa"])){
                $placa = $_POST["Placa"];
                $color = $_POST["color"];

                $objInserVehiculo = new  ControladorVehiculo();
                $objInserVehiculo -> $objInserVehiculo();
            }
        ?>
    </body>
</html>