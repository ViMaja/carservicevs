<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo con POST</title>
</head>
<body>
    <form action="resultado.php" method="post">
        
        <table border="1">
            <tr>
                <td>Ingrese su cedula</td>
                <td><input type="number"name="txtced" id="txtced" class="txtced"placeholder="cedula"></td>
            </tr>
            <tr>
                <td>Ingrese su Nombre Completo</td>
                <td><input type="text"name="txtnom" id="txtnom" class="txtnom"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="enviar">
                </td>
            </tr>
            <tr>
                <td>Ingrese su usuario</td>
                <td><input type="text"name="usuario" id="usuario" class="usuario"placeholder="usuario"></td>
            </tr>
            <tr>
                <td>Ingrese su clave</td>
                <td><input type="password"name="clave" id="clave" class="clave" placeholder="contraseña"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="enviar">
                </td>
            </tr>
        </table>
        

    </form>
    
</body>
</html>