<?php 

include ("conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM students WHERE id_estudiante = '$Id'";


$query = mysqli_query($conexion, $sql);
if($query === TRUE){
    header("location:maestros.php");
}else{
    echo "No se puedo eliminar";
}

?>