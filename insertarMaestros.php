<?php 
include ("conexion.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];


$sql = "INSERT INTO maestros (id,nombre,apellido,direccion,cumple) VALUES (NULL,'$nombre','$apellido','$direccion','$fecha_cumple')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("location:maestros.php");
    
} else {
    echo "Datos no insertados";
}


?>
