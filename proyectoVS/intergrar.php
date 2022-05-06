<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actividad</title>
</head>
<body>
    <h1>Actividad</h1>
    <form action="" method="post">
        <input type="txt" name ="nombre" id= ""> 
        <input type="number" name ="edad" id= ""> 
        <input type="submit" name ="enviar" value = "enviar"id="enviar">
    </form>
<!-- funcion de php -->
    <?php
        if (isset($_POST ['nombre'])){
            for ($i=1;$i<=5;$i++){
                echo "<br>", $_POST['nombre'];

            }

        }
        if (isset($_POST ['edad'])){
            car($_POST ['edad']);

        }
        function car($edad){

            
            if ($edad >= 18){
                echo "Es mayor a edad";

            }else {
                echo "es menor de edad";

            }
        }

        
        

    ?>
</body>
</html>