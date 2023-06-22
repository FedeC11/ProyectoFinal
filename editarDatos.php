<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];
$DNI = $_POST['curp'];
$id_estudiante = $_POST['id_estudiante'];

$sql = "UPDATE estudiantes SET nombre=?, apellidos=?, direccion=?,cumple=?, curp=? WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssssi", $nombre, $apellido, $direccion, $fecha_cumple, $DNI, $id_estudiante);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location:alumnos.php");
} else {
    echo "Error al actualizar los datos";
}

$stmt->close();
$conexion->close();
?>
