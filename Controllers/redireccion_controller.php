<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once('../dataBase/conexionLogin.php');
include_once('seguridad_controller.php');

        
        if(isset($_POST['editar'])){
            $conexionLogin = new conexionLogin();
            $conexion = $conexionLogin->conectar();
            try{
                $id = $_GET['id'];
                $area = $_POST['area'];

    
                $sql = "UPDATE pqrs SET area = '$area' WHERE id = '$id'";
                //if-else statement in executing our query
                $_SESSION['message'] = ( $conexion->exec($sql) ) ? 'Area redirigida correctamente' : 'No se pudo redirigida el area';
    
            }
            catch(PDOException $e){
                $_SESSION['message'] = $e->getMessage();
            }
    
           
        }
        else{
            $_SESSION['message'] = 'Complete el formulario de Redireccion';
        }
    
        header('location: ../pqrs.php');
 ?>       
        <meta http-equiv="refresh" content="0;url=../pqrs.php">