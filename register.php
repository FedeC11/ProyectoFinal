<?php

    session_start(); //Asignacion de sesion para cada arcchivo php
    if (isset($_SESSION['email'])){
        header('Location:profile.php'); //Direccion cuando cumple con Sesion (email)
    }
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email = filter_var(strtolower($_POST['email']));
        $password = (strtolower($_POST['password']));
        $name = $_POST['nombre'];
        $phone = $_POST['phone'];
        $errores = '';
        if (empty($email) or empty($password)){//Definiendo los campos requeridos atravez de $errores o espacios vacios
            $errores.='<div class="alert alert-primary" role="alert">Rellene todos los campos requeridos </div>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=proyectofinal', 'root', '');
            }catch (PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        $statemen = $conexion->prepare("SELECT * FROM maestros WHERE email= :email LIMIT 1"); 
        //Seleccionando la tabla de base de datos y filtrando un uso limitado de usuarios.
        $statemen->execute(array(':email'=>$email));

        $resultado = $statemen->fetch();

        if ($resultado != false){

            $errores .= '<div class="alert alert-primary" role="alert">Correo registrado exitosamente</div>';

        }if($errores == ''){//Insertamos los registros a la base de datos a travez de una sentencia

            $statemen = $conexion->prepare('INSERT INTO maestros(id, nombre, email, phone, contra)values(NULL, :nombre, :email, :phone, :password)');

            $statemen->execute(array(':nombre' => $name, ':email' => $email, ':phone' => $phone, ':password' => $password));

        header('Location:inicio.php');
            }
        }
    }
require 'register.view.php';
?>