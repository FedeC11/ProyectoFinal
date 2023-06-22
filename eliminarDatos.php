<?php 

include ("conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM estudiantes WHERE id = '$Id'";


$query = mysqli_query($conexion, $sql);
if($query === TRUE){
    header("Location:alumnos.php");
}else{
    echo "No se puedo eliminar";
}

?>