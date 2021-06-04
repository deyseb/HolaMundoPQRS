<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include_once('../dataBase/conexionLogin.php');
    include_once('seguridad_controller.php');

    $conexionLogin = new conexionLogin();
    $conexion = $conexionLogin->conectar();

    $identificacion = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $response = array();

    /**
     * Encriptando el password digitado por el usuario para guardar en la BD
     */

    $passwordHash = password_hash($password,PASSWORD_ARGON2I);
    /**
     * Verificando si el usuario cargó una foto de avatar
     */

    $path = "img/usuarios/";

    if($_FILES['avatar']['tmp_name'] != ""){
        $fileTemp = $_FILES['avatar']['tmp_name'];
        $fileInfo = new SplFileInfo($_FILES['avatar']['name']);
        $fileExtension = $fileInfo->getExtension();
        $avatar = $path.$identificacion.'.'.$fileExtension;
        if(!move_uploaded_file($fileTemp,'../'.$avatar)){
            $response['estado'] = false;
            $response['mensaje'] = 'Error al mover el archivo';
            echo json_encode($response);
            exit();
        }
    }else{
        $avatar = $path."default.png";
    }
    


    /**
     * Subiendo avatar al servidor.
     * Si sube correctamente el avatar, guarda en la bd
     * Si no, arroja un informe de error.
     */

    
        try {
        
        $conexion->beginTransaction();

        $sql = $conexion->prepare("
            INSERT INTO usuarios (identificacion, nombre, email, password, level, avatar)
            VALUES (:identificacion, :nombre, :email, :password, :level, :avatar)
        ");
        $sql->bindParam(':identificacion', $identificacion);
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $passwordHash);
        $sql->bindParam(':level', $level);
        $sql->bindParam(':avatar', $avatar);
        $sql->execute();

        $conexion->commit();
        $response['estado'] = true;
        $response['mensaje'] = 'Usuario Registrado!';

        } catch (\PDOException $th) {
            $conexion->rollBack();
            $response['estado'] = false;
            $response['mensaje'] = 'Usuario no Registrado. Error: $th';
            exit();
        }

    echo json_encode($response);
    exit();