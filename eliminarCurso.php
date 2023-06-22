<?php 

include ("conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM cursos WHERE id = '$Id'";


$query = mysqli_query($conexion, $sql);
if($query === TRUE){
    header("location:cursos.php");
}else{
    echo "No se puedo eliminar";
}

?>