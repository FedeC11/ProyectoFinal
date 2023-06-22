<?php 
include ("conexion.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];
$curp= $_POST['curp'];


$sql = "INSERT INTO estudiantes (id,nombre,apellidos,direccion,cumple,curp) VALUES (NULL,'$nombre','$apellido','$direccion','$fecha_cumple','$curp')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("Location:alumnos.php");
    
} else {
    echo "Datos no insertados";
}


?>