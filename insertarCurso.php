<?php 
include ("conexion.php");


$nombre_clase = $_POST['nombre_clase'];
$grado = $_POST['grado'];



$sql = "INSERT INTO cursos (clase, grado) VALUES ('$nombre_clase','$grado')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("location:cursos.php");
    
} else {
    echo "Datos no insertados";
}


?>