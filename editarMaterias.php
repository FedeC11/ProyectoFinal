<?php
include("conexion.php");

$nombre_curso = $_POST['nombre_curso'];
$grado = $_POST['grado'];
$id_curso = $_POST['id_curso'];

$sql = "UPDATE cursos SET clase=?, grado=? WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sii", $nombre_curso, $grado, $id_curso);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location:cursos.php");
} else {
    echo "Error al actualizar los datos";
}

$stmt->close();
$conexion->close();
?>
