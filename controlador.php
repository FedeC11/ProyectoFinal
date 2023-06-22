<?php
    session_start(); 
        if(isset($_SESSION['email'])){
            header('Location:profile.php'); //Redirecciona archivos php
        } else {
            header('Location:register.php');
        }
?>
