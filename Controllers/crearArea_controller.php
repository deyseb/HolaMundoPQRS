<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include_once('../dataBase/conexionLogin.php');
    include_once('seguridad_controller.php');

    $conexionLogin = new conexionLogin();
    $conexion = $conexionLogin->conectar();
    
    $lider = $_POST['lider'];
    $nombreArea = $_POST['nombreArea'];

    $response = array();

    
        try {
        
        $conexion->beginTransaction();

        $sql = $conexion->prepare("
            INSERT INTO controla (lider, nombreArea)
            VALUES (:lider, :nombreArea)
        ");
        $sql->bindParam(':lider', $lider);
        $sql->bindParam(':nombreArea', $nombreArea);
        $sql->execute();

        $conexion->commit();
        $response['estado'] = true;
        $response['mensaje'] = 'Area Registrada!';

        } catch (\PDOException $th) {
            $conexion->rollBack();
            $response['estado'] = false;
            $response['mensaje'] = 'Area no Registrada. Error: $th';
            exit();
        }

    echo json_encode($response);
    exit();