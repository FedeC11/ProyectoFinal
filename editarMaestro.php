<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];
$id_maestro = $_POST['id_maestro'];

$sql = "UPDATE maestros SET nombre=?, apellido=?, direccion=?, cumple=? WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssi", $nombre, $apellido, $direccion, $fecha_cumple,  $id_maestro);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location:maestros.php");
} else {
    echo "Error al actualizar los datos";
}

$stmt->close();
$conexion->close();
?>
