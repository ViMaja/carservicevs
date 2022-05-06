<?php

echo "HOLA MUNDO PHP <br><br>";
$nombre ="luis Alfonso Becerra <br><br>";
echo $nombre;

# $edad = 80/3;
# echo "La edad del instructor es: " + $edad;

# $foto = "<img src='busqueda-inversa-imagenes.jpg'> <br><br>";
# echo $foto;

$htmlContenido = "

<table border='1'>
    <tr>
       <td>Codigo</td>
       <td>Nombre</td>
    </tr>

    <tr>
       <td><input type='text' name='' id=''></td>
       <td><input type='text' name='' id=''></td>
    </tr>

    <tr>
       <td colspan='2'></td>
         <select>
                <option value='1'>ADSI</option>
                <option value='2'>TECNICO</option>
                <option value='3'>RRHH</option>
                <option value='4'>ATP</option>
         </select>
    </tr>

</table>

";

echo $htmlContenido;
$sexo = true;
$sexo = false;
if ($sexo == true){
    echo "El es un hombre";
} else{
    echo "Ella es una mujer";
}


?>

