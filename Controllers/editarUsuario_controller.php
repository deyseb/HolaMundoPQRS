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
                $identificacion = $_POST['identificacion'];
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $level = $_POST['level'];

    
                $sql = "UPDATE usuarios SET identificacion = '$identificacion', nombre = '$nombre', email = '$email', level = '$level'  WHERE id = '$id'";
                //if-else statement in executing our query
                $_SESSION['message'] = ( $conexion->exec($sql) ) ? 'usuario editado correctamente' : 'No se puso editar el usuarios';
    
            }
            catch(PDOException $e){
                $_SESSION['message'] = $e->getMessage();
            }
    
           
        }
        else{
            $_SESSION['message'] = 'Complete el formulario de edición';
        }
    
        header('location: ../registrarUsuario.php');
 ?>       
        <meta http-equiv="refresh" content="0;url=../pqrs.php">