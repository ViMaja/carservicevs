<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="td"placeholder="ingrese su nombre">
        <input type="submit" value="enviar">
    </form>
    <?php
        if (isset($_GET["td"])){
            echo "sebax";
        }
    ?>
</body>

</html>