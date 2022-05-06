<?php

include_once "../backend/conexion.php";

if(isset($_POST["txtNom"])){


$nom = $_POST["txtNom"];
$dur = $_POST["txtDur"];
$jor = $_POST["txtJor"];
$fot = $_POST["txtFot"];

$sql = "INSERT INTO CURSO(NOMBRE, DURACION, JORNADA, FOTO)
values ('$nom', $dur, '$jor', '$fot')";

mysqli_query($conexion, $sql);

echo"<script>

swal.fire({
    position: 'top-end'
    icon: 'succes',
    title: 'El curso a sido guardado',
    showConfimBitton: false,
    timer: 1500
})
     <script>";
    

    }
?>